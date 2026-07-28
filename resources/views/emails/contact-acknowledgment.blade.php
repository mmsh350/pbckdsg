@extends('emails.layout')

@section('subject', 'Message Acknowledgment - Kaduna State Planning & Budget Commission')

@section('content')
    <h2 style="font-size: 20px; font-weight: 800; color: #041F56; margin: 0 0 12px 0; letter-spacing: -0.3px;">
        Thank you for contacting us!
    </h2>

    <p style="font-size: 15px; color: #334155; line-height: 1.6; margin: 0 0 20px 0;">
        Dear <strong>{{ $contact->name }}</strong>,
    </p>

    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0 0 24px 0;">
        We have successfully received your inquiry regarding <strong
                style="color: #041F56;">"{{ $contact->subject }}"</strong>. Our administrative team is currently reviewing
        your message and will respond as soon as possible.
    </p>

    <!-- Specs Summary Card -->
    <table border="0"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           style="background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; margin-bottom: 24px; overflow: hidden;">
        <tr>
            <td style="background-color: #041F56; color: #FFFFFF; padding: 12px 20px; font-size: 13px; font-weight: 700;">
                Submission Reference & Summary
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <table border="0"
                       cellpadding="0"
                       cellspacing="0"
                       width="100%">
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 8px; width: 120px;">
                            Reference ID:</td>
                        <td style="font-size: 13px; font-weight: 700; color: #0F172A; padding-bottom: 8px;">
                            #KAD-MSG-{{ str_pad($contact->id, 5, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 8px;">Submission Date:
                        </td>
                        <td style="font-size: 13px; font-weight: 600; color: #0F172A; padding-bottom: 8px;">
                            {{ $contact->created_at ? $contact->created_at->format('M d, Y \a\t h:i A') : date('M d, Y \a\t h:i A') }}
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 8px;">Subject:</td>
                        <td style="font-size: 13px; font-weight: 600; color: #0F172A; padding-bottom: 8px;">
                            {{ $contact->subject }}</td>
                    </tr>
                </table>

                <div style="margin-top: 12px; padding-top: 12px; border-top: 1px dashed #CBD5E1;">
                    <div style="font-size: 12px; font-weight: 700; color: #64748B; margin-bottom: 6px;">Your Message Copy:
                    </div>
                    <div
                         style="background-color: #FFFFFF; padding: 14px; border-radius: 6px; font-size: 13px; color: #334155; line-height: 1.6; font-style: italic;">
                        "{!! nl2br(e($contact->message)) !!}"
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0 0 24px 0;">
        If you need urgent assistance, please feel free to reach out to our office directly during official working hours
        (Mon &ndash; Fri, 8:00 AM &ndash; 4:00 PM).
    </p>

    <!-- Signoff Block -->
    <div style="border-top: 1px solid #E2E8F0; padding-top: 20px;">
        <p style="font-size: 14px; color: #334155; margin: 0 0 4px 0;">Warm regards,</p>
        <p style="font-size: 15px; font-weight: 800; color: #041F56; margin: 0;">
            Kaduna State Planning & Budget Commission
        </p>
    </div>
@endsection
