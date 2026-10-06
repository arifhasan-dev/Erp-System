<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Repositories\Interfaces\SaleRepositoryInterface;

class SaleRepository extends BaseRepository implements SaleRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(Sale $sale)
    {
        parent::__construct($sale);
    }
    public function findWithDetails(int $id)
    {
        return $this->model->with([
            'customer',
            'items.product',
            'payments',
        ])->findOrFail($id);
    }
}
