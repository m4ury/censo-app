<?php

namespace App\Imports;

use App\Control;
use Maatwebsite\Excel\Concerns\ToModel;

class ControlImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Control([
            'fecha_control' => $row['fecha_control'],
            'tipo_control' => $row['tipo_control'],
        ]);
    }
}
