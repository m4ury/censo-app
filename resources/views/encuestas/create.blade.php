@extends('adminlte::page')
@section('title', 'crear-pacientes')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header"><p class="text-bold">ENCUESTA</p></div>
                    <div class="card-body">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</a>
                            <a class="nav-item nav-link" id="nav-der-tab" data-toggle="tab" href="#nav-der" role="tab" aria-controls="nav-der" aria-selected="false">Derechos</a>
                            <a class="nav-item nav-link" id="nav-deb-tab" data-toggle="tab" href="#nav-deb" role="tab" aria-controls="nav-deb" aria-selected="false">Deberes</a>
                            <a class="nav-item nav-link" id="nav-ev-tab" data-toggle="tab" href="#nav-ev" role="tab" aria-controls="nav-ev" aria-selected="false">Evaluacion</a>
                          </div>
                        </nav>

                    <div class="tab-content" id="nav-tabContent">
                        @include('encuestas.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript">
    $('#rut').select2({
        theme: 'classic',
        width: '100%'
    }
    )
</script>
@endsection
