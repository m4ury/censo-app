<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends SpatieRole
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name', 'descripcion'];
}
