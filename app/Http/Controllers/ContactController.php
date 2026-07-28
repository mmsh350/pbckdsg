<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use App\Models\User;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormAcknowledgment;
use App\Services\FormSecurityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Process contact form submission with multi-layered bot & anti-phishing protection.
     */
    public function send(Request $request, FormSecurityService $securityService)
    {
        // 1. Run security check (Honeypot, Time Trap, Captcha, Anti-Phishing & Link Filter)
        $securityViolation = $securityService->validateSubmission($request);
        if ($securityViolation !== null) {
            if ($securityViolation['status'] === 'bot_silent_discard') {
                return back()->with('success', 'Thank you! Your message has been sent successfully. Our team will contact you shortly.');
            }

            return back()
                ->withErrors([$securityViolation['field'] => $securityViolation['message']])
                ->withInput();
        }

        // 2. Validate input schema
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 3. Sanitize inputs (Strip HTML tags)
        $cleanData = $securityService->sanitizeInputs($validated);

        // 4. Save contact record
        $contact = Contact::create($cleanData);

        // 5. Build recipient list based on Admin Settings
        $recipients = [];
        if (Setting::get('send_mail_to_primary', 1)) {
            $primary = Setting::get('contact_primary_email', 'info@pbc.kdsg.gov.ng');
            if ($primary) $recipients[] = trim($primary);
        }

        if (Setting::get('send_mail_to_secondary', 1)) {
            $secondary = Setting::get('contact_secondary_email', 'support@pbc.kdsg.gov.ng');
            if ($secondary) $recipients[] = trim($secondary);
        }

        if (Setting::get('send_mail_to_all_admins', 0)) {
            $adminEmails = User::pluck('email')->toArray();
            $recipients = array_merge($recipients, $adminEmails);
        }

        $recipients = array_unique(array_filter($recipients));

        if (!empty($recipients)) {
            Mail::to($recipients)->queue(new ContactFormSubmitted($contact));
        }

        if (Setting::get('send_acknowledgment_to_sender', 1)) {
            Mail::to($contact->email)->queue(new ContactFormAcknowledgment($contact));
        }

        return back()->with('success', 'Thank you! Your message has been sent successfully. Our team will contact you shortly.');
    }
}
