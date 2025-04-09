<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        return view('role-permission.role.index', compact('roles'));
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
                'unique:roles,name',
            ],
        ]);
        $role = Role::create(['name' => $request->name]);

        return redirect()->route('roles.index')->with('success', 'Rol created successfully');
    }

    public function edit(Role $role)
    {
        return view('role-permission.role.edit', compact('role'));
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

        return redirect()->route('roles.index')->with('success', 'Rol updated successfully');
    }

    public function destroy($roleId)
    {
        $role = Role::find($roleId);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Rol deleted successfully');
    }

    public function givePermissionsToRole($roleId)
    {
        $permissions = Permission::all();
        $role = Role::findOrFail($roleId);
        return view('role-permission.role.give-permission', compact('role', 'permissions'));
    }

    public function addPermissionsToRole(Request $request, $roleId)
    {
        $request->validate([
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id',
        ]);
        $role = Role::findOrFail($roleId);
        $permissions = Permission::whereIn('id', $request->permissions)->get();
        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')->with('success', 'Permissions assigned to role successfully');
    }
}
