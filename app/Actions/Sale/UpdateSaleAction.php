<?php

namespace App\Actions\Sale;

use App\Repositories\Interfaces\SaleRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UpdateSaleAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SaleRepositoryInterface $saleRepository
    ){}
    public function execute(int $id,array $data)
    {
        $data['updated_by'] = Auth::id();
        return $this->saleRepository->update($id,$data);
    }
}
