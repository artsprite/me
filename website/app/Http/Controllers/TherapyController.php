<?php

namespace App\Http\Controllers;

use App\Models\TherapySession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TherapyController extends Controller
{
    public function index()
    {
        $sessions = auth()->user()->therapySessions()->latest()->paginate(12);
        return view('therapy.index', compact('sessions'));
    }

    public function create()
    {
        return view('therapy.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:audio,meditation,journaling',
            'audio_file' => 'nullable|file|mimes:mp3,wav,m4a|max:10240', // 10MB max
            'duration' => 'nullable|integer|min:1|max:480', // max 8 hours
        ]);

        $session = new TherapySession($validated);
        $session->user_id = auth()->id();

        if ($request->hasFile('audio_file')) {
            $path = $request->file('audio_file')->store('therapy-audio', 'public');
            $session->audio_file = $path;
        }

        $session->save();

        return redirect()->route('therapy.sessions')->with('success', 'Therapy session created successfully!');
    }

    public function show(TherapySession $session)
    {
        $this->authorize('view', $session);
        return view('therapy.show', compact('session'));
    }

    public function play(TherapySession $session)
    {
        $this->authorize('view', $session);
        return view('therapy.play', compact('session'));
    }
} 