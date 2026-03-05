<div class="card card-primary card-outline mb-3">
    <div class="card-body">
        {{ html()->form('GET', route($route))->class('form-inline')->open() }}
            <div class="form-group mr-3">
                <label for="fecha_inicio">Fecha Inicio:</label>
                {{ html()->date('fecha_inicio', request('fecha_inicio', $fechaInicio ?? ''))->id('fecha_inicio')->class('form-control ml-2')->required() }}
            </div>
            <div class="form-group mr-3">
                <label for="fecha_corte">Fecha Corte:</label>
                {{ html()->date('fecha_corte', request('fecha_corte', $fechaCorte ?? now()->format('Y-m-d')))->id('fecha_corte')->class('form-control ml-2')->required() }}
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        {{ html()->form()->close() }}
    </div>
</div>
