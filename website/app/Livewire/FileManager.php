<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UserFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileManager extends Component
{
    use WithFileUploads;

    public $files = [];
    public $uploadedFiles = [];
    public $isPublic = false;
    public $description = '';
    public $search = '';
    public $filter = 'all'; // all, public, private, mine
    public $sortBy = 'created_at';
    public $sortOrder = 'desc';

    protected $rules = [
        'uploadedFiles.*' => 'required|file|max:10240', // 10MB max
        'description' => 'nullable|string|max:500',
        'isPublic' => 'boolean',
    ];

    public function mount()
    {
        $this->loadFiles();
    }

    public function loadFiles()
    {
        $query = UserFile::query();

        // Apply search filter
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('file_name', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        // Apply visibility filter
        switch ($this->filter) {
            case 'public':
                $query->where('is_public', true);
                break;
            case 'private':
                $query->where('is_public', false);
                break;
            case 'mine':
                if (auth()->check()) {
                    $query->where('user_id', auth()->id());
                }
                break;
        }

        // Apply sorting
        $query->orderBy($this->sortBy, $this->sortOrder);

        $this->files = $query->with('user')->get();
    }

    public function updatedSearch()
    {
        $this->loadFiles();
    }

    public function updatedFilter()
    {
        $this->loadFiles();
    }

    public function updatedSortBy()
    {
        $this->loadFiles();
    }

    public function updatedSortOrder()
    {
        $this->loadFiles();
    }

    public function uploadFiles()
    {
        $this->validate();

        if (empty($this->uploadedFiles)) {
            session()->flash('error', 'Please select files to upload.');
            return;
        }

        $uploadedCount = 0;

        foreach ($this->uploadedFiles as $file) {
            try {
                $fileName = $file->getClientOriginalName();
                $filePath = $file->store('user-files', 'public');
                $fileSize = $file->getSize();
                $mimeType = $file->getMimeType();

                UserFile::create([
                    'user_id' => auth()->id(),
                    'file_name' => $fileName,
                    'file_path' => $filePath,
                    'file_size' => $fileSize,
                    'mime_type' => $mimeType,
                    'description' => $this->description,
                    'is_public' => $this->isPublic,
                    'uploaded_at' => now(),
                ]);

                $uploadedCount++;
            } catch (\Exception $e) {
                session()->flash('error', 'Error uploading ' . $fileName . ': ' . $e->getMessage());
            }
        }

        if ($uploadedCount > 0) {
            session()->flash('success', $uploadedCount . ' file(s) uploaded successfully!');
            $this->reset(['uploadedFiles', 'description', 'isPublic']);
            $this->loadFiles();
        }
    }

    public function deleteFile($fileId)
    {
        $file = UserFile::findOrFail($fileId);

        // Check permissions
        if (!auth()->check() || (auth()->id() !== $file->user_id && !auth()->user()->isAdmin())) {
            session()->flash('error', 'You do not have permission to delete this file.');
            return;
        }

        try {
            // Delete physical file
            if (Storage::disk('public')->exists($file->file_path)) {
                Storage::disk('public')->delete($file->file_path);
            }

            // Delete database record
            $file->delete();

            session()->flash('success', 'File deleted successfully!');
            $this->loadFiles();
        } catch (\Exception $e) {
            session()->flash('error', 'Error deleting file: ' . $e->getMessage());
        }
    }

    public function togglePublic($fileId)
    {
        $file = UserFile::findOrFail($fileId);

        // Check permissions
        if (!auth()->check() || (auth()->id() !== $file->user_id && !auth()->user()->isAdmin())) {
            session()->flash('error', 'You do not have permission to modify this file.');
            return;
        }

        $file->update(['is_public' => !$file->is_public]);
        session()->flash('success', 'File visibility updated!');
        $this->loadFiles();
    }

    public function render()
    {
        return view('livewire.file-manager')->layout('layouts.app');
    }
}
