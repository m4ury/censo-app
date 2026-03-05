@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-left pt-3">
        <div class="col-sx-12 col-sm-12 col-lg-8">
            <div class="card card-default">
                <div class="card-header"> Nueva {{$paciente->grupo < 10 ? "Nanea" : "Patologia"}}</div>
                <div class="card-body">
                    {{ html()->form('POST', route('ppatologias.store'))->class('form-horizontal')->open() }}
                    <div class="form-group row">
                        <label for="patologias" class="col-sm-3 col-form-label">{{ $paciente->grupo < 10 ? 'Nanea' : 'Patologia' }}</label>
                        <div class="col-sm">
                            {{ html()->select('patologia_id', $paciente->grupo < 10 ? $naneas : $patologias, null)->class('form-control form-control-sm')->id('patologias') }}
                        </div>
                    </div>
                    {{ html()->hidden('paciente_id', $paciente->id)->id('paciente_id') }}
                    <div class="row">
                        <div class="col">
                            {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                        </div>
                        <div class="col">
                            <a href="{{ url('pacientes/'.$paciente->id) }}" style="text-decoration:none">
                                <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                            </a>
                        </div>
                    </div>
                    {{ html()->form()->close() }}
                    @section('js')
                    <script>
                        $('#patologias').select2({
                                    theme: "classic",
                                    width: '100%',
                                });
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@stop
