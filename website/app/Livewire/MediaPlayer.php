<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MediaLibrary;
use Livewire\WithPagination;

class MediaPlayer extends Component
{
    use WithPagination;

    public $search = '';
    public $type = '';
    public $sortBy = 'created_at';
    public $sortOrder = 'desc';
    public $selectedMedia = null;
    public $showPlayer = false;

    protected $queryString = [
        'search' => ['except' => ''],
        'type' => ['except' => ''],
        'sortBy' => ['except' => 'created_at'],
        'sortOrder' => ['except' => 'desc'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingType()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortOrder = $this->sortOrder === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortOrder = 'asc';
        }
    }

    public function playMedia($mediaId)
    {
        $media = MediaLibrary::findOrFail($mediaId);
        
        // Ensure we have a valid media object
        if (!$media || !is_object($media)) {
            session()->flash('error', 'Media not found.');
            return;
        }
        
        $this->selectedMedia = $media;
        $this->showPlayer = true;
        
        // Increment view count
        $this->selectedMedia->increment('view_count');
    }

    public function closePlayer()
    {
        $this->showPlayer = false;
        $this->selectedMedia = null;
    }

    public function downloadMedia($mediaId)
    {
        $media = MediaLibrary::findOrFail($mediaId);
        
        if (!$media->is_public && !auth()->check()) {
            session()->flash('error', 'Please log in to download this content.');
            return;
        }
        
        // Increment download count
        $media->increment('download_count');
        
        return redirect()->route('media.download', $media->id);
    }

    public function render()
    {
        try {
            $query = MediaLibrary::where('is_public', true);
            
            if ($this->search) {
                $query->where(function($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('description', 'like', '%' . $this->search . '%');
                });
            }
            
            if ($this->type) {
                $query->where('type', $this->type);
            }
            
            $media = $query->orderBy($this->sortBy, $this->sortOrder)
                          ->paginate(12);
            
            $featuredMedia = MediaLibrary::where('is_featured', true)
                                       ->where('is_public', true)
                                       ->take(3)
                                       ->get();
            
            $types = [
                'audio' => 'Audio',
                'video' => 'Video', 
                'document' => 'Document',
                'image' => 'Image'
            ];

            return view('livewire.media-player', [
                'media' => $media,
                'featuredMedia' => $featuredMedia,
                'types' => $types,
            ])->layout('layouts.app');
        } catch (\Exception $e) {
            \Log::error('Error in MediaPlayer render method', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return view('livewire.media-player', [
                'media' => collect(),
                'featuredMedia' => collect(),
                'types' => [],
            ])->layout('layouts.app');
        }
    }
}
