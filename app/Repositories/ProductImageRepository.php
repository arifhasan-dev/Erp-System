<?php


namespace App\Repositories;


use App\Models\ProductImage;
use App\Repositories\Interfaces\ProductImageRepositoryInterface;

class ProductImageRepository extends BaseRepository implements ProductImageRepositoryInterface
{
    public function __construct(ProductImage $productImage)
    {
        parent::__construct($productImage);
    }
}
