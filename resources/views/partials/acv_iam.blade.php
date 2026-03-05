<div class="card card-info card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-info">ANTECEDENTE ENFERMEDAD CARDIOVASCULAR / INFARTO AL MIOCARDIO</div>
    <div class="form-group row my-2 ml-2">
        <label for="aspirina_label" class="col-sm-3 col-form-label">Uso Aspirinas SI</label>
        <div class="col-sm-3">
            {{ html()->checkbox('aspirinas', false, 1)->class('form-control my-2 aspirinas') }}</div>
        <label for="aspirina_label" class="col-sm-3 col-form-label">Uso Aspirinas NO</label>
        <div class="col-sm-3">
            {{ html()->checkbox('aspirinas', false, 2)->class('form-control my-2 aspirinas') }}</div>
    </div>
    <div class="form-group row my-2 ml-2">
        <label for="estatina_label" class="col-sm-3 col-form-label text-bold">Uso Estatina SI</label>
        <div class="col-sm-3">
            {{ html()->checkbox('estatinas', false, 1)->class('form-control my-2 estatinas') }}</div>
        <label for="estatina_label" class="col-sm-3 col-form-label text-bold">Uso Estatina NO</label>
        <div class="col-sm-3">
            {{ html()->checkbox('estatinas', false, 2)->class('form-control my-2 estatinas') }}</div>
    </div>
</div>
