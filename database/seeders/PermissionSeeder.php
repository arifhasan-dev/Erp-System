<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' => 'dashboard.view'
        ]);

        Permission::create(['name' => 'product.view']);
        Permission::create(['name' => 'product.create']);
        Permission::create(['name' => 'product.edit']);
        Permission::create(['name' => 'product.delete']);

        Permission::create(['name' => 'category.view']);
        Permission::create(['name' => 'category.create']);
        Permission::create(['name' => 'category.edit']);
        Permission::create(['name' => 'category.delete']);

        Permission::create(['name' => 'order.view']);
        Permission::create(['name' => 'order.create']);
        Permission::create(['name' => 'order.edit']);
        Permission::create(['name' => 'order.delete']);

        Permission::create(['name' => 'user.view']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.delete']);


    }
}
