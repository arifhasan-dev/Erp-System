<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Services\RoleService;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
        $this->middleware('permission:role.view')->only([
            'index',
            'permission',
        ]);

        $this->middleware('permission:role.create')->only([
            'create',
            'store',
        ]);

        $this->middleware('permission:role.edit')->only([
            'edit',
            'update',
            'permissionStore',
        ]);

        $this->middleware('permission:role.delete')->only([
            'destroy',
        ]);
    }

    public function index()
    {
        $roles = Role::latest()->get();

        return view('website.apps.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.apps.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $this->roleService->store($request->validated());

        return redirect()->route('roles.index')->with('message','Role Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('website.apps.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        if ($role->name === 'Super Admin ')
        {
            return back()->with('error','Super Admin role cannot be deleted.');
        }
        $this->roleService->update($request->validated(),$role);
        return redirect()->route('roles.index')->with('message','Role Updated Successfully,');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if ($role->name === 'Super Admin')
        {
            return back()->with('error','Super Admin Cannot be Deleted');
        }
        $this->roleService->destroy($role);

        return redirect()->route('roles.index')->with('message','Role Deleted Successfully.');
    }
    public function permission(Role $role)
    {
        $permissions = Permission::all();

        return view('website.apps.role.permission',compact('role','permissions'));
    }
    public function permissionStore(Request $request,Role $role)
    {
        $role->syncPermissions($request->permissions ?? []);

        return redirect()->route('roles.index')->with('message','Permission Assigned Successfully.');
    }
}
