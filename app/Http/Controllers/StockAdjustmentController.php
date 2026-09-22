<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStockAdjustmentRequest;
use App\Models\Product;
use App\Models\StockAdjustment;
use App\Repositories\Interfaces\StockAdjustmentRepositoryInterface;
use App\Services\StockAdjustmentService;
use App\Http\Requests\UpdateStockAdjustmentRequest;
use Illuminate\Http\Request;

class StockAdjustmentController extends Controller
{
    public function __construct(
        protected StockAdjustmentService $stockAdjustmentService,
        protected StockAdjustmentRepositoryInterface $stockAdjustmentRepository,
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adjustments = $this->stockAdjustmentRepository->getAll();
        return view('website.apps.stock-adjustment.index',compact('adjustments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::select('id','name','current_stock')->latest()->get();
        return view('website.apps.stock-adjustment.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStockAdjustmentRequest $request)
    {
        $this->stockAdjustmentService->store($request->validated());
        return redirect()->route('stock-adjustments.index')->with('message','Stock Adjustment created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StockAdjustment $stockAdjustment)
    {
        return view('website.apps.stock-adjustment.show',compact('stockAdjustment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StockAdjustment $stockAdjustment)
    {
        $products = Product::select('id','name','current_stock')->latest()->get();
        return view('website.apps.stock-adjustment.edit',compact('stockAdjustment','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStockAdjustmentRequest $request, string $id)
    {
        $this->stockAdjustmentService->update($id,$request->validated());
        return redirect()->route('stock-adjustments.index')->with('message','Stock Adjustment Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->stockAdjustmentService->destroy((int) $id);
        return redirect()->route('stock-adjustments.index')->with('message','Stock adjustment deleted Successfully.');
    }
}
