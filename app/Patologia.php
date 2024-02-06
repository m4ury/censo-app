<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $guarded = ['id'];

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class)->withPivot('created_at');
    }

    public function interconsultas()
    {
        return $this->hasMany(Interconsulta::class);
    }
}
