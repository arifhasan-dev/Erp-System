<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    public function __construct(
        protected CustomerService $customerService,
        protected CustomerRepositoryInterface $customerRepository
    )
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = $this->customerRepository->getAll();
        return view('website.apps.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.apps.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $this->customerService->store($request->validated());
        return redirect()->route('customers.index')->with('message','Customer Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = $this->customerService->show((int)$id);
        return view('website.apps.customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = $this->customerService->show((int) $id);
        return view('website.apps.customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, string $id)
    {
        $this->customerService->update((int) $id,$request->validated());
        return redirect()->route('customers.index')->with('message', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->customerService->destroy((int) $id);
        return redirect() ->route('customers.index') ->with('message', 'Customer deleted successfully.');

    }
}
