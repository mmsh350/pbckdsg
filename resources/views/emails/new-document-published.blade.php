@extends('emails.layout')

@section('subject', 'New Official Document Uploaded: ' . $document->title)

@section('content')
    <div style="margin-bottom: 16px;">
        <span style="background-color: #FEF3C7; color: #92400E; border: 1px solid #FDE68A; padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; text-transform: uppercase;">
            {{ $document->category ?: 'Official Document' }}
        </span>
    </div>

    <h2 style="font-size: 20px; font-weight: 800; color: #041F56; margin: 0 0 12px 0; letter-spacing: -0.3px;">
        {{ $document->title }}
    </h2>

    <p style="font-size: 13px; color: #64748B; margin: 0 0 20px 0;">
        Uploaded on: <strong>{{ $document->published_at ? $document->published_at->format('M d, Y') : date('M d, Y') }}</strong>
    </p>

    @if ($document->description)
        <p style="font-size: 14px; color: #334155; line-height: 1.6; margin: 0 0 20px 0;">
            {{ $document->description }}
        </p>
    @endif

    <!-- CTA Button -->
    <div style="text-align: center; margin: 30px 0 10px 0;">
        <a href="{{ route('documents.download', $document) }}" style="display: inline-block; background: linear-gradient(135deg, #FF5A1F 0%, #E04810 100%); color: #FFFFFF; font-size: 14px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 8px; box-shadow: 0 4px 12px rgba(255, 90, 31, 0.3);">
            Download Official Document
        </a>
    </div>
@endsection
