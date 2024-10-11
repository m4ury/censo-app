@extends('adminlte::page')

@section('title', 'REM P9: Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION B: POBLACIÓN EN CONTROL SALUD INTEGRAL DE ADOLESCENTES, SEGÚN EDUCACIÓN Y TRABAJO
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3">Estudio/trabajo</th>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="3">TOTAL</th>
                                <th class="text-center" colspan="3">Adolecentes 10 a 14 años</th>
                                <th class="text-center" colspan="3">Adolecentes 15 a 19 años</th>
                                <th class="text-center" colspan="3">Pueblos Originarios</th>
                                <th class="text-center" colspan="3">Migrantes</th>
                            </tr>
                            <tr>
                                {{-- Total --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Adolecentes 10 a 14 años --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Adolecentes 15 a 19 años --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Pueblos Originarios --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Migrantes --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                            </tr>

                            <tr>
                                <th nowrap=""> ESTUDIA</th>
                                <td>{{ $estudia->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $estudiaM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $estudiaF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $estudia->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $estudiaM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $estudiaF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $estudia->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $estudiaM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $estudiaF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> DESERCION ESCOLAR</th>
                                <td>{{ $disercion->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $disercionM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $disercionF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $disercion->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $disercionM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $disercionF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $disercion->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $disercionM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $disercionF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> TRABAJO INFANTIL</th>
                                <td>{{ $trabajoInfantil->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $trabajoInfantilM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $trabajoInfantilF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $trabajoInfantil->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $trabajoInfantilM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $trabajoInfantilF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> TRABAJO JUVENIL</th>
                                <td>{{ $trabajoJuvenil->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $trabajoJuvenilM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $trabajoJuvenilF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>

                                <td>{{ $trabajoJuvenil->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $trabajoJuvenilM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $trabajoJuvenilF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">PEORES FORMAS DE TRABAJO INFANTIL</th>
                                <td>{{ $peorFormaTrabInfantil->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $peorFormaTrabInfantilM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $peorFormaTrabInfantilF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $peorFormaTrabInfantil->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $peorFormaTrabInfantilM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $peorFormaTrabInfantilF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $peorFormaTrabInfantil->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $peorFormaTrabInfantilM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $peorFormaTrabInfantilF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">SERVICIO DOMESTICO NO REMUNERADO PELIGROSO</th>
                                <td>{{ $servDomesticoNoRemun->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $servDomesticoNoRemunM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $servDomesticoNoRemunF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $servDomesticoNoRemun->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $servDomesticoNoRemunM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $servDomesticoNoRemunF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $servDomesticoNoRemun->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $servDomesticoNoRemunM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $servDomesticoNoRemunF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
