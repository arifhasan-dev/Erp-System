<?php

namespace App\Repositories;

use App\Models\SaleItem;
use App\Repositories\Interfaces\SaleItemRepositoryInterface;

class SaleItemRepository extends BaseRepository implements SaleItemRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(SaleItem $saleItem)
    {
        parent::__construct($saleItem);
    }
}
