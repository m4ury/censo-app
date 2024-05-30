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

        $file = $request->file('file');

        $rows = Excel::import(new ControlImport, $file);
        
        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    public function excel()
    {
        return view('controles.excel');
    }
}
