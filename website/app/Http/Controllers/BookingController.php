<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = auth()->user()->bookings()->latest()->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $therapists = User::where('role', 'therapist')->where('status', 'active')->get();
        return view('bookings.create', compact('therapists'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date|after:now',
            'end_time' => 'required|date|after:start_time',
            'type' => 'required|in:therapy,consultation,group_session',
            'therapist_id' => 'nullable|exists:users,id',
            'notes' => 'nullable|string',
        ]);

        $booking = new Booking($validated);
        $booking->user_id = auth()->id();
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }

    public function show(Booking $booking)
    {
        $this->authorize('view', $booking);
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $this->authorize('update', $booking);
        $therapists = User::where('role', 'therapist')->where('status', 'active')->get();
        return view('bookings.edit', compact('booking', 'therapists'));
    }

    public function update(Request $request, Booking $booking)
    {
        $this->authorize('update', $booking);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'type' => 'required|in:therapy,consultation,group_session',
            'therapist_id' => 'nullable|exists:users,id',
            'notes' => 'nullable|string',
        ]);

        $booking->update($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully!');
    }

    public function destroy(Booking $booking)
    {
        $this->authorize('delete', $booking);
        
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking cancelled successfully!');
    }
} 