<?php

namespace App\Actions\Sale;

use App\Repositories\Interfaces\SaleRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class CreateSaleAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SaleRepositoryInterface $saleRepository,
        protected GenerateSaleNoAction $generateSaleNoAction,
    ){}
    public function execute(array $data)
    {
        $data['sale_no'] = $this->generateSaleNoAction->execute();
        $data['created_by'] = Auth::id();
        return $this->saleRepository->create($data);
    }
}
