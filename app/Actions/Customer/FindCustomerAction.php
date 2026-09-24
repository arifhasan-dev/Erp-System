<?php

namespace App\Actions\Customer;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class FindCustomerAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository
    ){}
    public function execute(int $id): Customer
    {
        return $this->customerRepository->findById($id);
    }
}
