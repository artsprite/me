<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::latest()->paginate(10);
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function create()
    {
        return view('admin.newsletters.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Newsletter::create($validated);

        return redirect()->route('admin.newsletters.index')->with('success', 'Newsletter created successfully!');
    }

    public function send(Newsletter $newsletter)
    {
        $subscribers = NewsletterSubscriber::where('is_active', true)->get();
        
        $newsletter->update([
            'status' => 'sending',
            'total_recipients' => $subscribers->count(),
        ]);

        foreach ($subscribers as $subscriber) {
            try {
                Mail::send('emails.newsletter', [
                    'content' => $newsletter->content,
                    'unsubscribeUrl' => route('newsletter.unsubscribe', $subscriber->email)
                ], function ($message) use ($newsletter, $subscriber) {
                    $message->to($subscriber->email, $subscriber->name)
                            ->subject($newsletter->subject);
                });
                
                $newsletter->increment('sent_count');
            } catch (\Exception $e) {
                // Log error but continue with other subscribers
                \Log::error("Failed to send newsletter to {$subscriber->email}: " . $e->getMessage());
            }
        }

        $newsletter->update([
            'status' => 'sent',
            'sent_at' => now(),
        ]);

        return redirect()->route('admin.newsletters.index')->with('success', 'Newsletter sent successfully!');
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
            'name' => 'nullable|string|max:255',
        ]);

        NewsletterSubscriber::create([
            'email' => $validated['email'],
            'name' => $validated['name'],
            'subscribed_at' => now(),
        ]);

        return back()->with('success', 'Successfully subscribed to our newsletter!');
    }

    public function unsubscribe($email)
    {
        $subscriber = NewsletterSubscriber::where('email', $email)->first();
        
        if ($subscriber) {
            $subscriber->unsubscribe();
        }

        return view('newsletter.unsubscribed');
    }
} 