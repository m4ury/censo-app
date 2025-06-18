<?php

namespace App\Exports;

use App\Paciente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PacientesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Selecciona solo los campos necesarios
        return Paciente::select('rut', 'nombres', 'apellidoP', 'apellidoM', 'fecha_nacimiento', 'telefono', 'sector')->get();
    }

    public function headings(): array
    {
        return [
            'RUT',
            'Nombres',
            'Apellido Paterno',
            'Apellido Materno',
            'Fecha de Nacimiento',
            'Telefono',
            'Sector'
        ];
    }
}
