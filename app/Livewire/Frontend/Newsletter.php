<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Subscriber;
use App\Mail\NewsletterSubscribed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class Newsletter extends Component
{
    public string $email = '';
    public string $hp_field = ''; // Honeypot field for bot protection
    public bool $subscribed = false;

    protected array $rules = [
        'email' => 'required|email|max:255',
    ];

    protected array $messages = [
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
    ];

    public function subscribe()
    {
        // Honeypot Bot Trap: Automated bots populate all input fields
        if (!empty($this->hp_field)) {
            $this->subscribed = true;
            $this->reset('email');
            session()->flash('newsletter_success', 'Thank you for subscribing to Kaduna State PBC updates!');
            return;
        }

        $this->validate();

        $subscriber = Subscriber::firstOrCreate(
            ['email' => strtolower(trim($this->email))],
            ['is_active' => true]
        );

        if ($subscriber->wasRecentlyCreated) {
            try {
                Mail::to($subscriber->email)->queue(new NewsletterSubscribed($subscriber));
            } catch (\Throwable $e) {
                Log::error('Newsletter email failed: ' . $e->getMessage());
            }
        }

        $this->subscribed = true;
        $this->reset('email');

        session()->flash('newsletter_success', 'Thank you for subscribing to Kaduna State PBC updates!');
    }

    public function render()
    {
        return view('livewire.frontend.newsletter');
    }
}
