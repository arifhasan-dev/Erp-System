<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(Customer $customer)
    {
        parent::__construct($customer);
    }
}
