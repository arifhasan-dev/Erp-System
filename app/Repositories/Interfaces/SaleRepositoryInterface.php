<?php

namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\BaseRepositoryInterface;

interface SaleRepositoryInterface extends BaseRepositoryInterface
{
    public function findWithDetails(int $id);
}
