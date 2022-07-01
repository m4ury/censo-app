@extends('adminlte::page')
@section('title', 'crear-encuesta')

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
    $('#rut, .nota').select2({
        theme: 'classic',
        width: '100%'
    }
    )
</script>

<script>
    $('input.der_1').on('change', function () {
            $('input.der_1').not(this).prop('checked', false);
        });
        $('input.der_2').on('change', function () {
            $('input.der_2').not(this).prop('checked', false);
        });
        $('input.der_3').on('change', function () {
            $('input.der_3').not(this).prop('checked', false);
        });
        $('input.der_4').on('change', function () {
            $('input.der_4').not(this).prop('checked', false);
        });
        $('input.der_5').on('change', function () {
            $('input.der_5').not(this).prop('checked', false);
        });
        $('input.der_6').on('change', function () {
            $('input.der_6').not(this).prop('checked', false);
        });
        $('input.der_7').on('change', function () {
            $('input.der_7').not(this).prop('checked', false);
        });
        $('input.der_8').on('change', function () {
            $('input.der_8').not(this).prop('checked', false);
        });
        $('input.der_9').on('change', function () {
            $('input.der_9').not(this).prop('checked', false);
        });
        $('input.der_10').on('change', function () {
            $('input.der_10').not(this).prop('checked', false);
        });
        $('input.der_11').on('change', function () {
            $('input.der_11').not(this).prop('checked', false);
        });
        $('input.der_12').on('change', function () {
            $('input.der_12').not(this).prop('checked', false);
        });
        $('input.der_13').on('change', function () {
            $('input.der_13').not(this).prop('checked', false);
        });
        $('input.der_14').on('change', function () {
            $('input.der_14').not(this).prop('checked', false);
        });
        $('input.der_15').on('change', function () {
            $('input.der_15').not(this).prop('checked', false);
        });
        $('input.deb_1').on('change', function () {
            $('input.deb_1').not(this).prop('checked', false);
        });
        $('input.deb_2').on('change', function () {
            $('input.deb_2').not(this).prop('checked', false);
        });
        $('input.deb_3').on('change', function () {
            $('input.deb_3').not(this).prop('checked', false);
        });
        $('input.deb_4').on('change', function () {
            $('input.deb_4').not(this).prop('checked', false);
        });
        $('input.deb_5').on('change', function () {
            $('input.deb_5').not(this).prop('checked', false);
        });
        $('input.deb_6').on('change', function () {
            $('input.deb_6').not(this).prop('checked', false);
        });


        $('input.atencion').on('change', function () {
            $('input.atencion').not(this).prop('checked', false);
        });
        $('input.atencion_r').on('change', function () {
            $('input.atencion_r').not(this).prop('checked', false);
        });
        $('input.atencion_m').on('change', function () {
            $('input.atencion_m').not(this).prop('checked', false);
        });

        $('input.funcion').on('change', function () {
            $('input.funcion').not(this).prop('checked', false);
        });
        $('input.funcion_r').on('change', function () {
            $('input.funcion_r').not(this).prop('checked', false);
        });
        $('input.funcion_m').on('change', function () {
            $('input.funcion_m').not(this).prop('checked', false);
        });
</script>
@endsection
