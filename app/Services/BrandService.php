<?php


namespace App\Services;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class BrandService
{
    public function store(array $data)
    {
        if (isset($data['image']))
        {
            $data['image'] = $data['image']->store('brands','public');
        }
        return Brand::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'code' => $data['code'],
            'image' => $data['image'] ?? null,
            'status' => $data['status'],
        ]);
    }
    public function update(array $data,Brand $brand)
    {
        if (isset($data['image']))
        {
            if ($brand->image && Storage::disk('public')->exists($brand->image))
            {
                Storage::disk('public')->delete($brand->image);
            }
            $data['image'] = $data['image']->store('brands','public');
        }
        return $brand->update([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'code' => $data['code'],
            'image' => $data['image'] ?? $brand->image,
            'status' => $data['status'],
        ]);
    }
    public function edit(Brand $brand)
    {
        return [
            'brand' => $brand,
            'categories' => Category::where('status', 1)->get(),
        ];
    }
    public function destroy(Brand $brand)
    {
        if ($brand->image && Storage::disk('public')->exists($brand->image))
        {
            Storage::disk('public')->delete($brand->image);
        }
        return $brand->delete();
    }
}
