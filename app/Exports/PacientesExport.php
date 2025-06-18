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
        return Paciente::all()->map(function ($paciente) {
            return [
                'rut' => $paciente->rut,
                'nombre_completo' => $paciente->fullName(),
                'ficha' => $paciente->ficha,
                'edad' => $paciente->edad(),
                'sexo' => $paciente->sexo,
                'fecha_nacimiento' => $paciente->fecha_nacimiento ? $paciente->fecha_nacimiento : null,
                'sector' => $paciente->sector,
                'telefono' => $paciente->telefono,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'RUT',
            'Nombre Completo',
            'Ficha',
            'Edad',
            'Sexo',
            'Fecha de Nacimiento',
            'Sector',
            'Telefono',
        ];
    }
}
