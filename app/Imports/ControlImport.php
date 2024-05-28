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
            'name' => $row['name'],
            'email' => $row['email'],
        ]);
    }
}
