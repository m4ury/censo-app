# Pruebas Unitarias - Sistema de Censo

Este documento describe las pruebas unitarias implementadas para los modelos **Paciente** y **Control** del sistema de censo médico.

## Archivos de Pruebas

- `tests/Unit/PacienteTest.php` - Pruebas para el modelo Paciente
- `tests/Unit/ControlTest.php` - Pruebas para el modelo Control

## Ejecutar las Pruebas

### Ejecutar todas las pruebas unitarias
```bash
php artisan test tests/Unit/PacienteTest.php tests/Unit/ControlTest.php
```

### Ejecutar solo pruebas de Paciente
```bash
php artisan test --filter=PacienteTest
```

### Ejecutar solo pruebas de Control
```bash
php artisan test --filter=ControlTest
```

### Ejecutar una prueba específica
```bash
php artisan test --filter=test_rut_debe_ser_unico
```

## Pruebas del Modelo Paciente (14 pruebas)

### Validaciones de RUT Chileno

1. **test_rut_es_obligatorio** - Verifica que el RUT sea un campo obligatorio
2. **test_rut_debe_ser_unico** - Valida que no se puedan registrar dos pacientes con el mismo RUT
3. **test_rut_no_debe_contener_puntos** - Verifica que el RUT no contenga puntos (formato incorrecto)
4. **test_rut_no_debe_contener_comas** - Verifica que el RUT no contenga comas
5. **test_rut_no_debe_comenzar_con_cero** - Valida que el RUT no comience con cero

### Validaciones de Ficha Clínica

6. **test_ficha_debe_ser_unica** - Verifica que la ficha clínica sea única en el sistema

### Validaciones de Datos Obligatorios

7. **test_nombres_son_obligatorios_y_minimo_tres_caracteres** - Valida que los nombres sean obligatorios y tengan al menos 3 caracteres
8. **test_apellido_paterno_es_obligatorio_y_minimo_tres_caracteres** - Valida que el apellido paterno sea obligatorio y tenga mínimo 3 caracteres
9. **test_direccion_es_obligatoria** - Verifica que la dirección sea obligatoria
10. **test_direccion_minimo_tres_caracteres** - Valida que la dirección tenga al menos 3 caracteres

### Validaciones Funcionales

11. **test_puede_crear_paciente_con_datos_validos** - Verifica la creación exitosa de un paciente con datos válidos
12. **test_metodo_edad_calcula_correctamente** - Valida el cálculo correcto de la edad del paciente
13. **test_edad_en_meses_para_menores_de_un_anio** - Verifica el cálculo de edad en meses para bebés menores de 1 año
14. **test_sexo_debe_ser_valido** - Valida que el campo sexo contenga valores válidos

## Pruebas del Modelo Control (18 pruebas)

### Validaciones de Campos Obligatorios

1. **test_tipo_control_es_obligatorio** - Verifica que el tipo de control sea obligatorio
2. **test_fecha_control_es_obligatoria** - Valida que la fecha de control sea obligatoria
3. **test_fecha_control_no_puede_ser_futura** - Verifica que la fecha de control no puede ser futura
4. **test_peso_y_talla_obligatorios_para_control_medico** - Valida que peso y talla sean obligatorios en controles médicos
5. **test_peso_y_talla_no_obligatorios_para_psicologo** - Verifica que peso y talla NO sean obligatorios para controles psicológicos

### Validaciones de Presión Arterial

6. **test_sistolica_obligatoria_para_control_medico** - Valida que la presión sistólica sea obligatoria en controles médicos
7. **test_diastolica_obligatoria_para_control_medico** - Valida que la presión diastólica sea obligatoria en controles médicos

### Validaciones por Rangos Etarios - Pacientes con HTA

8. **test_pa_menor_140_90_obligatorio_para_hta_menor_80_anios** - Verifica validación de PA <140/90 para pacientes con HTA menores de 80 años
9. **test_pa_menor_150_90_obligatorio_para_hta_mayor_79_anios** - Verifica validación de PA <150/90 para pacientes con HTA mayores de 79 años

### Validaciones por Rangos Etarios - Pacientes con DM2

10. **test_hba1c_menor_7_porcent_obligatorio_para_dm2_menor_80_anios** - Valida HbA1c <7% para pacientes con DM2 menores de 80 años
11. **test_hba1c_menor_8_porcent_obligatorio_para_dm2_mayor_79_anios** - Valida HbA1c <8% para pacientes con DM2 mayores de 79 años

### Validaciones por Patologías

12. **test_ldl_obligatorio_para_paciente_con_dlp** - Verifica que el LDL sea obligatorio para pacientes con dislipidemia (DLP)
13. **test_evaluacion_pie_obligatoria_para_dm2_en_control_enfermera** - Valida que la evaluación de pie sea obligatoria para pacientes con DM2 en controles de enfermería

### Validaciones de Fechas y Controles

14. **test_proximo_control_debe_ser_posterior_a_fecha_control** - Verifica que la fecha del próximo control sea posterior a la fecha del control actual

### Validaciones Funcionales

15. **test_puede_crear_control_con_datos_validos** - Verifica la creación exitosa de un control con datos válidos
16. **test_control_pertenece_a_paciente** - Valida la relación correcta entre control y paciente

### Validaciones Numéricas

17. **test_peso_debe_ser_numerico_y_mayor_que_uno** - Verifica que el peso sea numérico y mayor a 1
18. **test_talla_debe_ser_numerica_y_mayor_que_uno** - Verifica que la talla sea numérica y mayor a 1

## Cobertura de Validaciones

### Validaciones de RUT Chileno ✅
- RUT sin puntos
- RUT sin comas
- RUT no comienza con cero
- RUT único en el sistema

### Validaciones de Datos Obligatorios ✅
- Nombres (mínimo 3 caracteres)
- Apellido paterno (mínimo 3 caracteres)
- Dirección (mínimo 3 caracteres)
- Fecha de nacimiento
- Ficha clínica única

### Validaciones por Rangos Etarios ✅
- Pacientes < 80 años: PA < 140/90 (HTA), HbA1c < 7% (DM2)
- Pacientes ≥ 80 años: PA < 150/90 (HTA), HbA1c < 8% (DM2)

### Validaciones por Patologías ✅
- HTA: Control de presión arterial según edad
- DM2: Control de HbA1c según edad + evaluación de pie en controles de enfermería
- DLP: Medición de LDL obligatoria

### Validaciones por Tipo de Control ✅
- Médico: Requiere peso, talla, presión arterial
- Enfermera: Requiere peso, talla
- Psicólogo: No requiere datos antropométricos
- Dentista: No requiere datos antropométricos

## Resultados

```
✅ 32 pruebas pasadas
✅ 55 aserciones ejecutadas
✅ 100% de éxito
```

## Consideraciones Técnicas

1. Las pruebas utilizan **RefreshDatabase** para mantener la base de datos limpia entre pruebas
2. Se crean pacientes de prueba con diferentes patologías (HTA, DM2, DLP) y rangos etarios
3. Se validan las reglas de negocio implementadas en **PacienteRequest** y **ControlRequest**
4. Las pruebas verifican tanto validaciones exitosas como fallidas

## Mantenimiento

Para mantener estas pruebas actualizadas:

1. Agregar nuevas pruebas cuando se implementen nuevas validaciones
2. Actualizar pruebas existentes si cambian las reglas de negocio
3. Ejecutar las pruebas antes de cada commit para asegurar que no se rompa funcionalidad existente
4. Mantener cobertura de pruebas > 80%

## Bugs Corregidos Durante la Implementación

1. **Migraciones con unsignedFloat**: Se corrigieron 2 migraciones que usaban `unsignedFloat()` (método no disponible) y se reemplazó por `float()->unsigned()`
   - `2021_03_03_205457_add_fields_to_control_table.php`
   - `2021_03_05_194040_add_more_fields_to_control_table.php`

## Autor

Desarrollado para el Sistema de Censo - Centro de Salud
Fecha: Marzo 2026
