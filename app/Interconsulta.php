<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interconsulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'problema_id',
        'fecha_ic',
        'fecha_citacion',
        'correlativo',
        'estado_ic',
        'retirado_por',
        'observacion_ic',
        // otros campos...
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function problema()
    {
        return $this->belongsTo(Problema::class);
    }
}
