<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\User;
use App\Models\Therapist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookingCalendar extends Component
{
    public $selectedDate;
    public $selectedTherapist;
    public $selectedTime;
    public $sessionType = 'individual';
    public $notes = '';
    public $showBookingForm = false;
    
    public $therapists = [];
    public $availableSlots = [];
    public $bookings = [];

    protected $rules = [
        'selectedDate' => 'required|date|after:today',
        'selectedTherapist' => 'required|exists:users,id',
        'selectedTime' => 'required',
        'sessionType' => 'required|in:individual,group,online,in_person',
        'notes' => 'nullable|string|max:1000',
    ];

    public function mount()
    {
        $this->selectedDate = Carbon::tomorrow()->format('Y-m-d');
        $this->loadTherapists();
    }

    public function loadTherapists()
    {
        $this->therapists = User::where('is_therapist', true)
            ->whereHas('therapistProfile', function($query) {
                $query->where('is_available', true);
            })
            ->with('therapistProfile')
            ->get();
    }

    public function updatedSelectedDate()
    {
        $this->selectedTherapist = null;
        $this->selectedTime = null;
        $this->loadAvailableSlots();
    }

    public function updatedSelectedTherapist()
    {
        $this->selectedTime = null;
        $this->loadAvailableSlots();
    }

    public function loadAvailableSlots()
    {
        if (!$this->selectedDate || !$this->selectedTherapist) {
            $this->availableSlots = [];
            return;
        }

        $therapist = User::find($this->selectedTherapist);
        $date = Carbon::parse($this->selectedDate);
        $dayOfWeek = strtolower($date->format('l')); // monday, tuesday, etc.
        
        $availability = $therapist->therapistProfile->availability[$dayOfWeek] ?? [];
        
        $slots = [];
        foreach ($availability as $timeRange) {
            $slots = array_merge($slots, $this->generateTimeSlots($timeRange));
        }

        // Remove booked slots
        $bookedSlots = Booking::where('therapist_id', $this->selectedTherapist)
            ->whereDate('start_time', $this->selectedDate)
            ->pluck('start_time')
            ->map(function($time) {
                return Carbon::parse($time)->format('H:i');
            })
            ->toArray();

        $this->availableSlots = array_diff($slots, $bookedSlots);
    }

    public function generateTimeSlots($timeRange)
    {
        // Parse time range like "09:00-17:00"
        [$start, $end] = explode('-', $timeRange);
        $startTime = Carbon::parse($start);
        $endTime = Carbon::parse($end);
        
        $slots = [];
        $currentTime = $startTime->copy();
        
        while ($currentTime < $endTime) {
            $slots[] = $currentTime->format('H:i');
            $currentTime->addMinutes(60); // 1-hour slots
        }
        
        return $slots;
    }

    public function selectSlot($time)
    {
        $this->selectedTime = $time;
        $this->showBookingForm = true;
    }

    public function bookSession()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Please log in to book a session.');
            return;
        }

        $this->validate();

        $startTime = Carbon::parse($this->selectedDate . ' ' . $this->selectedTime);
        $endTime = $startTime->copy()->addHour();

        // Check if slot is still available
        $existingBooking = Booking::where('therapist_id', $this->selectedTherapist)
            ->where('start_time', $startTime)
            ->exists();

        if ($existingBooking) {
            session()->flash('error', 'This time slot is no longer available. Please select another time.');
            $this->loadAvailableSlots();
            return;
        }

        Booking::create([
            'user_id' => Auth::id(),
            'therapist_id' => $this->selectedTherapist,
            'title' => 'Art Therapy Session',
            'description' => $this->notes,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'status' => 'pending',
            'session_type' => $this->sessionType,
            'notes' => $this->notes,
        ]);

        session()->flash('message', 'Session booked successfully! We will confirm your appointment soon.');
        
        $this->reset(['selectedTime', 'sessionType', 'notes', 'showBookingForm']);
        $this->loadAvailableSlots();
    }

    public function cancelBooking()
    {
        $this->showBookingForm = false;
        $this->reset(['selectedTime', 'sessionType', 'notes']);
    }

    public function render()
    {
        $this->loadBookings();
        
        return view('livewire.booking-calendar', [
            'currentDate' => Carbon::parse($this->selectedDate)->format('l, F j, Y'),
        ])->layout('layouts.app');
    }

    private function loadBookings()
    {
        if (Auth::check()) {
            $this->bookings = Auth::user()->bookings()
                ->with('therapist')
                ->orderBy('start_time', 'desc')
                ->take(5)
                ->get();
        }
    }
}
