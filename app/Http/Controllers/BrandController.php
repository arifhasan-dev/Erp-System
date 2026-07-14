<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBrandRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\BrandRequest;
use App\Services\BrandService;

class BrandController extends Controller
{
    protected $brandService;
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('website.apps.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('website.apps.brand.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $this->brandService->store($request->validated());
        return redirect()->route('brands.index')->with('message','Brand Store Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        $data = $this->brandService->edit($brand);
        return view('website.apps.brand.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $this->brandService->update($request->validated(),$brand);

        return redirect()->route('brands.index')->with('message','Brand Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $this->brandService->destroy($brand);
        return redirect()->route('brands.index')->with('message','Brand Delete Successfully.');
    }
}
