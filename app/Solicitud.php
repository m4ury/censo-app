<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $guarded = ['id'];

    protected $table = 'solicitudes';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
