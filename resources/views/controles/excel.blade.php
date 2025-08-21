@extends('adminlte::page')
@section('title', 'importar-controles')
@section('content')
    <div class="container p-3">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title">Importar Controles</h3>
            </div>
            <div class="card-body p-3">
                <div class="col col-sm text-muted text-justify">
                    <p class="text-bold">Para importar controles, por favor siga las instrucciones a continuación:</p>
                    <ul class="border border-danger rounded list-unstyled p-3">
                        <li>1. Asegúrese de que el archivo Excel que desea importar esté en el formato correcto <span
                                class="text-bold">(.xlsx)</span>.
                        </li>
                        <li>2. El archivo debe contener las columnas necesarias para los controles.</li>
                        <li>3. Presione el botón "<span class="text-bold">Elegir archivo</span>" y seleccione el archivo
                            desde su dispositivo.
                        </li>
                        <li>4. Haga clic en "<span class="text-bold">Guardar</span>" para iniciar la importación.</li>
                        <li>5. Revise los registros después de la importación para asegurarse de que todo se haya
                            cargado correctamente.
                        </li>
                    </ul>
                    <p>Si tiene alguna duda, contacte al administrador del sistema.</p>
                    <p class="text-center">¡Buena suerte con la importación!</p>
                </div>
                <div class="col col-sm text-center pt-3">
                    {{ Form::open(['action' => 'ImportController@import', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                    {{ Form::file('file') }}

                    <div class="row mt-3">
                        <div class="col col-sm">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm btn-block']) !!}
                        </div>
                        <div class="col col-sm">
                            <a href="{{ url()->previous() }}">
                                {{ Form::button('Cancelar', ['class' => 'btn btn-secondary btn-sm btn-block']) }}
                            </a>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection()
