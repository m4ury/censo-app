<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Problema;
use App\Interconsulta;
use Illuminate\Http\Request;
use App\Imports\InterconsultasImport;
use Maatwebsite\Excel\Facades\Excel;

class InterconsultaController extends Controller
{
    public function index(Request $request)
    {
        $paciente = new Paciente;
        $interconsultas = Interconsulta::with('paciente', 'problema')->orderBy('fecha_citacion', 'asc')->get();

        return view('interconsultas.index', compact('interconsultas', 'paciente'));
    }

    public function formImportar()
    {
        return view('interconsultas.importar');
    }

    public function importarExcel(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|mimes:xlsx,xls',
        ]);

        Excel::import(new InterconsultasImport, $request->file('archivo'));

        return back()->with('success', 'Datos importados correctamente');
    }
}
