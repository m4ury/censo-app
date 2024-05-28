<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ControlImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        $import = Excel::import(ControlImport::class, $file);

        return redirect()->back()->with('success', 'Data imported successfully.');
    }
}
