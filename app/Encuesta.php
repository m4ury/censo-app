<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $guarded = ['id'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function scopeSearch($query, $q)
    {
        if ($q) return $query->whereYear('fecha_encuesta', '=', $q);
    }
}
