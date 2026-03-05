@extends('adminlte::page')
@section('title', 'crear-patologias')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Datos de la Patologia</div>
                    <div class="card-body">
                        {{ html()->form('POST', route('patologias.store'))->class('form-horizontal')->open() }}
                        @include('patologias.form')
                        <div class="row">
                            <div class="col">
                                {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                            </div>
                            <div class="col">
                                <a href="{{ url('patologias') }}" style="text-decoration:none">
                                    <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                                </a>
                            </div>
                        </div>
                        {{ html()->form()->close() }}

                        @section('js')
                            <script>
                                $('#comuna, #sexo, #sector').select2();
                                $("#migrante, #pueblo_originario").removeAttr("checked");
                            </script>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
