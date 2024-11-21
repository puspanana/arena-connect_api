<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $bookings = Booking::all();

            return response()->json([
                'success' => true,
                'message' => 'Successfully get data on bookings',
                'data' => $bookings,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to get data on bookings',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $add_bookings = new Booking();
        $rules = [
            'user_id' => 'required',
            'field_id' => 'required',
            'booking_start' => 'required',
            'booking_end' => 'required',
            'date' => 'required|date',
            'cost' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'data' => $validator->errors(),
            ], 422);
        }

        $add_bookings->user_id = $request->user_id;
        $add_bookings->field_id = $request->field_id;
        $add_bookings->booking_start = $request->booking_start;
        $add_bookings->booking_end = $request->booking_end;
        $add_bookings->date = $request->date;
        $add_bookings->cost = $request->cost;

        $add_bookings->save();

        return response()->json([
            'success' => true,
            'message' => 'Add new booking successfully',
            'data' => $add_bookings,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
