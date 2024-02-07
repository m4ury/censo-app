<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    use HasFactory;

    public function interconsultas()
    {
        return $this->hasMany(Interconsulta::class);
    }
}
