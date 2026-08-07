<?php


namespace App\Services;

use App\Models\Product;
use App\Repositories\Interfaces\ProductImageRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;


class ProductService
{
    protected ProductRepositoryInterface $productRepository;
    protected ProductImageRepositoryInterface $productImageRepository;

    public function __construct(ProductRepositoryInterface $productRepository,
                                ProductImageRepositoryInterface $productImageRepository)
    {
        $this->productRepository = $productRepository;

        $this->productImageRepository = $productImageRepository;
    }
    public function store(array $data ,int $userId): Product
    {
        $uploadedFiles = [];

        DB::beginTransaction();

        try {
            $data['created_by'] = $userId;
            $data['slug'] = Str::slug($data['name']);
            $images = $data['images'] ?? [];
            unset($data['images']);
            $product =$this->productRepository->create($data);

            foreach ($images as $index => $image)
            {
                $path =$image->store('products','public');

                $uploadedFiles[] = $path;

                $this->productImageRepository->create([
                    'product_id' => $product->id,
                    'image' => $path,
                    'is_primary' =>$index === 0,
                    'sort_order' => $index + 1,
                ]);
            }
            DB::commit();
            return $product;
        }
        catch (\Throwable $e)
        {
            DB::rollBack();

            foreach ($uploadedFiles as $file)
            {
                Storage::disk('public')->delete($file);
            }
            throw $e;
        }

    }
    public function update(array $data,Product $product,int $userId): Product
    {
        $uploadedFiles = [];
        DB::beginTransaction();
        try {
            $data['updated_by'] = $userId;
            $data['slug'] = Str::slug($data['name']);

            $images = $data['images'] ?? [];
            $deleteImages = $data['delete_images'] ?? [];

            unset($data['images']);
            unset($data['delete_images']);


            $this->productRepository->update($product->id,$data);

            foreach ($deleteImages as $imageId)
            {
                $image =$product->images()->where('id',$imageId)->first();
                if ($image)
                {
                    if (Storage::disk('public')->exists($image->image))
                    {
                        Storage::disk('public')->delete($image->image);
                    }
                    $this->productImageRepository->delete($image->id);
                }
            }
            $primaryImage =$product->images()->whereNull('deleted_at')->where('is_primary',true)->first();
            if (!$primaryImage)
            {
                $firstImage = $product->images()->whereNull('deleted_at')->orderBy('sort_order')->first();
                if ($firstImage)
                {
                    $firstImage->update([
                        'is_primary' =>true,
                    ]);
                }
            }

            $imageCount = $product->images()->count();

            foreach ($images as $index => $image)
            {
                $path = $image->store('products','public');
                $uploadedFiles[] = $path;

                $this->productImageRepository->create([
                    'product_id' =>$product->id,
                    'image' => $path,
                    'is_primary' => false,
                    'sort_order' => $imageCount + $index +1,
                ]);
            }
            DB::commit();

            return $product->fresh();

        }
        catch (\Throwable $e)
        {
            DB::rollBack();

            foreach ($uploadedFiles as $file)
            {
                Storage::disk('public')->delete($file);
            }
            throw $e;
        }
    }
    public function destroy(Product $product): bool
    {
        DB::beginTransaction();
        try {
            foreach ($product->images as $image)
            {
                $this->productImageRepository->delete($image->id);
            }
            $this->productRepository->delete($product->id);
            DB::commit();
            return true;
        }
        catch (\Throwable $e)
        {
            DB::rollBack();
            throw $e;
        }
    }
}
