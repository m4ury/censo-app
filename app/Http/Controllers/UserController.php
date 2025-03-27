<?php

namespace App\Http\Controllers;

/*use Illuminate\Foundation\Auth\User;*/

use app\Models\User;
use Composer\Util\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('perfil', array('user' => Auth::user()));
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'string|min:3',
            'apellidoP' => 'string|min:3',
            'apellidoM' => 'string|min:3',
            'email' => 'email'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        $user->update([
            'name' => $request->nombres,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'email' => $request->email
        ]);
        return redirect('perfil')->withSuccess('Usuario Actualizado con exito!');
    }
}
