<?php

namespace App\Http\Controllers;

/*use Illuminate\Foundation\Auth\User;*/

use App\Models\User;
use Composer\Util\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index()
    {
        $users = User::get();
        return view('role-permission.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::select('id', 'name')->pluck('name');
        return view('role-permission.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rut' => 'required|string|min:3|rut_cl',
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'rut' => 'required|string|min:3',
            'apellido_paterno' => 'required|string|min:3',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rut' => $request->rut,
            'apellido_paterno' => $request->apellido_paterno,
        ]);
        return redirect('role-permission.user.index')->withSuccess('Usuario creado con exito!');
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::select('id', 'name')->pluck('name');
        return view('role-permission.user.edit', compact('user', 'roles'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'rut' => 'required|string|min:3',
            'apellido_paterno' => 'required|string|min:3',
            'apellido_materno' => 'required|string|min:3'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rut' => $request->rut,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno
        ]);
        return redirect('users')->withSuccess('Usuario actualizado con exito!');
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
