<?php


namespace App\Services;
use Spatie\Permission\Models\Role;

class RoleService
{
    public function store(array $data)
    {
        Role::create([
            'name' => $data['name'],
            'guard_name' => 'web',
        ]);
    }

    public function update(array $data, Role $role)
    {
        $role->update([
            'name' => $data['name'],
        ]);
    }

    public function destroy(Role $role)
    {
        $role->delete();
    }
}
