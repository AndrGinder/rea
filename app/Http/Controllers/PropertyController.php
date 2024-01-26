<?php

namespace App\Http\Controllers;

use App\Http\Requests\Property\StoreRequest;
use App\Http\Requests\Property\UpdateRequest;
use App\Http\Resources\Property\PropertyResource;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $props = Property::all();
        return PropertyResource::collection($props);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $prop = Property::create($data);
        return PropertyResource::make($prop);
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return PropertyResource::make($property);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Property $property)
    {
        $property = Property::findOrFail($property->id);
        $data = $request->validated();
        $property->update($data);
        return PropertyResource::make($property);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property = Property::findOrFail($property->id);
        $property->delete();
        return response()->json([
            'message' => "Property is deleted"
        ]);
    }
}
