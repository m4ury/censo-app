<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interconsulta extends Model
{

    protected $guarded = ['id'];

    use HasFactory;

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function problema()
    {
        return $this->belongsTo(Problema::class);
    }

    public function scopeSearch($query, $q)
    {
        if ($q) return $query->where('fecha_encuesta', '=', $q);
    }
}
