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
    public function index()
    {
        $paciente = new Paciente;
        $interconsultas = Interconsulta::with('paciente', 'problema')->orderBy('fecha_citacion', 'asc')->get();

        return view('interconsultas.index', compact('interconsultas', 'paciente'));
    }

    /* public function formImportar()
    {
        return view('interconsultas.importar');
    } */

    public function importarExcel(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|mimes:xlsx,xls',
        ]);

        $import = new InterconsultasImport;
        Excel::import(new InterconsultasImport, $request->file('archivo'));

        return back()->with('success', 'Datos importados correctamente')
            ->with('importados', $import->importados)
            ->with('pacientes', $import->pacientes)
            ->with('success', 'Importación completada. Pacientes importados: ' . $import->pacientes . ', Interconsultas importadas: ' . $import->importados);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'estado_ic' => 'required',
            // Agrega aquí otras validaciones según tus campos
        ]);

        $interconsulta = Interconsulta::findOrFail($id);
        $interconsulta->estado_ic = $request->input('estado_ic');
        $interconsulta->retirado_por = $request->input('retirado_por');
        // Asigna aquí otros campos según tu modelo

        $interconsulta->save();

        return redirect()->route('interconsultas.index')
            ->with('success', 'Interconsulta actualizada correctamente.');
    }
}
