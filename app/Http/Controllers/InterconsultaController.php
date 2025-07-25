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
                ->where('estado_ic', 'pendiente');
        }

        $interconsultas = $query->get();

        // NUEVO: colección con todas las interconsultas
        $todasInterconsultas = Interconsulta::with('paciente', 'problema')->get();

        return view('interconsultas.index', compact('interconsultas', 'paciente', 'mostrar_todos', 'todasInterconsultas'));
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

        return back()
            ->with('success', 'Importación completada. Pacientes importados: ' . count($import->pacientes) . ', Interconsultas importadas: ' . count($import->importados))
            ->with('importados', $import->importados)
            ->with('pacientes', $import->pacientes);
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

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'problema_id' => 'required|exists:problemas,id',
            'fecha_citacion' => 'required|date',
            'estado_ic' => 'required|string',
        ]);

        $interconsulta = new Interconsulta();
        $interconsulta->paciente_id = $request->input('paciente_id');
        $interconsulta->problema_id = $request->input('problema_id');
        $interconsulta->fecha_citacion = $request->input('fecha_citacion');
        $interconsulta->estado_ic = $request->input('estado_ic');
        // Asigna aquí otros campos según tu modelo

        $interconsulta->save();

        return redirect()->route('interconsultas.index')
            ->with('success', 'Interconsulta creada correctamente.');
    }
}
