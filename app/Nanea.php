<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nanea extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class)->withPivot('created_at');
    }
}
