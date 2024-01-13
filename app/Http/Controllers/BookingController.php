<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'taka' => 'required|numeric',
            'payment_method' => 'required|string',
            'phone_number' => 'required|string',
            'person' => 'required|integer',
            'trxID' => 'required|string',
            'status' => 'in:pending,accepted',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Create a new booking with the user_id set to the authenticated user's id
        $booking = Booking::create([
            'name' => $request->name,
            'taka' => $request->taka,
            'payment_method' => $request->payment_method,
            'phone_number' => $request->phone_number,
            'person' => $request->person,
            'user_id' => $user->id,
            'trxID' => $request->trxID,
            'status' => $request->status ?? 'pending',
        ]);

        return response()->json(['success' => true, 'booking' => $booking]);
    }

    public function markAsRead(Booking $booking)
    {
        $booking->update(['status' => 'accepted']);

        return response()->json(['success' => true]);
    }


}
