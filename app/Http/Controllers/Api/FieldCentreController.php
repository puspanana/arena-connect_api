<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FieldCentre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FieldCentreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $field_centres = FieldCentre::all();
        return response()->json([
            'success' => true,
            'message' => 'Successfully get data on Sports Field Centres',
            'data' => $field_centres,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $add_field_centres = new FieldCentre();
        $rules = [
            'user_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'maps' => 'required',
            'phone_number' => 'required',
            'facilities' => 'required',
            'rating' => 'required|integer',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'data' => $validator->errors(),
            ], 422);
        }

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $imagePaths[] = $path;
            }
        }

        $add_field_centres->user_id = $request->user_id;
        $add_field_centres->facilities = $request->facilities;
        $add_field_centres->name = $request->name;
        $add_field_centres->address = $request->address;
        $add_field_centres->maps = $request->maps;
        $add_field_centres->phone_number = $request->phone_number;
        $add_field_centres->rating = $request->rating;
        $add_field_centres->images = json_encode($imagePaths);

        $add_field_centres->save();

        return response()->json([
            'success' => true,
            'message' => 'Add new field centre successfully',
            'data' => $add_field_centres,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(FieldCentre $fieldCentre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FieldCentre $fieldCentre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FieldCentre $fieldCentre)
    {
        //
    }
}
