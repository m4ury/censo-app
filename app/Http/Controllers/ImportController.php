<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ControlImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $import = new ControlImport;

        // Importar el archivo Excel
        Excel::import($import, $request->file('file'));

        // Obtener los contadores
        $pacientesCreados = $import->getPacientesCreados();
        $controlesCreados = $import->getControlesCreados();

        $message = "Importación completada. Se crearon {$pacientesCreados} pacientes y se importaron {$controlesCreados} controles nuevos.";

        return redirect()->back()->with('success', $message);
    }

    public function excel()
    {
        return view('controles.excel');
    }
}
