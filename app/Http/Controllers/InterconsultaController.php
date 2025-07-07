<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Paciente;
use App\Problema;
use App\Interconsulta;
use Illuminate\Http\Request;
use App\Imports\InterconsultasImport;

class InterconsultaController extends Controller
{
    public function index(Request $request)
    {
        $mostrar_todos = $request->get('mostrar_todos');

        $paciente = new Paciente;

        $query = Interconsulta::with('paciente', 'problema')
            ->orderBy('fecha_citacion', 'asc');

        if ($mostrar_todos) {
            // No aplicar ningún filtro
        } else {
            $maniana = \Carbon\Carbon::tomorrow()->startOfDay();
            $query->where('fecha_citacion', '>=', $maniana)
                ->where('estado_ic', '==', 'pendiente');
        }

        $interconsultas = $query->get();

        return view('interconsultas.index', compact('interconsultas', 'paciente', 'mostrar_todos'));
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
        $interconsulta->observacion_ic = $request->input('observacion_ic');
        // Asigna aquí otros campos según tu modelo

        $interconsulta->save();

        return redirect()->route('interconsultas.index')
            ->with('success', 'Interconsulta actualizada correctamente.');
    }
}
