<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Mail\NewsletterSubscribed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    /**
     * Handle newsletter subscription.
     */
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscriber = Subscriber::firstOrCreate(
            ['email' => strtolower(trim($validated['email']))],
            ['is_active' => true]
        );

        if ($subscriber->wasRecentlyCreated) {
            try {
                Mail::to($subscriber->email)->queue(new NewsletterSubscribed($subscriber));
            } catch (\Throwable $e) {
                Log::error('Newsletter mail error: ' . $e->getMessage());
            }
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for subscribing to Kaduna State PBC updates!'
            ]);
        }

        return back()->with('newsletter_success', 'Thank you for subscribing to Kaduna State PBC updates!');
    }
}
