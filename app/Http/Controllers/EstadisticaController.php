<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Control;
use App\Encuesta;
use App\Paciente;
use Carbon\Carbon;
use App\Estadistica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{

public function index()
    {
        return view('estadisticas.index');
    }

    /**
     * @return mixed
     */

    public function seccionp12()
    {
        $all = new Paciente;
        $mamoVigente = $all->mamoVigente()->get()->unique('rut');

        $papVigente = $all->papVigente()->get()->unique('rut');

        return view('estadisticas.seccion-p12', compact(
            'mamoVigente',
            'papVigente'
        ));
    }

    public function encuestas(Request $request)
    {
        $end = $request->get('end');
        $ini = $request->get('ini');

        //dd($periodo, $request->all());
        $encuestas = new Encuesta;
        //dd($encuestas);


        $todas = $encuestas->count();
        //derechos
        $der1_all = $encuestas->whereIn('der_1', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der1_si = $encuestas->where('der_1', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der1_no = $encuestas->where('der_1', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der2_all = $encuestas->whereIn('der_2', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der2_si = $encuestas->where('der_2', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der2_no = $encuestas->where('der_2', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der3_all = $encuestas->whereIn('der_3', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der3_si = $encuestas->where('der_3', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der3_no = $encuestas->where('der_3', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der4_all = $encuestas->whereIn('der_4', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der4_si = $encuestas->where('der_4', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der4_no = $encuestas->where('der_4', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der5_all = $encuestas->whereIn('der_5', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der5_si = $encuestas->where('der_5', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der5_no = $encuestas->where('der_5', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der6_all = $encuestas->whereIn('der_6', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der6_si = $encuestas->where('der_6', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der6_no = $encuestas->where('der_6', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der7_all = $encuestas->whereIn('der_7', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der7_si = $encuestas->where('der_7', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der7_no = $encuestas->where('der_7', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der8_all = $encuestas->whereIn('der_8', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der8_si = $encuestas->where('der_8', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der8_no = $encuestas->where('der_8', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der9_all = $encuestas->whereIn('der_9', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der9_si = $encuestas->where('der_9', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der9_no = $encuestas->where('der_9', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der10_all = $encuestas->whereIn('der_10', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der10_si = $encuestas->where('der_10', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der10_no = $encuestas->where('der_10', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der11_all = $encuestas->whereIn('der_11', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der11_si = $encuestas->where('der_11', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der11_no = $encuestas->where('der_11', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der12_all = $encuestas->whereIn('der_12', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der12_si = $encuestas->where('der_12', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der12_no = $encuestas->where('der_12', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der13_all = $encuestas->whereIn('der_13', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der13_si = $encuestas->where('der_13', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der13_no = $encuestas->where('der_13', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der14_all = $encuestas->whereIn('der_14', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der14_si = $encuestas->where('der_14', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der14_no = $encuestas->where('der_14', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der15_all = $encuestas->whereIn('der_15', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der15_si = $encuestas->where('der_15', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der15_no = $encuestas->where('der_15', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der16_all = $encuestas->whereIn('der_16', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der16_si = $encuestas->where('der_16', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der16_no = $encuestas->where('der_16', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //deberes
        $deb1_all = $encuestas->whereIn('deb_1', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb1_si = $encuestas->where('deb_1', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb1_no = $encuestas->where('deb_1', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb2_all = $encuestas->whereIn('deb_2', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb2_si = $encuestas->where('deb_2', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb2_no = $encuestas->where('deb_2', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb3_all = $encuestas->whereIn('deb_3', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb3_si = $encuestas->where('deb_3', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb3_no = $encuestas->where('deb_3', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb4_all = $encuestas->whereIn('deb_4', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb4_si = $encuestas->where('deb_4', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb4_no = $encuestas->where('deb_4', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb5_all = $encuestas->whereIn('deb_5', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb5_si = $encuestas->where('deb_5', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb5_no = $encuestas->where('deb_5', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb6_all = $encuestas->whereIn('deb_6', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb6_si = $encuestas->where('deb_6', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb6_no = $encuestas->where('deb_6', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb7_all = $encuestas->whereIn('deb_7', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb7_si = $encuestas->where('deb_7', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb7_no = $encuestas->where('deb_7', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //atencion
        $buena = $encuestas->where('atencion', 'buena')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $regular = $encuestas->where('atencion', 'regular')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $mala = $encuestas->where('atencion', 'mala')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $at_total = $encuestas->whereIn('atencion', ['buena', 'mala', 'regular'])->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //funcion
        $fun_buena = $encuestas->where('funcion', 'buena')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $fun_regular = $encuestas->where('funcion', 'regular')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $fun_mala = $encuestas->where('funcion', 'mala')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $fun_total = $encuestas->whereIn('funcion', ['buena', 'mala', 'regular'])->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //notas
        $nota_1 = $encuestas->where('nota', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_2 = $encuestas->where('nota', 2)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_3 = $encuestas->where('nota', 3)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_4 = $encuestas->where('nota', 4)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_5 = $encuestas->where('nota', 5)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_6 = $encuestas->where('nota', 6)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_7 = $encuestas->where('nota', 7)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $notas_total = $encuestas->whereIn('nota', [1, 2, 3, 4, 5, 6, 7])->whereBetween('fecha_encuesta', [$ini, $end])->count();


        return view('estadisticas.encuestas', compact(
            'encuestas',
            'todas',
            'der1_si',
            'der1_no',
            'der2_si',
            'der2_no',
            'der3_si',
            'der3_no',
            'der4_si',
            'der4_no',
            'der5_si',
            'der5_no',
            'der6_si',
            'der6_no',
            'der7_si',
            'der7_no',
            'der8_si',
            'der8_no',
            'der9_si',
            'der9_no',
            'der10_si',
            'der10_no',
            'der11_si',
            'der11_no',
            'der12_si',
            'der12_no',
            'der13_si',
            'der13_no',
            'der14_si',
            'der14_no',
            'der15_si',
            'der15_no',
            'der16_si',
            'der16_no',
            'der1_all',
            'der2_all',
            'der3_all',
            'der4_all',
            'der5_all',
            'der6_all',
            'der7_all',
            'der8_all',
            'der9_all',
            'der10_all',
            'der11_all',
            'der12_all',
            'der13_all',
            'der14_all',
            'der15_all',
            'der16_all',

            'deb1_si',
            'deb1_no',
            'deb2_si',
            'deb2_no',
            'deb3_si',
            'deb3_no',
            'deb4_si',
            'deb4_no',
            'deb5_si',
            'deb5_no',
            'deb6_si',
            'deb6_no',
            'deb7_si',
            'deb7_no',

            'deb1_all',
            'deb2_all',
            'deb3_all',
            'deb4_all',
            'deb5_all',
            'deb6_all',
            'deb7_all',

            'buena',
            'regular',
            'mala',

            'fun_buena',
            'fun_regular',
            'fun_mala',

            'fun_total',
            'at_total',

            'nota_1',
            'nota_2',
            'nota_3',
            'nota_4',
            'nota_5',
            'nota_6',
            'nota_7',
            'notas_total'
        ));
    }

    public function pie()
    {
        $all = new Paciente;
        $pacientes = $all->evaluacionPie()->get()->unique('rut');
        //dd($pacientes);
        return view('estadisticas.pie', compact('pacientes'));
    }

    public function dm2Descom()
    {
        $all = new Paciente;
        $pacientes = $all->dm2Descom()->get()->unique('rut');
        //dd($pacientes);
        return view('estadisticas.dm2_descom', compact('pacientes'));
    }

    public function dm2()
    {
        $all = new Paciente;
        $dm2 = $all->dm2()
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono')
            ->whereNull('egreso')
            ->get();

        return view('estadisticas.dm2', compact('dm2'));
    }

    public function sm()
    {
        $all = new Paciente;
        $sm = $all->sm()
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'sexo')
            ->whereNull('egreso')
            ->get();

        $mas80F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->where('grupo', '>=', 80)->count();
        $in7579F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [15, 19])->count();
        $in15F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [0, 14])->count();
        $f = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->count();

        $mas80M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->where('grupo', '>=', 80)->count();
        $in7579M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [15, 19])->count();
        $in15M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [0, 14])->count();
        $m = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->count();

        return view('estadisticas.sm', compact(
            'sm',
            'mas80F',
            'in7579F',
            'in7074F',
            'in6569F',
            'in6064F',
            'in5559F',
            'in5054F',
            'in4549F',
            'in4044F',
            'in3539F',
            'in3034F',
            'in2529F',
            'in2024F',
            'in1519F',
            'in15F',
            'f',

            'mas80M',
            'in7579M',
            'in7074M',
            'in6569M',
            'in6064M',
            'in5559M',
            'in5054M',
            'in4549M',
            'in4044M',
            'in3539M',
            'in3034M',
            'in2529M',
            'in2024M',
            'in1519M',
            'in15M',
            'm'
        ));
    }

    public function sala_era()
    {
        $all = new Paciente;
        $sala_era = $all->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->leftJoin('controls', 'controls.paciente_id', 'pacientes.id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'sexo', 'controls.fecha_control', 'controls.tipo_control', 'controls.asmaClasif', 'controls.epocClasif', 'controls.sborClasif', 'controls.otras_enf')
            ->where('paciente_patologia.patologia_id', 8)
            //->where('controls.tipo_control', 'Kinesiologo')
            ->whereNull('egreso')
            ->latest('fecha_control')
            ->get()
            ->unique('rut');


        $mas80F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->where('grupo', '>=', 80)->count();
        $in7579F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [15, 19])->count();
        $in1014F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [10, 14])->count();
        $in59F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [5, 9])->count();
        $in04F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [0, 4])->count();


        $mas80M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->where('grupo', '>=', 80)->count();
        $in7579M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [15, 19])->count();
        $in1014M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [10, 14])->count();
        $in59M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [5, 9])->count();
        $in04M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [0, 4])->count();

        return view('estadisticas.sala_era', compact(
            'sala_era',
            'mas80F',
            'in7579F',
            'in7074F',
            'in6569F',
            'in6064F',
            'in5559F',
            'in5054F',
            'in4549F',
            'in4044F',
            'in3539F',
            'in3034F',
            'in2529F',
            'in2024F',
            'in1519F',
            'in1014F',
            'in59F',
            'in04F',

            'mas80M',
            'in7579M',
            'in7074M',
            'in6569M',
            'in6064M',
            'in5559M',
            'in5054M',
            'in4549M',
            'in4044M',
            'in3539M',
            'in3034M',
            'in2529M',
            'in2024M',
            'in1519M',
            'in1014M',
            'in59M',
            'in04M',
        ));
    }

    public function am()
    {
        $all = new Paciente;
        $am = $all->select('id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento')
            ->whereNull('egreso')
            ->get()
            ->where('grupo', '>', 64);

        return view('estadisticas.am', compact('am'));
    }

    public function hta()
    {
        $all = new Paciente;
        $hta = $all->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'sexo')
            ->whereNull('egreso')
            ->where('patologias.nombre_patologia', 'HTA')
            ->get();

        return view('estadisticas.hta', compact('hta'));
    }

    public function metas(Request $request)
    {
        $end = $request->get('end');
        $ini = $request->get('ini');

        $pacientes = new Paciente;

        $pa140_90 = $pacientes->paMenor140()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $pa150 = $pacientes->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $sumaPa = $pa140_90 + $pa150;

        $hta = $pacientes->hta()->whereNull('egreso')->whereIn('sexo', ['Femenino', 'Masculino'])->get()->where('grupo', '>', 14)->count();

        $hbac17 = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 79])->unique('rut')->count();
        $hbac18 = $pacientes->hbac18()->get()->where('grupo', '>', 79)->unique('rut')->count();

        $sumaHbac = $hbac17 + $hbac18;

        $evPie = $pacientes->evaluacionPie()->get()->unique('rut')->count();

        $dm2 = $pacientes->dm2()->whereNull('egreso')->get()->where('grupo', '>', 14)->count();

        $porcentajeDm2 = ($dm2 > 0) ? ($sumaHbac / $dm2) * 100 : 0;

        $porcentajeHta = ($hta > 0) ? ($sumaPa / $hta) * 100 : 0;

        $porcentajePie = ($evPie > 0) ? ($evPie / $dm2) * 100 : 0;


        return view('estadisticas.metas', compact(
            'hta',
            'pa140_90',
            'pa150',
            'hbac17',
            'hbac18',
            'dm2',
            'sumaPa',
            'sumaHbac',
            'porcentajeDm2',
            'porcentajeHta',
            'evPie',
            'porcentajePie',
        ));
    }
}
