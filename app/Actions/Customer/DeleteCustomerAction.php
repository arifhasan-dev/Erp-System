<?php

namespace App\Actions\Customer;

use App\Repositories\Interfaces\CustomerRepositoryInterface;

class DeleteCustomerAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository
    ){}
    public function execute(int $id)
    {
        return $this->customerRepository->delete($id);
    }
}
