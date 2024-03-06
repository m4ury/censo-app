<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constancia extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
