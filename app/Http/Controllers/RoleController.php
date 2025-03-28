<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::get();
        return view('role-permission.role.index', compact('role'));
    }

    public function create()
    {
        return view('role-permission.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:role,name',
            ],
        ]);
        $role = Role::create(['name' => $request->name]);

        return redirect()->route('role.index')->with('success', 'Permission created successfully');
    }

    public function edit(Role $role)
    {
        return view('role-permission.role.edit', compact('permission'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,'.$role->id,
            ],
        ]);

        $role->update([
            'name' => $request->name,
        ]);
        $role->save();

        return redirect()->route('roles.index')->with('success', 'Permission updated successfully');
    }

    public function destroy($roleId)
    {
        $role = Role::find($roleId);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Permission deleted successfully');
    }
}
