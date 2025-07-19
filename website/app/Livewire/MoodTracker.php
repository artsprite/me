<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MoodLog;
use Illuminate\Support\Facades\Auth;

class MoodTracker extends Component
{
    public $mood = 'neutral';
    public $moodLevel = 5;
    public $notes = '';
    public $activities = [];
    public $triggers = [];
    public $isPrivate = false;
    
    public $selectedActivities = [];
    public $selectedTriggers = [];
    
    public $showForm = false;
    public $recentMoodLogs = [];

    protected $rules = [
        'mood' => 'required|in:very_happy,happy,neutral,sad,very_sad,anxious,stressed,calm,excited,tired',
        'moodLevel' => 'required|integer|min:1|max:10',
        'notes' => 'nullable|string|max:1000',
        'isPrivate' => 'boolean',
    ];

    public function mount()
    {
        $this->loadRecentMoodLogs();
    }

    public function loadRecentMoodLogs()
    {
        if (Auth::check()) {
            $this->recentMoodLogs = Auth::user()->moodLogs()
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        }
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function selectMood($mood)
    {
        $this->mood = $mood;
    }

    public function updateMoodLevel($level)
    {
        $this->moodLevel = $level;
    }

    public function toggleActivity($activity)
    {
        if (in_array($activity, $this->selectedActivities)) {
            $this->selectedActivities = array_diff($this->selectedActivities, [$activity]);
        } else {
            $this->selectedActivities[] = $activity;
        }
    }

    public function toggleTrigger($trigger)
    {
        if (in_array($trigger, $this->selectedTriggers)) {
            $this->selectedTriggers = array_diff($this->selectedTriggers, [$trigger]);
        } else {
            $this->selectedTriggers[] = $trigger;
        }
    }

    public function saveMoodLog()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Please log in to save your mood log.');
            return;
        }

        $this->validate();

        MoodLog::create([
            'user_id' => Auth::id(),
            'mood' => $this->mood,
            'mood_level' => $this->moodLevel,
            'notes' => $this->notes,
            'activities' => $this->selectedActivities,
            'triggers' => $this->selectedTriggers,
            'is_private' => $this->isPrivate,
        ]);

        $this->reset(['mood', 'moodLevel', 'notes', 'selectedActivities', 'selectedTriggers', 'isPrivate', 'showForm']);
        $this->loadRecentMoodLogs();
        
        session()->flash('message', 'Mood log saved successfully!');
    }

    public function render()
    {
        $moods = [
            'very_happy' => ['emoji' => '😄', 'label' => 'Very Happy', 'color' => 'text-success'],
            'happy' => ['emoji' => '🙂', 'label' => 'Happy', 'color' => 'text-success'],
            'neutral' => ['emoji' => '😐', 'label' => 'Neutral', 'color' => 'text-muted'],
            'sad' => ['emoji' => '😔', 'label' => 'Sad', 'color' => 'text-primary'],
            'very_sad' => ['emoji' => '😢', 'label' => 'Very Sad', 'color' => 'text-primary'],
            'anxious' => ['emoji' => '😰', 'label' => 'Anxious', 'color' => 'text-warning'],
            'stressed' => ['emoji' => '😤', 'label' => 'Stressed', 'color' => 'text-warning'],
            'calm' => ['emoji' => '😌', 'label' => 'Calm', 'color' => 'text-info'],
            'excited' => ['emoji' => '🤩', 'label' => 'Excited', 'color' => 'text-danger'],
            'tired' => ['emoji' => '😴', 'label' => 'Tired', 'color' => 'text-secondary'],
        ];

        $activities = [
            'exercise', 'meditation', 'reading', 'art', 'music', 'cooking', 
            'walking', 'socializing', 'work', 'sleep', 'gaming', 'nature'
        ];

        $triggers = [
            'work_stress', 'relationship', 'health', 'financial', 'social', 
            'environmental', 'lack_of_sleep', 'diet', 'exercise', 'weather'
        ];

        return view('livewire.mood-tracker', [
            'moods' => $moods,
            'activities' => $activities,
            'triggers' => $triggers,
        ])->layout('layouts.app');
    }
}
