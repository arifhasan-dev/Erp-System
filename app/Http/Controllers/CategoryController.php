<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

    }

    public function index()
    {
        abort_unless(auth()->user()->can('category.view'),403);
        $categories = Category::latest()->get();
        return view('website.apps.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        abort_unless(auth()->user()->can('category.create'),403);

        $this->categoryService->store($request->validated());

        return redirect()->back()->with('message','Category Create Successfully.');
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
    public function edit(string $id)
    {
        abort_unless(auth()->user()->can('category.edit'),403);
        $category = Category::findOrFail($id);
        return view('website.apps.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        abort_unless(auth()->user()->can('category.edit'),403);

        $this->categoryService->update($request->validated(),$category);

        return redirect('categories')->with('message','Category Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        abort_unless(auth()->user()->can('category.delete'),403);

        $this->categoryService->destroy($category);
        return redirect('/categories')->with('message','Category Delete Sucessfully.');
    }
}
