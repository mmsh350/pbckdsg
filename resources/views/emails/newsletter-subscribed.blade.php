@extends('emails.layout')

@section('subject', 'Welcome to Kaduna State Planning & Budget Commission Newsletter')

@section('content')
    <h2 style="font-size: 20px; font-weight: 800; color: #041F56; margin: 0 0 12px 0; letter-spacing: -0.3px;">
        Welcome to Official Updates & Newsletter!
    </h2>

    <p style="font-size: 15px; color: #334155; line-height: 1.6; margin: 0 0 20px 0;">
        Hello,
    </p>

    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0 0 24px 0;">
        Thank you for subscribing to the official newsletter of the <strong style="color: #041F56;">Kaduna State Planning &
            Budget Commission</strong>. You will now receive timely updates regarding state publications, budget framework
        announcements, economic intelligence reports, and development policy frameworks directly in your inbox.
    </p>

    <div
         style="background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 18px; margin-bottom: 24px;">
        <h4 style="margin: 0 0 8px 0; font-size: 14px; color: #041F56; font-weight: 700;">Subscribed Email Address:</h4>
        <p style="margin: 0; font-size: 14px; color: #0B3485; font-weight: 700;">{{ $subscriber->email }}</p>
    </div>

    <!-- Signoff Block -->
    <div style="border-top: 1px solid #E2E8F0; padding-top: 20px;">
        <p style="font-size: 14px; color: #334155; margin: 0 0 4px 0;">Warm regards,</p>
        <p style="font-size: 15px; font-weight: 800; color: #041F56; margin: 0;">
            Kaduna State Planning & Budget Commission
        </p>
    </div>
@endsection
