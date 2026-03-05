<div class="card card-primary card-outline mb-3 px-3" id="Dentista">
    <div class="card-header text-bold">Control, Segun riesgo Odontoloigico Y Daño por Caries</div>
    <div class="form-group row my-2">
        <label for="rCero_label" class="col-sm-3 col-form-label rCero_label">Eval. Riesgo segun Pauta CERO</label>
        <div class="col-sm-3" id="rCero_col">
            {{ html()->select('rCero', [
                    'bajo' => 'Riesgo Bajo',
                    'alto' => 'Riesgo Alto',
                ], old('rCero', $control->rCero))->class('form-control')->placeholder('Resultado Evaluacion')->id('rCero') }}
        </div>

        <label for="dCaries_label" class="col-sm-3 col-form-label dCaries_label">Daño por Caries Segun Indice CEOD o COPD</label>
        <div class="col-sm-3" id="dCaries_col">
            {{ html()->select('dCaries', [
                    'none' => '0',
                    '1_2' => '1 a 2',
                    '3_4' => '3 a 4',
                    '5_6' => '5 a 6',
                    '7_8' => '7 a 8',
                    'mas_9' => '9 o mas',
                ], old('dCaries', $control->dCaries))->class('form-control')->placeholder('Resultado Indice')->id('dCaries') }}
        </div>

        <label for="inasistente_label" class="col-sm-3 col-form-label text-bold inasistente_label py-3">Inasistente</label>
        <div class="col-sm-3 py-3">
            {{ html()->checkbox('inasistente', old('inasistente', $control->inasistente == 1 ? true : null), 1)->class('col form-control')->id('inasistente') }}
        </div>

    </div>
</div>
