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
}
