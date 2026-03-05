<?php
/**
 * convert_form_to_spatie.php
 *
 * Clean conversion of Laravel Collective Form:: calls to Spatie html() helpers.
 * Also handles plain HTML form elements (auth files, fecha_corte_selector).
 *
 * Strategy:
 * 1. Revert each broken file to git HEAD (original Form:: / HTML syntax)
 * 2. Convert all {!! Form::xxx() !!} to {{ html()->xxx() }}
 * 3. Convert plain HTML <form>, <input>, <select>, <textarea>, <button> to Spatie
 * 4. Convert Form::label to plain HTML <label>
 */

$basePath = __DIR__ . '/resources/views';

// All files that need reverting and reconversion
$filesToProcess = [
    'auth/login.blade.php',
    'auth/register.blade.php',
    'constancias/edit.blade.php',
    'constancias/form.blade.php',
    'constancias/modal.blade.php',
    'controles/form.blade.php',
    'encuestas/edit.blade.php',
    'encuestas/form.blade.php',
    'encuestas/list_encuestas.blade.php',
    'estadisticas/metas.blade.php',
    'estadisticas/rayos.blade.php',
    'examenes/create.blade.php',
    'examenes/form.blade.php',
    'interconsultas/createModal.blade.php',
    'interconsultas/editModal.blade.php',
    'interconsultas/form.blade.php',
    'pacientes/edit.blade.php',
    'pacientes/form.blade.php',
    'partials/adolecente.blade.php',
    'partials/dental.blade.php',
    'partials/dlp.blade.php',
    'partials/dm2.blade.php',
    'partials/ecicep.blade.php',
    'partials/efam.blade.php',
    'partials/empam.blade.php',
    'partials/fecha_corte_selector.blade.php',
    'partials/hta.blade.php',
    'partials/mater.blade.php',
    'partials/nino_sano.blade.php',
    'partials/nut.blade.php',
    'partials/sala_era.blade.php',
    'partials/salud_mental.blade.php',
    'patologias/edit.blade.php',
    'patologias/form.blade.php',
    'patologias/list_patologias.blade.php',
    'solicitudes/all.blade.php',
    'solicitudes/modal.blade.php',
];

// ============================================================================
// UTILITY: PHP expression parser
// ============================================================================

/**
 * Split a PHP expression at top-level commas.
 * Respects nesting of (), [], {}, and string literals '' "".
 */
function splitTopLevelCommas($str) {
    $parts = [];
    $depth = 0;
    $inString = false;
    $stringChar = '';
    $current = '';
    $len = strlen($str);

    for ($i = 0; $i < $len; $i++) {
        $ch = $str[$i];

        if ($inString) {
            $current .= $ch;
            if ($ch === '\\' && $i + 1 < $len) {
                $current .= $str[++$i];
                continue;
            }
            if ($ch === $stringChar) {
                $inString = false;
            }
            continue;
        }

        if ($ch === "'" || $ch === '"') {
            $inString = true;
            $stringChar = $ch;
            $current .= $ch;
        } elseif ($ch === '(' || $ch === '[' || $ch === '{') {
            $depth++;
            $current .= $ch;
        } elseif ($ch === ')' || $ch === ']' || $ch === '}') {
            $depth--;
            $current .= $ch;
        } elseif ($ch === ',' && $depth === 0) {
            $parts[] = trim($current);
            $current = '';
        } else {
            $current .= $ch;
        }
    }

    if (trim($current) !== '') {
        $parts[] = trim($current);
    }

    return $parts;
}

/**
 * Find => at top level in a string (not inside strings, parens, brackets).
 */
function findTopLevelArrow($str) {
    $depth = 0;
    $inString = false;
    $stringChar = '';
    $len = strlen($str);

    for ($i = 0; $i < $len - 1; $i++) {
        $ch = $str[$i];

        if ($inString) {
            if ($ch === '\\' && $i + 1 < $len) {
                $i++;
                continue;
            }
            if ($ch === $stringChar) {
                $inString = false;
            }
            continue;
        }

        if ($ch === "'" || $ch === '"') {
            $inString = true;
            $stringChar = $ch;
        } elseif ($ch === '(' || $ch === '[' || $ch === '{') {
            $depth++;
        } elseif ($ch === ')' || $ch === ']' || $ch === '}') {
            $depth--;
        } elseif ($ch === '=' && $str[$i + 1] === '>' && $depth === 0) {
            return $i;
        }
    }

    return false;
}

/**
 * Parse a PHP array literal: ['key' => 'value', ...]
 * Returns assoc array where values are raw PHP expression strings.
 */
function parseArrayLiteral($str) {
    $str = trim($str);

    if (preg_match('/^\[(.+)\]$/s', $str, $m)) {
        $str = $m[1];
    } else {
        return [];
    }

    $pairs = splitTopLevelCommas($str);
    $result = [];

    foreach ($pairs as $pair) {
        $pair = trim($pair);
        if ($pair === '') continue;

        $arrowPos = findTopLevelArrow($pair);
        if ($arrowPos !== false) {
            $key = trim(substr($pair, 0, $arrowPos));
            $value = trim(substr($pair, $arrowPos + 2));
            $key = trim($key, "'\"");
            $result[$key] = $value;
        } else {
            $result[] = $pair;
        }
    }

    return $result;
}

// ============================================================================
// ATTRIBUTE CONVERSION: PHP attrs array → Spatie method chain
// ============================================================================

/**
 * Convert a class attribute value (raw PHP expression) to Spatie chain.
 *
 * Handles:
 *   'form-control' → ->class('form-control')
 *   'form-control' . ($errors->has('x') ? ' is-invalid' : '') → ->class('form-control')->classIf(...)
 *   'form-control form-control-sm' . ($errors->has('x') ? ' is-invalid' : '') → ->class('...')->classIf(...)
 */
function classExprToChain($expr) {
    $expr = trim($expr);

    // Pattern: 'BASE' . ($errors->has('FIELD') ? ' is-invalid' : '')
    if (preg_match("/^'([^']+)'\s*\.\s*\(\\\$errors->has\(\s*'([^']+)'\s*\)\s*\?\s*'\s*is-invalid'\s*:\s*''\s*\)$/s", $expr, $m)) {
        return "->class('" . trim($m[1]) . "')->classIf(\$errors->has('" . $m[2] . "'), 'is-invalid')";
    }

    // Simple string: 'form-control'
    if (preg_match("/^'[^']*'$/", $expr)) {
        return "->class(" . $expr . ")";
    }

    // Variable or complex: just pass through
    return "->class(" . $expr . ")";
}

/**
 * Convert a parsed attributes array to Spatie method chain string.
 */
function attrsToChain($attrs) {
    $chain = '';

    foreach ($attrs as $key => $value) {
        if (is_int($key)) continue; // skip indexed values

        switch ($key) {
            case 'class':
                $chain .= classExprToChain($value);
                break;
            case 'id':
                $chain .= "->id(" . $value . ")";
                break;
            case 'placeholder':
                $chain .= "->placeholder(" . $value . ")";
                break;
            case 'rows':
                $val = trim($value, "'\"");
                $chain .= "->rows(" . $val . ")";
                break;
            case 'step':
                $chain .= "->attribute('step', " . $value . ")";
                break;
            case 'readonly':
                $chain .= '->isReadonly()';
                break;
            case 'disabled':
                $chain .= '->isDisabled()';
                break;
            case 'required':
                $chain .= '->required()';
                break;
            case 'multiple':
                $chain .= '->multiple()';
                break;
            case 'autofocus':
                $chain .= '->autofocus()';
                break;
            default:
                $chain .= "->attribute('" . $key . "', " . $value . ")";
                break;
        }
    }

    return $chain;
}

// ============================================================================
// FORM:: CONVERTERS
// ============================================================================

/**
 * Main dispatcher: convert a Form:: call to Spatie.
 *
 * $inner is everything between {!! and !!}, e.g.:
 *   Form::text('name', old('name', $model->field), ['class' => 'form-control'])
 */
function convertFormCall($inner) {
    $inner = trim($inner);

    // Match Form::TYPE(args)
    if (!preg_match('/^Form::(\w+)\s*\((.*)\)$/s', $inner, $m)) {
        return null;
    }

    $type = $m[1];
    $argsStr = trim($m[2]);
    $args = splitTopLevelCommas($argsStr);

    switch ($type) {
        case 'open':     return convertFormOpen($args);
        case 'close':    return "{{ html()->form()->close() }}";
        case 'model':    return convertFormModel($args);
        case 'text':     return convertFormInput('text', $args);
        case 'number':   return convertFormInput('number', $args);
        case 'date':     return convertFormInput('date', $args);
        case 'email':    return convertFormInput('email', $args);
        case 'tel':      return convertFormInput('tel', $args);
        case 'time':     return convertFormInput('time', $args);
        case 'url':      return convertFormInput('url', $args);
        case 'password': return convertFormPassword($args);
        case 'hidden':   return convertFormHidden($args);
        case 'textarea': return convertFormTextarea($args);
        case 'select':   return convertFormSelect($args);
        case 'selectMonth': return convertFormSelectMonth($args);
        case 'checkbox': return convertFormCheckbox($args);
        case 'radio':    return convertFormRadio($args);
        case 'datetimeLocal': return convertFormDatetimeLocal($args);
        case 'selectRange':  return convertFormSelectRange($args);
        case 'submit':   return convertFormSubmit($args);
        case 'button':   return convertFormSubmit($args);
        case 'label':    return convertFormLabel($args);
        case 'token':    return '{{ csrf_field() }}';
        default:         return null;
    }
}

function convertFormOpen($args) {
    if (empty($args)) return "{{ html()->form('GET', '')->open() }}";

    $attrs = parseArrayLiteral($args[0]);

    $method = "'POST'";
    $action = "''";
    $extras = [];

    if (isset($attrs['method'])) {
        $method = strtoupper(trim($attrs['method'], "'\""));
        $method = "'" . $method . "'";
        unset($attrs['method']);
    }
    if (isset($attrs['route'])) {
        // route can be 'name' or ['name', $param]
        $routeVal = trim($attrs['route']);
        if (preg_match('/^\[/', $routeVal)) {
            // Array route: ['name', $param]
            $action = "route(" . $routeVal . ")";
        } else {
            $action = "route(" . $routeVal . ")";
        }
        unset($attrs['route']);
    }
    if (isset($attrs['url'])) {
        $action = $attrs['url'];
        unset($attrs['url']);
    }
    if (isset($attrs['action'])) {
        $action = "action(" . $attrs['action'] . ")";
        unset($attrs['action']);
    }
    if (isset($attrs['files'])) {
        $extras[] = '->acceptsFiles()';
        unset($attrs['files']);
    }
    // Remove 'enctype' if present (handled by acceptsFiles)
    unset($attrs['enctype']);

    $chain = attrsToChain($attrs);

    return "{{ html()->form(" . $method . ", " . $action . ")" . $chain . implode('', $extras) . "->open() }}";
}

function convertFormModel($args) {
    $model = $args[0] ?? '$model';
    $optsStr = $args[1] ?? '[]';
    $attrs = parseArrayLiteral($optsStr);

    $method = "'PUT'";
    $action = "''";

    if (isset($attrs['method'])) {
        $method = strtoupper(trim($attrs['method'], "'\""));
        $method = "'" . $method . "'";
        unset($attrs['method']);
    }
    if (isset($attrs['route'])) {
        $routeVal = trim($attrs['route']);
        $action = "route(" . $routeVal . ")";
        unset($attrs['route']);
    }
    if (isset($attrs['url'])) {
        $action = $attrs['url'];
        unset($attrs['url']);
    }

    $chain = attrsToChain($attrs);

    return "{{ html()->modelForm(" . $model . ", " . $method . ", " . $action . ")" . $chain . "->open() }}";
}

/**
 * Form::text('name', value, attrs)  → {{ html()->text('name', value)->chain }}
 * Form::number, date, email, tel, time, url all follow same pattern.
 */
function convertFormInput($type, $args) {
    $name = $args[0] ?? "''";
    $value = isset($args[1]) ? trim($args[1]) : 'null';
    $attrsStr = $args[2] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    if ($type === 'tel') {
        return "{{ html()->input('tel', " . $name . ", " . $value . ")" . $chain . " }}";
    }

    return "{{ html()->" . $type . "(" . $name . ", " . $value . ")" . $chain . " }}";
}

function convertFormPassword($args) {
    $name = $args[0] ?? "''";
    $attrsStr = $args[1] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->password(" . $name . ")" . $chain . " }}";
}

function convertFormHidden($args) {
    $name = $args[0] ?? "''";
    $value = isset($args[1]) ? trim($args[1]) : 'null';
    $attrsStr = $args[2] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->hidden(" . $name . ", " . $value . ") }}";
}

function convertFormTextarea($args) {
    $name = $args[0] ?? "''";
    $value = isset($args[1]) ? trim($args[1]) : 'null';
    $attrsStr = $args[2] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->textarea(" . $name . ", " . $value . ")" . $chain . " }}";
}

/**
 * Form::select('name', [options], selected, attrs)
 * → {{ html()->select('name', [options], selected)->chain }}
 *
 * Options array is passed through as-is (already valid PHP).
 */
function convertFormSelect($args) {
    $name = $args[0] ?? "''";
    $optionsStr = isset($args[1]) ? trim($args[1]) : '[]';
    $selected = isset($args[2]) ? trim($args[2]) : 'null';
    $attrsStr = $args[3] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->select(" . $name . ", " . $optionsStr . ", " . $selected . ")" . $chain . " }}";
}

/**
 * Form::selectMonth('name', selected, attrs)
 * → {{ html()->select('name', months_array, selected)->chain }}
 */
function convertFormSelectMonth($args) {
    $name = $args[0] ?? "'month'";
    $selected = isset($args[1]) ? trim($args[1]) : 'null';
    $attrsStr = $args[2] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    $months = "['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre']";

    return "{{ html()->select(" . $name . ", " . $months . ", " . $selected . ")" . $chain . " }}";
}

/**
 * Form::checkbox('name', value, checked, attrs)
 * → {{ html()->checkbox('name', checked, value)->chain }}
 *
 * IMPORTANT: Parameter order changes!
 *   Form::    checkbox(name, value, checked, attrs)
 *   Spatie:   checkbox(name, checked, value)
 */
function convertFormCheckbox($args) {
    $name = $args[0] ?? "''";
    $value = isset($args[1]) ? trim($args[1]) : '1';
    $checked = isset($args[2]) ? trim($args[2]) : 'false';
    $attrsStr = $args[3] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->checkbox(" . $name . ", " . $checked . ", " . $value . ")" . $chain . " }}";
}

function convertFormRadio($args) {
    $name = $args[0] ?? "''";
    $value = isset($args[1]) ? trim($args[1]) : 'null';
    $checked = isset($args[2]) ? trim($args[2]) : 'false';
    $attrsStr = $args[3] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->radio(" . $name . ", " . $checked . ", " . $value . ")" . $chain . " }}";
}

/**
 * Form::datetimeLocal('name', value, attrs)
 * → {{ html()->input('datetime-local', 'name', value)->chain }}
 */
function convertFormDatetimeLocal($args) {
    $name = $args[0] ?? "''";
    $value = isset($args[1]) ? trim($args[1]) : 'null';
    $attrsStr = $args[2] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->input('datetime-local', " . $name . ", " . $value . ")" . $chain . " }}";
}

/**
 * Form::selectRange('name', begin, end, selected, attrs)
 * → {{ html()->select('name', [begin => begin, ..., end => end], selected)->chain }}
 */
function convertFormSelectRange($args) {
    $name = $args[0] ?? "''";
    $begin = isset($args[1]) ? intval(trim($args[1])) : 1;
    $end = isset($args[2]) ? intval(trim($args[2])) : 10;
    $selected = isset($args[3]) ? trim($args[3]) : 'null';
    $attrsStr = $args[4] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    // Build range options
    $options = [];
    for ($i = $begin; $i <= $end; $i++) {
        $options[] = "'" . $i . "' => '" . $i . "'";
    }
    $optionsStr = '[' . implode(', ', $options) . ']';

    return "{{ html()->select(" . $name . ", " . $optionsStr . ", " . $selected . ")" . $chain . " }}";
}

function convertFormSubmit($args) {
    $text = $args[0] ?? "''";
    $attrsStr = $args[1] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);
    $chain = attrsToChain($attrs);

    return "{{ html()->submit(" . $text . ")" . $chain . " }}";
}

/**
 * Form::label('for', 'text', attrs)
 * → <label for="for" class="...">text</label>
 *
 * Using plain HTML for labels since they're simple.
 */
function convertFormLabel($args) {
    $for = trim($args[0] ?? "''", "'\"");
    $text = trim($args[1] ?? "''", "'\"");
    $attrsStr = $args[2] ?? '[]';

    $attrs = parseArrayLiteral($attrsStr);

    $attrsHtml = '';
    foreach ($attrs as $key => $value) {
        if (is_int($key)) continue;
        $val = trim($value, "'\"");
        $attrsHtml .= ' ' . $key . '="' . $val . '"';
    }

    return '<label for="' . $for . '"' . $attrsHtml . '>' . $text . '</label>';
}

// ============================================================================
// HTML → SPATIE CONVERTERS (for auth files and other HTML forms)
// ============================================================================

/**
 * Find the end of an HTML tag, handling {{ }} blocks inside attributes.
 * Returns position of the closing >.
 */
function findTagEnd($content, $startPos) {
    $pos = $startPos;
    $len = strlen($content);
    $bladeDepth = 0;
    $inQuote = false;
    $quoteChar = '';

    while ($pos < $len) {
        $ch = $content[$pos];

        // Track Blade {{ }} nesting
        if (!$inQuote || $quoteChar === '"') {
            if ($pos + 1 < $len && $ch === '{' && $content[$pos + 1] === '{') {
                $bladeDepth++;
                $pos += 2;
                continue;
            }
            if ($pos + 1 < $len && $ch === '}' && $content[$pos + 1] === '}') {
                $bladeDepth--;
                $pos += 2;
                continue;
            }
        }

        // Track attribute quotes
        if ($ch === '"' && $bladeDepth === 0) {
            if (!$inQuote) {
                $inQuote = true;
                $quoteChar = '"';
            } elseif ($quoteChar === '"') {
                $inQuote = false;
            }
        } elseif ($ch === "'" && $bladeDepth === 0 && !$inQuote) {
            // Single quotes in HTML attrs
            $inQuote = true;
            $quoteChar = "'";
        } elseif ($ch === "'" && $inQuote && $quoteChar === "'") {
            $inQuote = false;
        }

        // Found closing > outside all nesting
        if ($ch === '>' && $bladeDepth === 0 && !$inQuote) {
            return $pos;
        }

        $pos++;
    }

    return false;
}

/**
 * Parse HTML attributes from the inner content of a tag.
 * Handles Blade expressions {{ ... }} inside attribute values.
 */
function parseHtmlAttrs($tagInner) {
    $attrs = [];
    $tagInner = trim($tagInner);
    $len = strlen($tagInner);
    $pos = 0;

    while ($pos < $len) {
        // Skip whitespace and newlines
        while ($pos < $len && ($tagInner[$pos] === ' ' || $tagInner[$pos] === "\t" || $tagInner[$pos] === "\n" || $tagInner[$pos] === "\r")) {
            $pos++;
        }
        if ($pos >= $len) break;

        // Read attribute name
        $nameStart = $pos;
        while ($pos < $len && $tagInner[$pos] !== '=' && $tagInner[$pos] !== ' ' && $tagInner[$pos] !== "\t" && $tagInner[$pos] !== "\n" && $tagInner[$pos] !== "\r" && $tagInner[$pos] !== '>' && $tagInner[$pos] !== '/') {
            $pos++;
        }
        $attrName = trim(substr($tagInner, $nameStart, $pos - $nameStart));
        if ($attrName === '' || $attrName === '/') break;

        // Skip whitespace
        while ($pos < $len && ($tagInner[$pos] === ' ' || $tagInner[$pos] === "\t" || $tagInner[$pos] === "\n" || $tagInner[$pos] === "\r")) {
            $pos++;
        }

        // Check for =
        if ($pos < $len && $tagInner[$pos] === '=') {
            $pos++; // skip =
            while ($pos < $len && ($tagInner[$pos] === ' ' || $tagInner[$pos] === "\t" || $tagInner[$pos] === "\n" || $tagInner[$pos] === "\r")) {
                $pos++;
            }

            // Read value
            if ($pos < $len && ($tagInner[$pos] === '"' || $tagInner[$pos] === "'")) {
                $quote = $tagInner[$pos];
                $pos++; // skip opening quote
                $valueStart = $pos;
                $bladeDepth = 0;

                while ($pos < $len) {
                    if ($pos + 1 < $len && $tagInner[$pos] === '{' && $tagInner[$pos + 1] === '{') {
                        $bladeDepth++;
                        $pos += 2;
                        continue;
                    }
                    if ($pos + 1 < $len && $tagInner[$pos] === '}' && $tagInner[$pos + 1] === '}') {
                        $bladeDepth--;
                        $pos += 2;
                        continue;
                    }
                    if ($tagInner[$pos] === $quote && $bladeDepth === 0) {
                        break;
                    }
                    $pos++;
                }
                $attrValue = substr($tagInner, $valueStart, $pos - $valueStart);
                if ($pos < $len) $pos++; // skip closing quote

                $attrs[$attrName] = $attrValue;
            } else {
                // Unquoted value
                $valueStart = $pos;
                while ($pos < $len && $tagInner[$pos] !== ' ' && $tagInner[$pos] !== "\t" && $tagInner[$pos] !== "\n" && $tagInner[$pos] !== '>' && $tagInner[$pos] !== '/') {
                    $pos++;
                }
                $attrs[$attrName] = substr($tagInner, $valueStart, $pos - $valueStart);
            }
        } else {
            // Boolean attribute (no value)
            $attrs[$attrName] = true;
        }
    }

    return $attrs;
}

/**
 * Convert Blade expression "{{ expr }}" to PHP expression "expr"
 */
function bladeToPhp($str) {
    $str = trim($str);
    if (preg_match('/^\{\{\s*(.+?)\s*\}\}$/s', $str, $m)) {
        return $m[1];
    }
    // Plain string
    return "'" . str_replace("'", "\\'", $str) . "'";
}

/**
 * Convert HTML class attribute (may contain Blade expressions) to Spatie chain.
 */
function htmlClassToChain($classVal) {
    // Pattern: "base-classes {{ $errors->has('field') ? 'is-invalid' : '' }}"
    if (preg_match('/^([\w\-\s]*?)\s*\{\{\s*\$errors->has\(\s*[\'"]([^\'"]+)[\'"]\s*\)\s*\?\s*[\'"]is-invalid[\'"]\s*:\s*[\'"][\'"]?\s*\}\}\s*$/s', $classVal, $m)) {
        $base = trim($m[1]);
        $field = $m[2];
        $chain = '';
        if ($base !== '') $chain .= "->class('" . $base . "')";
        $chain .= "->classIf(\$errors->has('" . $field . "'), 'is-invalid')";
        return $chain;
    }

    // Simple string
    return "->class('" . $classVal . "')";
}

/**
 * Build Spatie chain from parsed HTML attributes.
 */
function htmlAttrsToChain($attrs) {
    $chain = '';
    foreach ($attrs as $key => $val) {
        if (is_int($key)) continue;
        switch ($key) {
            case 'class':
                $chain .= htmlClassToChain($val);
                break;
            case 'id':
                $chain .= "->id('" . $val . "')";
                break;
            case 'placeholder':
                if (preg_match('/^\{\{.*\}\}$/', trim($val))) {
                    $chain .= "->placeholder(" . bladeToPhp($val) . ")";
                } else {
                    $chain .= "->placeholder('" . str_replace("'", "\\'", $val) . "')";
                }
                break;
            case 'step':
                $chain .= "->attribute('step', '" . $val . "')";
                break;
            case 'rows':
                if (preg_match('/^\{\{.*\}\}$/', trim($val))) {
                    $chain .= "->rows(" . bladeToPhp($val) . ")";
                } else {
                    $chain .= "->rows(" . $val . ")";
                }
                break;
            case 'required':
                $chain .= '->required()';
                break;
            case 'readonly':
                $chain .= '->isReadonly()';
                break;
            case 'disabled':
                $chain .= '->isDisabled()';
                break;
            case 'multiple':
                $chain .= '->multiple()';
                break;
            case 'autofocus':
                $chain .= '->autofocus()';
                break;
            default:
                if ($val === true) {
                    $chain .= "->attribute('" . $key . "', '" . $key . "')";
                } else {
                    $chain .= "->attribute('" . $key . "', '" . str_replace("'", "\\'", $val) . "')";
                }
                break;
        }
    }
    return $chain;
}

/**
 * Convert an HTML <input> tag to Spatie.
 */
function convertHtmlInputTag($tagStr) {
    // Remove <input and closing > or />
    $inner = preg_replace('/^<input\s*/is', '', $tagStr);
    $inner = preg_replace('/\/?\s*>$/s', '', $inner);

    $attrs = parseHtmlAttrs($inner);

    $type = $attrs['type'] ?? 'text';
    $name = $attrs['name'] ?? '';
    unset($attrs['type'], $attrs['name']);

    // Get value
    $value = null;
    if (isset($attrs['value'])) {
        $value = $attrs['value'];
        unset($attrs['value']);
    }

    // Convert value expression
    if ($value !== null) {
        $valueExpr = bladeToPhp($value);
    } else {
        $valueExpr = 'null';
    }

    // Resolve type
    switch ($type) {
        case 'hidden':
            $chain = htmlAttrsToChain($attrs);
            return "{{ html()->hidden('" . $name . "', " . $valueExpr . ")" . $chain . " }}";

        case 'checkbox':
            $checked = isset($attrs['checked']) ? 'true' : 'false';
            unset($attrs['checked']);
            $chain = htmlAttrsToChain($attrs);
            return "{{ html()->checkbox('" . $name . "', " . $checked . ", " . $valueExpr . ")" . $chain . " }}";

        case 'password':
            unset($attrs['value']); // passwords don't have value
            $chain = htmlAttrsToChain($attrs);
            return "{{ html()->password('" . $name . "')" . $chain . " }}";

        case 'submit':
            $chain = htmlAttrsToChain($attrs);
            return "{{ html()->submit(" . $valueExpr . ")" . $chain . " }}";

        default:
            // text, number, date, email, tel, time, url, etc.
            $chain = htmlAttrsToChain($attrs);
            if ($type === 'rut') $type = 'text'; // 'rut' is not a standard type
            return "{{ html()->" . $type . "('" . $name . "', " . $valueExpr . ")" . $chain . " }}";
    }
}

/**
 * Process HTML form elements in content (for non-Form:: files).
 * Uses state machine to properly find tag boundaries.
 */
function processHtmlFormElements($content) {
    // Process <form> opening tags
    $result = '';
    $pos = 0;
    $len = strlen($content);

    while ($pos < $len) {
        // Look for <form, <input, <select, <textarea, </form>, <button
        $nextMatch = null;
        $nextType = null;
        $nextPos = PHP_INT_MAX;

        // Search for each tag type
        foreach (['<form ', '<form>', '<input ', '<input/', '</form>', '<button '] as $tag) {
            $p = stripos($content, $tag, $pos);
            if ($p !== false && $p < $nextPos) {
                $nextPos = $p;
                $nextType = strtolower(explode(' ', explode('/', explode('>', $tag)[0])[0])[0]);
                $nextType = ltrim($nextType, '<');
            }
        }

        if ($nextPos === PHP_INT_MAX) {
            // No more tags
            $result .= substr($content, $pos);
            break;
        }

        // Copy content before the tag
        $result .= substr($content, $pos, $nextPos - $pos);

        // Find tag end
        $tagEnd = findTagEnd($content, $nextPos + 1);
        if ($tagEnd === false) {
            $result .= substr($content, $nextPos);
            break;
        }

        $tagStr = substr($content, $nextPos, $tagEnd - $nextPos + 1);

        if ($nextType === 'form' && stripos($tagStr, '</form>') === 0) {
            // </form>
            $result .= '{{ html()->form()->close() }}';
        } elseif ($nextType === 'form') {
            // <form ...>
            $inner = preg_replace('/^<form\s*/is', '', $tagStr);
            $inner = preg_replace('/\s*>$/s', '', $inner);
            $attrs = parseHtmlAttrs($inner);

            $method = strtoupper($attrs['method'] ?? 'GET');
            $action = $attrs['action'] ?? '';
            unset($attrs['method'], $attrs['action']);

            $actionExpr = bladeToPhp($action);
            $chain = htmlAttrsToChain($attrs);

            $result .= "{{ html()->form('" . $method . "', " . $actionExpr . ")" . $chain . "->open() }}";
        } elseif ($nextType === 'input') {
            $result .= convertHtmlInputTag($tagStr);
        } elseif ($nextType === 'button') {
            // Check if it's a submit button
            $inner = preg_replace('/^<button\s*/is', '', $tagStr);
            $inner = preg_replace('/\s*>$/s', '', $inner);
            $attrs = parseHtmlAttrs($inner);

            if (($attrs['type'] ?? '') === 'submit' || isset($attrs['type']) && $attrs['type'] === 'submit') {
                // Find the closing </button> and extract inner text
                $closeTag = stripos($content, '</button>', $tagEnd + 1);
                if ($closeTag !== false) {
                    $buttonContent = trim(substr($content, $tagEnd + 1, $closeTag - $tagEnd - 1));
                    // Keep button as HTML since it has complex inner content (icons, etc.)
                    $result .= $tagStr . $buttonContent . '</button>';
                    $pos = $closeTag + strlen('</button>');
                    continue;
                }
            }
            $result .= $tagStr; // Keep as-is
        } else {
            $result .= $tagStr; // Keep as-is
        }

        $pos = $tagEnd + 1;
    }

    return $result;
}

// ============================================================================
// MAIN PROCESSING
// ============================================================================

$totalChanges = 0;
$filesChanged = 0;

foreach ($filesToProcess as $relPath) {
    $fullPath = $basePath . '/' . $relPath;

    // Read original from git HEAD
    $cmd = "cd " . escapeshellarg(__DIR__) . " && git show HEAD:" . escapeshellarg("resources/views/" . $relPath) . " 2>/dev/null";
    $gitContent = shell_exec($cmd);

    if ($gitContent === null || $gitContent === '') {
        echo "SKIP: $relPath (not in git)\n";
        continue;
    }

    $content = $gitContent;
    $changes = 0;

    // ---- Phase 1: Convert {!! Form::xxx() !!} calls ----
    $result = '';
    $pos = 0;
    $len = strlen($content);

    while ($pos < $len) {
        // Find next {!! marker
        $formStart = strpos($content, '{!!', $pos);

        if ($formStart === false) {
            $result .= substr($content, $pos);
            break;
        }

        // Copy everything before
        $result .= substr($content, $pos, $formStart - $pos);

        // Find the matching !!}
        $endMarker = strpos($content, '!!}', $formStart + 3);
        if ($endMarker === false) {
            $result .= substr($content, $formStart);
            break;
        }
        $endPos = $endMarker + 3;

        // Extract the inner expression
        $inner = substr($content, $formStart + 3, $endMarker - $formStart - 3);
        $inner = trim($inner);

        // Check if it's a Form:: call
        if (preg_match('/^Form::/', $inner)) {
            $converted = convertFormCall($inner);
            if ($converted !== null) {
                $result .= $converted;
                $changes++;
            } else {
                // Unknown Form:: type, keep original
                $result .= '{!! ' . $inner . ' !!}';
                echo "  WARN: Unknown Form:: call in $relPath: " . substr($inner, 0, 60) . "\n";
            }
        } else {
            // Not a Form:: call, keep as-is
            $result .= '{!! ' . $inner . ' !!}';
        }

        $pos = $endPos;
    }

    $content = $result;

    // ---- Phase 1b: Convert {{ Form::xxx() }} calls (escaped variant) ----
    $result = '';
    $pos = 0;
    $len = strlen($content);

    while ($pos < $len) {
        // Find next {{ Form:: pattern
        $formStart = strpos($content, '{{ Form::', $pos);
        if ($formStart === false) {
            $formStart = strpos($content, '{{Form::', $pos);
        }

        if ($formStart === false) {
            $result .= substr($content, $pos);
            break;
        }

        // Copy everything before
        $result .= substr($content, $pos, $formStart - $pos);

        // Find the matching }} - but must handle nested {{ }}
        $searchStart = $formStart + 2;
        $endMarker = strpos($content, '}}', $searchStart);
        if ($endMarker === false) {
            $result .= substr($content, $formStart);
            break;
        }
        $endPos = $endMarker + 2;

        // Extract the inner expression
        $inner = substr($content, $formStart + 2, $endMarker - $formStart - 2);
        $inner = trim($inner);

        // Check if it's a Form:: call
        if (preg_match('/^Form::/', $inner)) {
            $converted = convertFormCall($inner);
            if ($converted !== null) {
                $result .= $converted;
                $changes++;
            } else {
                $result .= '{{ ' . $inner . ' }}';
                echo "  WARN: Unknown Form:: call in $relPath: " . substr($inner, 0, 60) . "\n";
            }
        } else {
            $result .= '{{ ' . $inner . ' }}';
        }

        $pos = $endPos;
    }

    $content = $result;

    // ---- Phase 2: Convert remaining HTML form elements ----
    // Simple replacements first
    $content = str_replace('</form>', '{{ html()->form()->close() }}', $content);

    // Only process complex HTML if there are still <form, <input etc. in the content
    if (preg_match('/<(form|input)\s/i', $content)) {
        $content = processHtmlFormElements($content);
        $changes++; // approximate
    }

    // Write the result
    file_put_contents($fullPath, $content);

    if ($changes > 0) {
        $filesChanged++;
        $totalChanges += $changes;
        echo "CONVERTED: $relPath ($changes changes)\n";
    } else {
        echo "WRITTEN: $relPath (no Form:: calls found)\n";
    }
}

echo "\n=== TOTAL: $totalChanges changes across $filesChanged files ===\n";
echo "Run 'php artisan view:cache' to verify.\n";
