<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NewsletterSubscriber;

class NewsletterSignup extends Component
{
    public $email = '';
    public $firstName = '';
    public $lastName = '';

    protected $rules = [
        'email' => 'required|email|unique:newsletter_subscribers,email',
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
    ];

    public function signup()
    {
        $this->validate();

        NewsletterSubscriber::create([
            'email' => $this->email,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        $this->reset(['email', 'firstName', 'lastName']);
        session()->flash('message', 'Thank you for subscribing to our newsletter!');
    }

    public function render()
    {
        return view('livewire.newsletter-signup');
    }
}
