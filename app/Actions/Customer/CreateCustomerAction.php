<?php

namespace App\Actions\Customer;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CreateCustomerAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository,
        protected GenerateCustomerCodeAction $generateCustomerCodeAction
    ){}
    public function execute(array $data): Customer
    {
        $data['customer_code'] = $this->generateCustomerCodeAction->execute();
        return $this->customerRepository->create($data);
    }
}
