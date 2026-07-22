<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;
use App\Services\SupplierService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SupplierController extends Controller
{
    protected SupplierService $supplierService;

    public function __construct(SupplierService $supplierService)
    {
        $this->supplierService = $supplierService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = $this->supplierService->getAll();
        return view('website.apps.supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.apps.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        $this->supplierService->store($request->validated());
        return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('website.apps.supplier.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('website.apps.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier):RedirectResponse
    {
        $this->supplierService->update(
            $request->validated(),
            $supplier
        );

        return redirect()
            ->route('suppliers.index')
            ->with('success', 'Supplier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        {
            $this->supplierService->destroy($supplier);

            return redirect()
                ->route('suppliers.index')
                ->with('success', 'Supplier deleted successfully.');
        }
    }
}
