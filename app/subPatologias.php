<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subPatologias extends Model
{
    public function patologia()
    {
        return $this->belongsTo(Patologia::class);
    }
}