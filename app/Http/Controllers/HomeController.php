<?php

namespace App\Http\Controllers;

use App\Paciente;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //todos
        $all = new Paciente;
        $pMujer = $all
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'egreso', 'sexo', 'embarazada', 'controls.climater', 'controls.regulacion', 'controls.ginec')
            ->where('controls.tipo_control', 'Matrona')
            ->whereNull('egreso')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control')
            ->get()
            ->unique('rut');
        //->count();

        $totalPacientes = $all->pscv()->whereNull('egreso')->count();
        $dm2 = $all->dm2()->whereNull('egreso')->count();
        $pieDm2_90 = round($dm2 * 90 / 100);
        //dd($pieDm2_90);
        $hta = $all->hta()->whereNull('egreso')->count();
        $dlp = $all->dlp()->whereNull('egreso')->count();
        $iam = $all->iam()->whereNull('egreso')->count();
        $acv = $all->acv()->whereNull('egreso')->count();
        $riesgo = $all->rCero('Femenino', 'Masculino')->whereNull('egreso')->count();

        $usoInsulina = $all->dm2()
            ->where('usoInsulina', true)
            ->whereNull('egreso')
            ->count();

        $pieDm2 = $all->dm2()
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereIn('controls.evaluacionPie', ['Maximo', 'Moderado', 'Bajo', 'Alto'])
            ->whereYear('controls.fecha_control', '>', '2023')
            ->latest('controls.fecha_control')
            ->get()
            ->unique('rut')
            ->count();

        $sm = $all->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'egreso')
            ->where('paciente_patologia.patologia_id', 9)
            ->whereNull('egreso')
            ->count();

        $sala_era = $all->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'egreso')
            ->where('paciente_patologia.patologia_id', 8)
            ->whereNull('egreso')
            ->count();

        $am = $all->select('id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'egreso')
            ->whereNull('egreso')
            ->get()
            ->where('grupo', '>', 64)
            ->count();

        $efam = $all->efam()
            ->whereYear('controls.fecha_control', '>', '2023')
            ->get()
            ->where('grupo', '>', 64)
            ->unique('rut')
            ->count();

        $barthel = $all->barthel()
            ->whereYear('controls.fecha_control', '>', '2023')
            ->get()
            ->where('grupo', '>', 64)
            ->unique('rut')
            ->count();
        //dd($efam);

        //x sexo
        $totalMasculino = $all->pscv()->where('sexo', '=', 'Masculino')->whereNull('egreso')->count();
        /* $masculino2064 = $all->pscv()->where('sexo', '=', 'Masculino')->whereNull('egreso')->get();
        $masculino65mas = $all->pscv()->where('sexo', '=', 'Masculino')->whereNull('egreso')->get()->where('grupo', '>=', 65)->count(); */

        $totalFemenino = $all->pscv()->where('sexo', '=', 'Femenino')->whereNull('egreso')->count();
        /* $femenino2064 = $all->pscv()->where('sexo', '=', 'Femenino')->whereNull('egreso')->get()->whereBetween('grupo', [20, 64])->count();
        $femenino65mas = $all->pscv()->where('sexo', '=', 'Femenino')->whereNull('egreso')->get()->where('grupo', '>=', 65)->count(); */

        //x sector
        $totalCeleste = $all->pscv()->where('sector', '=', 'celeste')->whereNull('egreso')->count();
        $totalNaranjo = $all->pscv()->where('sector', '=', 'naranjo')->whereNull('egreso')->count();

        /* //x compensacion
        $compensados = $all->pscv()->where('compensado', '=', 1)->whereNull('egreso')->count();
        $noCompensados = $all->pscv()->where('compensado', '=', 2)->whereNull('egreso')->count();
        $sinInfo = $all->pscv()->where('compensado', '=', 0)->whereNull('egreso')->count();
        $sinInfo = $all->pscv()->where('compensado', '=', 0)->whereNull('egreso')->count(); */

        $pacientes = new Paciente;
        $mas80F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->where('grupo', '>=', 80)->count();
        $in7579F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [15, 19])->count();

        $mas80M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->where('grupo', '>=', 80)->count();
        $in7579M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [15, 19])->count();

        /* $mas80N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->where('grupo', '>=', 80)->count();
        $in7579N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519N = $pacientes->pscv()->whereNull('egreso')->whereSector('naranjo')->get()->whereBetween('grupo', [15, 19])->count();

        $mas80C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->where('grupo', '>=', 80)->count();
        $in7579C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519C = $pacientes->pscv()->whereNull('egreso')->whereSector('celeste')->get()->whereBetween('grupo', [15, 19])->count(); */

        return view('home', compact(
            'totalPacientes',
            'totalMasculino',
            'totalFemenino',
            'totalCeleste',
            'totalNaranjo',
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

            /* 'mas80C',
            'in7579C',
            'in7074C',
            'in6569C',
            'in6064C',
            'in5559C',
            'in5054C',
            'in4549C',
            'in4044C',
            'in3539C',
            'in3034C',
            'in2529C',
            'in2024C',
            'in1519C',

            'mas80N',
            'in7579N',
            'in7074N',
            'in6569N',
            'in6064N',
            'in5559N',
            'in5054N',
            'in4549N',
            'in4044N',
            'in3539N',
            'in3034N',
            'in2529N',
            'in2024N',
            'in1519N', */

            'am',
            'sm',
            'dm2',
            'hta',
            'dlp',
            'usoInsulina',
            'pieDm2',
            'iam',
            'acv',
            'sala_era',
            'pieDm2_90',
            'efam',
            'barthel',
            'all',
            'riesgo',
            'pMujer'
        ));
    }
}
