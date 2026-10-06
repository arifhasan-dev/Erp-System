<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Product;
use App\Models\Sale;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Interfaces\SaleRepositoryInterface;
use App\Services\SaleService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct(
        protected SaleService $saleService,
        protected SaleRepositoryInterface $saleRepository,
        protected ProductRepositoryInterface $productRepository,
        protected CustomerRepositoryInterface $customerRepository
    )
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = $this->saleRepository->getAll();
        return view('website.apps.sale.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = $this->productRepository->getAll();
        $customers = $this->customerRepository->getAll();
        return view('website.apps.sale.create',compact('customers','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $this->saleService->store($request->validated());
        return redirect()->route('sales.index')->with('message','Sales created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = $this->saleRepository->findById($id);
        return view('website.apps.sale.show',compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale = $this->saleRepository->findWithDetails($id);
        $products = $this->productRepository->getAll();
        $customers = $this->customerRepository->getAll();
        return view('website.apps.sale.edit',compact('sale','products','customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, int $id)
    {
        $this->saleService->update($id,$request->validated());
        return redirect()->route('sales.index')->with('message','Sale Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->saleService->delete($id);
        return redirect()->route('sales.index')->with('message','Sale Deleted Successfully.');
    }
}
