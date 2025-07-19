<?php

namespace App\Http\Controllers;

use App\Models\MediaLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MediaLibraryController extends Controller
{
    public function index(Request $request)
    {
        $query = auth()->user()->mediaLibrary();
        
        // Search functionality
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }
        
        // Filter by type
        if ($request->filled('type')) {
            $query->where('file_type', $request->type);
        }
        
        // Filter by folder
        if ($request->filled('folder')) {
            $query->where('folder', $request->folder);
        }
        
        $media = $query->latest()->paginate(20);
        $folders = auth()->user()->mediaLibrary()->distinct()->pluck('folder')->filter();
        
        return view('media.index', compact('media', 'folders'));
    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file|max:51200', // 50MB max
            'folder' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'is_public' => 'boolean',
        ]);

        $file = $request->file('file');
        $fileType = $this->getFileType($file->getMimeType());
        
        // Store file
        $path = $file->store('media-library', 'public');
        
        // Create media record
        $media = new MediaLibrary([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'file_path' => $path,
            'file_name' => $file->getClientOriginalName(),
            'file_type' => $fileType,
            'mime_type' => $file->getMimeType(),
            'file_size' => $file->getSize(),
            'folder' => $validated['folder'],
            'is_public' => $validated['is_public'] ?? false,
        ]);
        
        $media->user_id = auth()->id();
        $media->save();
        
        // Add tags if provided
        if (!empty($validated['tags'])) {
            $tags = array_map('trim', explode(',', $validated['tags']));
            $media->syncTags($tags);
        }

        return redirect()->route('media.library')->with('success', 'Media uploaded successfully!');
    }

    public function bulkUpload(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|max:51200', // 50MB max per file
            'folder' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
        ]);

        $uploadedCount = 0;
        $errors = [];

        foreach ($request->file('files') as $file) {
            try {
                $fileType = $this->getFileType($file->getMimeType());
                $path = $file->store('media-library', 'public');
                
                $media = new MediaLibrary([
                    'title' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
                    'file_path' => $path,
                    'file_name' => $file->getClientOriginalName(),
                    'file_type' => $fileType,
                    'mime_type' => $file->getMimeType(),
                    'file_size' => $file->getSize(),
                    'folder' => $request->folder,
                    'is_public' => false,
                ]);
                
                $media->user_id = auth()->id();
                $media->save();
                
                // Add tags if provided
                if (!empty($request->tags)) {
                    $tags = array_map('trim', explode(',', $request->tags));
                    $media->syncTags($tags);
                }
                
                $uploadedCount++;
            } catch (\Exception $e) {
                $errors[] = "Failed to upload {$file->getClientOriginalName()}: " . $e->getMessage();
            }
        }

        $message = "Successfully uploaded {$uploadedCount} files.";
        if (!empty($errors)) {
            $message .= " Errors: " . implode(', ', $errors);
        }

        return redirect()->route('media.library')->with('success', $message);
    }

    public function show(MediaLibrary $media)
    {
        $this->authorize('view', $media);
        return view('media.show', compact('media'));
    }

    public function destroy(MediaLibrary $media)
    {
        $this->authorize('delete', $media);
        
        // Delete file from storage
        if (Storage::disk('public')->exists($media->file_path)) {
            Storage::disk('public')->delete($media->file_path);
        }
        
        $media->delete();

        return redirect()->route('media.library')->with('success', 'Media deleted successfully!');
    }

    public function download(MediaLibrary $media)
    {
        $this->authorize('view', $media);
        
        // Increment download count
        $media->increment('download_count');
        
        return Storage::disk('public')->download($media->file_path, $media->file_name);
    }

    private function getFileType($mimeType)
    {
        if (str_starts_with($mimeType, 'image/')) {
            return 'image';
        } elseif (str_starts_with($mimeType, 'video/')) {
            return 'video';
        } elseif (str_starts_with($mimeType, 'audio/')) {
            return 'audio';
        } elseif ($mimeType === 'application/pdf') {
            return 'pdf';
        } else {
            return 'document';
        }
    }
} 