<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Efam extends Model
{
    use HasFactory;

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
