<?php

namespace App\Actions\Customer;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class UpdateCustomerAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository
    ){}
    public function execute(int $id,array $data): Customer
    {
        return $this->customerRepository->update($id,$data);
    }
}
