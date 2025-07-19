<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $phone = '';
    public $preferredContact = 'email';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:2000',
        'phone' => 'nullable|string|max:20',
        'preferredContact' => 'required|in:email,phone',
    ];

    public function submit()
    {
        $this->validate();

        // In a real application, you would send an email here
        // For now, we'll just show a success message
        
        session()->flash('message', 'Thank you for your message! We will get back to you soon.');
        
        $this->reset(['name', 'email', 'subject', 'message', 'phone']);
    }

    public function render()
    {
        return view('livewire.contact-form')->layout('layouts.app');
    }
}
