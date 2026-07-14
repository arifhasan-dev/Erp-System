<?php


namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserService
{
    public function store(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' =>$data['status'],
        ]);
        $user->assignRole($data['role']);
    }
    public function update(array $data,User $user )
    {
        $user->update([
            'name' =>$data['name'],
            'email' =>$data['email'],
            'status' => $data['status']
        ]);
        $user->syncRoles([$data['role']]);
    }
    public function destroy(User $user)
    {
        if ($user->hasRole('Super Admin'))
        {
            return false;
        }
        if (auth()->id() === $user->id)
        {
            return false;
        }
        $user->delete();
        return true;
    }
}
