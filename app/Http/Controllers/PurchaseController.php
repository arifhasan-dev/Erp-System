<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Services\PurchaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PurchaseController extends Controller
{
    public function __construct(
        protected PurchaseService $purchaseService,
    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = $this->purchaseService->getAll();
        return view('website.apps.purchase.index',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.apps.purchase.create',[
            'suppliers' => Supplier::select('id','name')->get(),
            'products' => Product::select('id','name','purchase_price')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseRequest $request)
    {
        $purchase = $this->purchaseService->store($request->validated());

        return redirect()
            ->route('purchases.index')
            ->with('success', 'Purchase created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        return view('website.apps.purchase.show',compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        $purchase->load([
            'supplier',
            'items',
            'payments',
        ]);
        return view('website.apps.purchase.edit',[
            'purchase' => $purchase,
            'suppliers' => Supplier::select('id','name')->get(),
            'products' => Product::select('id','name','purchase_price')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        $this->purchaseService->update($purchase->id,$request->validated());

        return redirect()->route('purchases.index')->with('message','Purchase Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        $this->purchaseService->destroy($purchase->id);

        return redirect()->route('purchases.index')->with('message','purchase deleted Successfully.');
    }
}
