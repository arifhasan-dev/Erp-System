<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('status',1)->latest()->get();
        return view('website.apps.product.all-products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::where('status',1)->orderBy('name')->get();
        $brands  = Brand::where('status',1)->orderBy('name')->get();
        $units  = Unit::where('status',1)->orderBy('name')->get();
        $suppliers  = Supplier::where('status',1)->orderBy('name')->get();
        return view('website.apps.product.add-products',compact('categories','brands','units','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $this->productService->store($request->validated(),auth()->id());

        return redirect()->route('products.index')->with('message','Product Created Succcessfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load([
            'category',
            'brand',
            'unit',
            'supplier',
            'images'
        ]);

        return view('website.apps.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load([
            'images'
        ]);
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        $units = Unit::where('status',1)->get();
        $suppliers = Supplier::where('status',1)->get();

        return view('website.apps.product.edit', compact(
            'product',
            'categories',
            'brands',
            'units',
            'suppliers'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->productService->update($request->validated(),$product,auth()->id());

        return redirect()->route('products.index')->with('message', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->productService->destroy($product);
        return redirect()->route('products.index')->with('message', 'Product Delete successfully.');

    }
}
