<?php


namespace App\Services;

use App\Models\Brand;
use App\Models\Unit;


class UnitService
{
    public function store(array $data)
    {
        return Unit::create([
            'name' => $data['name'],
            'short_name' => $data['short_name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);
    }
    public function update(array $data, Unit $unit)
    {
        return $unit->update([
            'name' => $data['name'],
            'short_name' => $data['short_name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);
    }
    public function destroy(Unit $unit)
    {
        return $unit->delete();
    }
}
