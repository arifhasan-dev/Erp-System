<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::firstorCreate(['name' => 'Super Admin']);
        $admin = Role::firstorCreate(['name' => 'Admin']);
        $manager = Role::firstorCreate(['name' => 'Manager']);
        $cashier = Role::firstorCreate(['name' => 'Cashier']);
        $accountant = Role::firstorCreate(['name' => 'Accountant']);
        $customer = Role::firstorCreate(['name' => 'Customer']);

        $superAdmin->syncPermissions(Permission::all());

        $admin->syncPermissions([
            'dashboard.view',

            'product.view',
            'product.create',
            'product.edit',
            'product.delete',

            'category.view',
            'category.create',
            'category.edit',
            'category.delete',

            'order.view',
            'order.create',
            'order.edit',
            'order.delete',

            'user.view',
            'user.create',
            'user.edit',
            'user.delete',

        ]);
        $manager->syncPermissions([
            'dashboard.view',

            'product.view',
            'product.create',
            'product.edit',
            'product.delete',

            'category.view',
            'category.create',
            'category.edit',
            'category.delete',

            'order.view',
            'order.create',
            'order.edit',
            'order.delete',
        ]);
        $cashier->syncPermissions([
            'dashboard.view',

            'order.view',
            'order.create',
        ]);
        $accountant->syncPermissions([
            'dashboard.view',

            'order.view',
        ]);
        $customer->syncPermissions([]);
    }
}
