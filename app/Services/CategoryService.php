<?php


namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function store(array $data)
    {
        return Category::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);
    }
    public function update(array $data, Category $category)
    {
        return $category->update([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);
    }
    public function destroy(Category $category)
    {
        return $category->delete();
    }
}
