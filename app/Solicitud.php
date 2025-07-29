<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Solicitud extends Model
{
    use Notifiable;

    protected $guarded = ['id'];

    protected $table = 'solicitudes';

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
