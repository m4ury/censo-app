<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    /**
     * @return array
     */
    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }
}
