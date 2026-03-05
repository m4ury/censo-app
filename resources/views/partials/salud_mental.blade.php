<div class="card card-success card-outline mb-3" id="Psicologo">
    <div class="card-header text-bold text-success">SALUD MENTAL - PERSONAS CON DIAGNOSTICOS DE TRASTORNOS MENTALES</div>

    <div class="form-group row my-2 ml-2 mx-3">
        <label for="diagSm_label" class="col-sm col-form-label">DIAG. DE TRASTORNOS MENTALES</label>
        <div class="col-sm">
            {{ html()->select('diagSm', [
                    'esquizo' => 'Esquizofrenia',
                    'epEsquizo' => 'Primer episodio Esquizofrenia con ocupacion regular',
                    'trCondAlim' => 'Trastornos de la condicion alimentaria',
                    'retrasoMental' => 'Retraso mental',
                    'trPersonalidad' => 'Trastornos de Personalidad',
                    'epilepsia' => 'Epilepsia',
                    'otras' => 'Otras',
                ], old('diagSm', $control->diagSm))->class('form-control form-control-sm diagSm')->placeholder('Seleccione una opción') }}
        </div>
    </div>

    <div class="form-group row my-2 ml-2 mx-3">
        <label for="trHumor_label" class="col-sm col-form-label">TRASTORNOS DEL HUMOR (AFECTIVOS)</label>
        <div class="col-sm">
            {{ html()->select('trHumor', [
                    'depLeve' => 'Depresión Leve',
                    'depMod' => 'Depresión Moderada',
                    'depGrave' => 'Depresión Grave',
                    'depPostParto' => 'Depresión Post Parto',
                    'trBipolar' => 'Trastorno Bipolar',
                ], old('trHumor', $control->trHumor))->class('form-control form-control-sm trHumor')->placeholder('Seleccione una opción') }}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 mx-3">
        <label for="trConsumo_label" class="col-sm col-form-label">TRASTORNOS MENTALES Y DEL COMPORTAMIENTO DEBIDO A CONSUMO SUSTANCIAS PSICOTROPICAS</label>
        <div class="col-sm">
            {{ html()->select('trConsumo', [
                    'alcohol' => 'Consumo perjudicial o dependencia del alcohol',
                    'drogas' => 'Consumo perjudicial o dependencia como droga principal',
                    'policonsumo' => 'Policonsumo',
                ], old('trConsumo', $control->trConsumo))->class('form-control form-control-sm trConsumo')->placeholder('Seleccione una opción') }}
        </div>
    </div>
    @if ($paciente->grupo < 19)
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="trInfAdol_label" class="col-sm col-form-label">TRASTORNOS DEL COMPORTAMIENTO Y DE LAS EMOCIONES DE COMIENZO HABITUAL EN LA INFANCIA Y ADOLESCENCIA</label>
            <div class="col-sm">
                {{ html()->select('trInfAdol', [
                        'trHiper' => 'Trastorno Hipercinético',
                        'trDis' => 'Trastorno Disocial Desafiante y Oposicionista',
                        'trAnsInf' => 'Trastorno de Ansiedad de separación en la infancia',
                        'otrosTrsInfAdol' =>
                            'Otros Trastornos del comportamiento y de las emociones de comienzo habitual en la infancia y adolesencia',
                    ], old('trInfAdol', $control->trInfAdol))->class('form-control form-control-sm trInfAdol')->placeholder('Seleccione una opción') }}
            </div>
        </div>
    @endif
    <div class="form-group row my-2 ml-2 mx-3">
        <label for="trAns_label" class="col-sm col-form-label">TRASTORNOS DE ANSIEDAD</label>
        <div class="col-sm">
            {{ html()->select('trAns', [
                    'trEstresPostT' => 'Trastorno de Estrés post traumatico',
                    'trPanicoAgo' => 'Trastorno de panico con Agorofobia',
                    'trPanico' => 'Trastorno de panico sin Agorofobia',
                    'fobiaSocial' => 'Fobias sociales',
                    'trAnsGen' => 'Trastornos de Ansiedad generalizada',
                    'otrosTrAns' => 'Otros Trastornos de Ansiedad',
                ], old('trAns', $control->trAns))->class('form-control form-control-sm trAns')->placeholder('Seleccione una opción') }}
        </div>
    </div>

    <div class="form-group row my-2 ml-2 mx-3">
        <label for="trDesarrollo_label" class="col-sm col-form-label">TRASTORNOS GENERALIZADOS DEL DESARROLLO</label>
        <div class="col-sm">
            {{ html()->select('trDesarrollo', [
                    'autismo' => 'Autismo',
                    'asperger' => 'Asperger',
                    'rett' => 'Sindrome de RETT',
                    'trDesinteg' => 'Trastorno Desintegrativo de la infancia',
                    'trNOespecif' => 'Trastorno generalizado del desarrollo no especifico',
                ], old('trDesarrollo', $control->trDesarrollo))->class('form-control form-control-sm trDesarrollo')->placeholder('Seleccione una opción') }}
        </div>
    </div>

    <div class="form-group row my-2 ml-2 mx-3">
        <label for="trAns_label" class="col-sm col-form-label">DEMENCIAS (INCLUYE ALZHEIMER)</label>
        <div class="col-sm">
            {{ html()->select('demencias', ['leve' => 'Leve', 'moderado' => 'Moderado', 'avanzado' => 'Avanzado'], old('demencias', $control->demencias))->class('form-control form-control-sm demencias')->placeholder('Seleccione una opción') }}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 mx-3">
        <label for="pci_label" class="col-sm col-form-label text-bold">Plan de Cuidado Integral Elaborado (PCI)</label>
        <div class="col-sm">
            {{ html()->checkbox('pci', old('pci', $control->pci == 1 ? true : null), 1)->class('col col-sm form-control my-2 pci')->id('pci') }}
        </div>
    </div>
</div>
