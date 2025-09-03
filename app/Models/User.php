<?php

namespace App\Models;

use App\Control;
use App\Solicitud;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use illuminate\contracts\auth\mustverifyemail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Constancia;
use Spatie\Permission\Models\Role;

class User extends Authenticatable implements AuthenticatableContract, CanResetPasswordContract
{
    use CanResetPassword, Notifiable, HasRoles, SoftDeletes;

    /**
     * the attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rut',
        'apellido_paterno',
        'apellido_materno',
        'type',
    ];

    /**
     * the attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * the attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image()
    {
        //return 'https://picsum.photos/300/300';
        /*'https://source.unsplash.com/random/300x300';*/
        return asset('img/logo-minsal.png');
    }

    public function adminlte_desc()
    {
        return strtoupper($this->type);
    }

    public function adminlte_profile_url()
    {
        return 'perfil';
    }

    public function controls()
    {
        return $this->hasMany(Control::class);
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class);
    }

    public function fullUserName()
    {
        return ucfirst($this->name) . " " . ucfirst($this->apellido_paterno) . " " . ucfirst($this->apellido_materno);
    }

    function isAdmin()
    {
        return $this->type === 'admin';
    }

    function someUser()
    {
        return $this->type === 'some';
    }

    public function constancias()
    {
        return $this->hasMany(\App\Constancia::class, 'user_id');
    }
}
