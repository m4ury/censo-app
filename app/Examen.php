<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $guarded = ['id'];

    protected $table = 'examenes';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

}
