<?php

namespace App\Http\Controllers;

use App\Models\AiDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AiAssistantController extends Controller
{
    public function index()
    {
        $documents = auth()->user()->aiDocuments()->latest()->paginate(10);
        return view('ai.assistant', compact('documents'));
    }

    public function chat(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // Get user's documents for context
        $userDocuments = auth()->user()->aiDocuments()->where('is_processed', true)->get();
        
        // Simple AI response based on document content
        $response = $this->generateAiResponse($validated['message'], $userDocuments);

        return response()->json([
            'response' => $response,
            'timestamp' => now()->format('Y-m-d H:i:s'),
        ]);
    }

    public function uploadDocument(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,txt,doc,docx|max:10240', // 10MB max
        ]);

        $file = $request->file('file');
        $path = $file->store('ai-documents', 'public');
        
        // Extract text content (simplified - in production you'd use proper text extraction)
        $content = $this->extractTextContent($file);
        
        $document = new AiDocument([
            'title' => $validated['title'],
            'content' => $content,
            'file_path' => $path,
            'file_type' => $file->getClientOriginalExtension(),
            'is_processed' => true,
        ]);
        
        $document->user_id = auth()->id();
        $document->save();

        return redirect()->route('ai.assistant')->with('success', 'Document uploaded and processed successfully!');
    }

    public function documents()
    {
        $documents = auth()->user()->aiDocuments()->latest()->paginate(10);
        return view('ai.documents', compact('documents'));
    }

    private function generateAiResponse($message, $documents)
    {
        // Simple keyword-based response system
        // In production, you'd integrate with a real AI service like OpenAI
        
        $keywords = [
            'stress' => 'I understand you\'re feeling stressed. Based on your therapy sessions, I recommend trying some deep breathing exercises or listening to a guided meditation.',
            'anxiety' => 'Anxiety can be challenging. Consider practicing mindfulness techniques or scheduling a session with your therapist.',
            'meditation' => 'Meditation is a wonderful tool for mental wellness. I can recommend some sessions from your library that might help.',
            'therapy' => 'Therapy is a great step toward mental health. I can help you find relevant resources or schedule your next session.',
            'sleep' => 'Good sleep is essential for mental health. Try some relaxation techniques before bedtime.',
            'mood' => 'Your mood is important. Consider what activities bring you joy and make time for them.',
        ];

        $message = strtolower($message);
        
        foreach ($keywords as $keyword => $response) {
            if (str_contains($message, $keyword)) {
                return $response;
            }
        }

        // Default response
        return 'I\'m here to support your mental wellness journey. How can I help you today? You can ask me about stress, anxiety, meditation, therapy, or any other mental health topics.';
    }

    private function extractTextContent($file)
    {
        // Simplified text extraction
        // In production, you'd use proper libraries for different file types
        
        $extension = strtolower($file->getClientOriginalExtension());
        
        switch ($extension) {
            case 'txt':
                return file_get_contents($file->getPathname());
            case 'pdf':
                // For PDFs, you'd use a library like Smalot\PdfParser
                return 'PDF content extracted (simplified)';
            case 'doc':
            case 'docx':
                // For Word documents, you'd use a library like PhpOffice\PhpWord
                return 'Word document content extracted (simplified)';
            default:
                return 'Document content';
        }
    }
} 