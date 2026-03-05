<div class="card card-success card-outline mb-3" id="Kine">
    <div class="card-header text-bold text-success">PROGRAMAS RESPIRATORIOS</div>
    <div class="form-group row my-2 ml-2 mx-3">
        <label for="asmaClasif_label" class="col-sm col-form-label">ASMA clasif.</label>
        <div class="col-sm-9">
            {{ html()->select('asmaClasif', ['Leve' => 'Leve', 'Moderado' => 'Moderado', 'Severo' => 'Severo'], old('asmaClasif', $control->asmaClasif))->class('form-control form-control-sm asmaClasif')->placeholder('Seleccione una opción') }}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 mx-3">
        <label for="asmaControl_label" class="col-sm-3 col-form-label">ASMA nivel de control</label>
        <div class="col-sm-9">
            {{ html()->select('asmaControl', [
                    'Controlado' => 'Controlado',
                    'Parcialmente Controlado' => 'Parcialmente Controlado',
                    'No Controlado' => 'No Controlado',
                    'No Evaluado' => 'No Evaluado',
                ], old('asmaControl', $control->asmaControl))->class('form-control form-control-sm asmaControl')->placeholder('Seleccione una opción') }}
        </div>
    </div>

    {{-- EPOC desde 40 años en adelante --}}
    @if ($paciente->grupo > 39)
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="epocClasif_label" class="col-sm-3 col-form-label">EPOC clasif.</label>
            <div class="col-sm-9">
                {{ html()->select('epocClasif', ['A' => 'A', 'B' => 'B'], old('epocClasif', $control->epocClasif))->class('form-control form-control-sm epocClasif')->placeholder('Seleccione una opción') }}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="epocControl_label" class="col-sm-3 col-form-label">EPOC nivel de control</label>
            <div class="col-sm-9">
                {{ html()->select('epocControl', ['Logra Control' => 'Logra Control', 'No Logra Control' => 'No Logra Control', 'No Evaluado' => 'No Evaluado'], old('epocControl', $control->epocControl))->class('form-control form-control-sm epocControl')->placeholder('Seleccione una opción') }}
            </div>
        </div>
    @endif

    {{-- //otras enfermedades respiratorias --}}
    <div class="form-group row my-2 ml-2 mx-3">
        <label for="otras_enf_label" class="col-sm-3 col-form-label">Otras Enf. respiratorias cronicas</label>
        <div class="col-sm-9">
            {{ html()->select('otras_enf', [
                    'Otras respiratorias cronicas' => 'Otras respiratorias cronicas',
                    'Oxigeno dependiente' => 'Oxigeno dependiente',
                    'Asistencia ventilatoria no invasiva o invasiva' => 'Asistencia ventilatoria no invasiva o invasiva',
                    'Fibrosis quistica' => 'Fibrosis quistica',
                ], old('otras_enf', $control->otras_enf))->class('form-control form-control-sm otras_enf')->placeholder('Seleccione una opción') }}
        </div>
    </div>

    {{-- //SBOR de 0 a 4 años --}}
    @if ($paciente->grupo < 5)
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="sborClasif_label" class="col-sm col-form-label">SBOR clasif.</label>
            <div class="col-sm-9">
                {{ html()->select('sborClasif', ['Leve' => 'Leve', 'Moderado' => 'Moderado', 'Severo' => 'Severo'], old('sborClasif', $control->sborClasif))->class('form-control form-control-sm sborClasif')->placeholder('Seleccione una opción') }}
            </div>
        </div>
    @endif
    <div class="card-body row form-group" id="espirometria">
        <label for="espirometriaVigente_label" class="col-sm-6
                        col-form-label">ESPIROMETRIA VIGENTE</label>
        <div class="col-sm-6">
            {{ html()->date('espirometriaVigente', old('espirometriaVigente', $control->espirometriaVigente))->class('form-control') }}
        </div>
    </div>

</div>
