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
        // Dashboard
        Permission::firstOrCreate(['name' => 'dashboard.view']);

        // Product
        Permission::firstOrCreate(['name' => 'product.view']);
        Permission::firstOrCreate(['name' => 'product.create']);
        Permission::firstOrCreate(['name' => 'product.edit']);
        Permission::firstOrCreate(['name' => 'product.delete']);

        // Category
        Permission::firstOrCreate(['name' => 'category.view']);
        Permission::firstOrCreate(['name' => 'category.create']);
        Permission::firstOrCreate(['name' => 'category.edit']);
        Permission::firstOrCreate(['name' => 'category.delete']);

        // Brand
        Permission::firstOrCreate(['name' => 'brand.view']);
        Permission::firstOrCreate(['name' => 'brand.create']);
        Permission::firstOrCreate(['name' => 'brand.edit']);
        Permission::firstOrCreate(['name' => 'brand.delete']);

        // Unit
        Permission::firstOrCreate(['name' => 'unit.view']);
        Permission::firstOrCreate(['name' => 'unit.create']);
        Permission::firstOrCreate(['name' => 'unit.edit']);
        Permission::firstOrCreate(['name' => 'unit.delete']);

        // Order
        Permission::firstOrCreate(['name' => 'order.view']);
        Permission::firstOrCreate(['name' => 'order.create']);
        Permission::firstOrCreate(['name' => 'order.edit']);
        Permission::firstOrCreate(['name' => 'order.delete']);

        // User
        Permission::firstOrCreate(['name' => 'user.view']);
        Permission::firstOrCreate(['name' => 'user.create']);
        Permission::firstOrCreate(['name' => 'user.edit']);
        Permission::firstOrCreate(['name' => 'user.delete']);


    }
}
