<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Http\Requests\UnitRequest;
use App\Services\UnitService;

class UnitController extends Controller
{
    protected $unitService;
    public function __construct(UnitService $unitService)
    {
        $this->unitService = $unitService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::latest()->get();
        return view('website.apps.unit.index',compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.apps.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnitRequest $request)
    {
        $this->unitService->store($request->validated());

        return redirect()->route('units.index')->with('message','Unit Store Successfully.');
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
    public function edit(Unit $unit)
    {
        return view('website.apps.unit.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        $this->unitService->update($request->validated(),$unit);
        return redirect()->route('units.index')->with('message','Unit Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $this->unitService->destroy($unit);

        return redirect()->route('units.index')->with('message','Unit Delete Successfully.');
    }
}
