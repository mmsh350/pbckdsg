@extends('emails.layout')

@section('subject', 'New Publication: ' . $news->title)

@section('content')
    <div style="margin-bottom: 16px;">
        <span style="background-color: #EFF6FF; color: #1D4ED8; border: 1px solid #BFDBFE; padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; text-transform: uppercase;">
            {{ $news->categories ?: 'News Update' }}
        </span>
    </div>

    <h2 style="font-size: 20px; font-weight: 800; color: #041F56; margin: 0 0 12px 0; letter-spacing: -0.3px;">
        {{ $news->title }}
    </h2>

    <p style="font-size: 13px; color: #64748B; margin: 0 0 20px 0;">
        Published on: <strong>{{ $news->published_at ? $news->published_at->format('M d, Y') : date('M d, Y') }}</strong>
    </p>

    @if ($news->excerpt)
        <p style="font-size: 14px; color: #334155; line-height: 1.6; margin: 0 0 20px 0; font-weight: 500;">
            {{ $news->excerpt }}
        </p>
    @endif

    <div style="background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; margin-bottom: 24px; font-size: 14px; color: #475569; line-height: 1.6;">
        {!! Str::limit(strip_tags($news->content), 280) !!}
    </div>

    <!-- CTA Button -->
    <div style="text-align: center; margin: 30px 0 10px 0;">
        <a href="{{ url('/news/' . $news->slug) }}" style="display: inline-block; background: linear-gradient(135deg, #0B3485 0%, #041F56 100%); color: #FFFFFF; font-size: 14px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 8px; box-shadow: 0 4px 12px rgba(11, 52, 133, 0.3);">
            Read Full Article Online
        </a>
    </div>
@endsection
