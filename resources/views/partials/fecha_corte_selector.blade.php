<div class="card card-primary card-outline mb-3">
    <div class="card-body">
        <form method="GET" action="{{ route($route) }}" class="form-inline">
            <div class="form-group mr-3">
                <label for="fecha_inicio">Fecha Inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control ml-2"
                    value="{{ request('fecha_inicio', $fechaInicio ?? '') }}" required>
            </div>
            <div class="form-group mr-3">
                <label for="fecha_corte">Fecha Corte:</label>
                <input type="date" id="fecha_corte" name="fecha_corte" class="form-control ml-2"
                    value="{{ request('fecha_corte', $fechaCorte ?? now()->format('Y-m-d')) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
    </div>
</div>
