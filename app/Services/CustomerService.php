<?php

namespace App\Services;

use App\Actions\Customer\CreateCustomerAction;
use App\Actions\Customer\DeleteCustomerAction;
use App\Actions\Customer\FindCustomerAction;
use App\Actions\Customer\UpdateCustomerAction;

class CustomerService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected CreateCustomerAction $createCustomerAction,
        protected FindCustomerAction $findCustomerAction,
        protected UpdateCustomerAction $updateCustomerAction,
        protected DeleteCustomerAction $deleteCustomerAction,
    ){}
    public function store(array $data)
    {
        return $this->createCustomerAction->execute($data);
    }
    public function show(int $id)
    {
        return $this->findCustomerAction->execute($id);
    }
    public function update(int $id,array $data)
    {
        return $this->updateCustomerAction->execute($id,$data);
    }
    public function destroy(int $id)
    {
        return $this->deleteCustomerAction->execute($id);
    }
}
