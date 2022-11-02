@extends('adminlte::page')

@section('title', 'examenes-rx')

@section('content')
<div class="row justify-content-center">
    {{-- <div class="row">
        {!! Form::open(['route' => 'examenes', 'method' => 'GET', 'class' => 'form-inline float-right pb-4']) !!}
        {!! Form::selectMonth('q', null, ['class' => 'form-control', 'placeholder' => 'Busqueda por mes', 'id' => 'q'])
        !!}
        <button type="submit" class="btn btn-primary btn-sm mx-2">
            <span><i class="fas fa-search"> Buscar</i></span>
        </button>
        {!! Form::close() !!}
    </div> --}}
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                EXAMENES ESTADISTICA MENSUAL
            </h4>
            <div class="col-md-12 table-responsive">
                <table class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center bg-gradient-purple" rowspan="2" colspan="2">EXAMENES RADIOLOGICOS SIMPLES</th>
                            <th class="text-center bg-info" colspan="6">{{Carbon\Carbon::now()->subMonth(1)->format('M-Y')}}</th>
                        </tr>
                        <tr class="text-center bg-info">
                            <th nowrap="">URGENCIA</th>
                            <th nowrap="">MEDICINA</th>
                            <th nowrap="">POLICLINICO</th>
                            <th nowrap="">DPTO. SALUD</th>
                            <th class="text-center">TOTAL</th>
                        </tr>
                        <tr>
                            <th class="table-danger">401002</th>
                            <th class="table-danger" nowrap="">Partes blandas, laringe lateral, cavum rinofaríngeo</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401009</th>
                            <th class="table-danger" nowrap="">Tórax simple frontal o lateral</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr rowspan="2">
                            <th class="table-danger">401070</th>
                            <th class="table-danger" nowrap="">Tórax frontal y lateral (INCLUIR POR NEUMONÍA Y OTRAS PATOLOGÍAS)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger"></th>
                            <th class="table-danger" nowrap="">Tórax frontal y lateral por neumonía (NAC) </th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401013</th>
                            <th class="table-danger" nowrap="">Abdomen simple</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401014</th>
                            <th class="table-danger" nowrap="">Abdomen simple, proyección complementaria (lateral y/o oblicua)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401031</th>
                            <th class="table-danger" nowrap="">Cavidades perinasales, órbitas, art. Temporomandibulares, huesos propios de la nariz, malar, maxilar, arco cigomático y cara.</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401032</th>
                            <th class="table-danger" nowrap="">Cráneo frontal y lateral </th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401033</th>
                            <th class="table-danger" nowrap="">Cráneo proyección especial de base de cráneo (Towne)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401042</th>
                            <th class="table-danger" nowrap="">Columna cervical o atlas-axis (frontal y lateral)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401043</th>
                            <th class="table-danger" nowrap="">Columna cervical (frontal, lateral y oblicuas)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401044</th>
                            <th class="table-danger" nowrap="">Columna cervical flexión y extensión (dinámicas)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401045</th>
                            <th class="table-danger" nowrap="">Columna dorsal o dorsolumbar localizada, parrilla costal adultos (frontal y lateral)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401046</th>
                            <th class="table-danger" nowrap="">Columna lumbar o lumbosacra (frontal, lateral y focalizada en 5to espacio)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401047</th>
                            <th class="table-danger" nowrap="">Columna lumbar o lumbosacra flexión y extensión (dinámicas)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th class="table-danger">401048</th>
                            <th class="table-danger" nowrap="">Columna lumbar o lumbosacra, oblicuas adicionales</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401051</th>
                            <th nowrap="">Pelvis, cadera o coxofemoral</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401151</th>
                            <th nowrap="">Pelvis, cadera o coxofemoral de RN, lactante o niño menor de 6 años</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401052</th>
                            <th nowrap="">Pelvis, cadera o coxofemoral, proyecciones especiales (rotación interna, abducción, lateral,lowenstein u otras)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401053</th>
                            <th nowrap="">Sacrocoxis o articulaciones sacroilíacas</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401054</th>
                            <th nowrap="">Brazo, antebrazo, codo, muñeca, mano, dedos, pie (frontal y lateral)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401055</th>
                            <th nowrap="">Clavícula</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401056</th>
                            <th nowrap="">Edad ósea: Carpo y mano</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401057</th>
                            <th nowrap="">Edad ósea: Rodilla frontal</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401058</th>
                            <th nowrap="">Sacrocoxis o articulaciones sacroilíacas</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401059</th>
                            <th nowrap="">Brazo, antebrazo, codo, muñeca, mano, dedos, pie (frontal y lateral)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401060</th>
                            <th nowrap="">Clavícula</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401062</th>
                            <th nowrap="">Edad ósea: Carpo y mano</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                        <tr>
                            <th>401063</th>
                            <th nowrap="">Edad ósea: Rodilla frontal</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-info"></td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="2"></th>
                            <th colspan="4"  class="text-center bg-gradient-purple">EXAMENES TOTALES</th>
                            <td class="bg-info text-center">{{ $todas }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    table {
        font-size: small;
      }
</style>
@endsection
