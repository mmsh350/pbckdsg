@extends('emails.layout')

@section('subject', 'New Contact Form Submission: ' . $contact->subject)

@section('content')
    <div style="margin-bottom: 16px;">
        <span
              style="background-color: #EFF6FF; color: #1D4ED8; border: 1px solid #BFDBFE; padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; text-transform: uppercase;">
            New Public Inquiry
        </span>
    </div>

    <h2 style="font-size: 20px; font-weight: 800; color: #041F56; margin: 0 0 12px 0; letter-spacing: -0.3px;">
        New Contact Inquiry Received
    </h2>

    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0 0 24px 0;">
        A new message has been submitted via the Kaduna State Planning & Budget Commission web portal. Below are the details
        of the submission:
    </p>

    <!-- Sender Details Table -->
    <table border="0"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           style="background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; margin-bottom: 24px; overflow: hidden;">
        <tr>
            <td style="background-color: #041F56; color: #FFFFFF; padding: 12px 20px; font-size: 13px; font-weight: 700;">
                Sender Information & Reference
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <table border="0"
                       cellpadding="0"
                       cellspacing="0"
                       width="100%">
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 10px; width: 130px;">
                            Sender Name:</td>
                        <td style="font-size: 14px; font-weight: 700; color: #0F172A; padding-bottom: 10px;">
                            {{ $contact->name }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 10px;">Email Address:
                        </td>
                        <td style="font-size: 13px; font-weight: 600; color: #0B3485; padding-bottom: 10px;">
                            <a href="mailto:{{ $contact->email }}"
                               style="color: #0B3485; text-decoration: none;">{{ $contact->email }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 10px;">Subject Line:
                        </td>
                        <td style="font-size: 13px; font-weight: 700; color: #0F172A; padding-bottom: 10px;">
                            {{ $contact->subject }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px; font-weight: 600; color: #64748B; padding-bottom: 10px;">Received At:
                        </td>
                        <td style="font-size: 13px; font-weight: 600; color: #0F172A; padding-bottom: 10px;">
                            {{ $contact->created_at ? $contact->created_at->format('M d, Y \a\t h:i A') : date('M d, Y \a\t h:i A') }}
                        </td>
                    </tr>
                </table>

                <div style="margin-top: 12px; padding-top: 12px; border-top: 1px dashed #CBD5E1;">
                    <div style="font-size: 12px; font-weight: 700; color: #64748B; margin-bottom: 8px;">Message Details:
                    </div>
                    <div
                         style="background-color: #FFFFFF;  padding: 16px; border-radius: 6px; font-size: 14px; color: #1E293B; line-height: 1.7;">
                        {!! nl2br(e($contact->message)) !!}
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <!-- CTA Button -->
    <div style="text-align: center; margin: 30px 0 10px 0;">
        <a href="mailto:{{ $contact->email }}?subject=RE: {{ urlencode($contact->subject) }}"
           style="display: inline-block; background: linear-gradient(135deg, #FF5A1F 0%, #E04810 100%); color: #FFFFFF; font-size: 14px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 8px; box-shadow: 0 4px 12px rgba(255, 90, 31, 0.3);">
            Reply to {{ $contact->name }}
        </a>
    </div>
@endsection
