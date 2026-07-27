@extends('layouts.frontend')

@section('title', $news->title . ' | Planning & Budget Commission')

@section('content')

@php
    $wordCount = str_word_count(strip_tags($news->content ?? ''));
    $readTime = max(1, ceil($wordCount / 200));
    $publishedDate = $news->published_at ? \Carbon\Carbon::parse($news->published_at) : $news->created_at;
@endphp

<style>
    /* Premium News Details Theme */
    :root {
        --nd-primary: #041F56;
        --nd-primary-light: #0B3485;
        --nd-accent: #FF5A1F;
        --nd-accent-hover: #E04810;
        --nd-text-dark: #0F172A;
        --nd-text-muted: #64748B;
        --nd-bg-light: #F8FAFC;
        --nd-border: #E2E8F0;
        --nd-radius: 16px;
    }

    /* Hero Section */
    .nd-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 6rem;
        overflow: hidden;
    }

    .nd-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .nd-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(4px);
    }

    .nd-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 20%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .nd-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    /* Breadcrumb */
    .nd-breadcrumb {
        display: inline-flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem 0.75rem;
        font-size: 0.8125rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 0.5rem 1.25rem;
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        margin-bottom: 2rem;
    }

    .nd-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .nd-breadcrumb a:hover {
        color: var(--nd-accent);
    }

    .nd-breadcrumb-separator {
        color: var(--nd-accent);
        display: inline-flex;
        align-items: center;
    }

    /* Category & Meta */
    .nd-category-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, var(--nd-accent), #FF7A45);
        color: #FFFFFF;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.4rem 1rem;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 14px rgba(255, 90, 31, 0.35);
    }

    .nd-title {
        color: #FFFFFF;
        font-size: 2.25rem;
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: -0.02em;
        margin-bottom: 1.75rem;
        max-width: 900px;
    }

    @media (min-width: 768px) {
        .nd-title { font-size: 3rem; }
    }

    @media (min-width: 1024px) {
        .nd-title { font-size: 3.25rem; }
    }

    .nd-meta-bar {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.85);
        padding-top: 1.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        max-width: 900px;
    }

    .nd-meta-item {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 500;
    }

    .nd-meta-item svg {
        color: var(--nd-accent);
    }

    /* Main Section Layout */
    .nd-main-wrapper {
        background-color: #FFFFFF;
        padding: 4rem 0 6rem;
    }

    .nd-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .nd-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    @media (min-width: 1024px) {
        .nd-grid {
            grid-template-columns: minmax(0, 1fr) 360px;
            gap: 3.5rem;
        }
    }

    /* Featured Image */
    .nd-featured-image-wrapper {
        position: relative;
        border-radius: var(--nd-radius);
        overflow: hidden;
        margin-bottom: 2.5rem;
        box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.1), 0 8px 10px -6px rgba(15, 23, 42, 0.05);
        border: 1px solid var(--nd-border);
        background-color: var(--nd-bg-light);
    }

    .nd-featured-image {
        width: 100%;
        height: auto;
        max-height: 520px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .nd-featured-image-wrapper:hover .nd-featured-image {
        transform: scale(1.02);
    }

    /* Prose / Article Body */
    .nd-prose-container {
        color: #334155;
        font-size: 1.125rem;
        line-height: 1.85;
        font-family: inherit;
    }

    .nd-prose-container p {
        margin-bottom: 1.75rem;
    }

    .nd-prose-container p:first-of-type::first-letter {
        font-size: 3.5rem;
        font-weight: 800;
        float: left;
        line-height: 0.85;
        margin-right: 0.75rem;
        margin-top: 0.25rem;
        color: var(--nd-primary);
    }

    .nd-prose-container h2,
    .nd-prose-container h3,
    .nd-prose-container h4 {
        color: var(--nd-text-dark);
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
        line-height: 1.3;
    }

    .nd-prose-container h2 { font-size: 1.75rem; }
    .nd-prose-container h3 { font-size: 1.5rem; }

    .nd-prose-container blockquote {
        position: relative;
        background: var(--nd-bg-light);
        border-left: 4px solid var(--nd-accent);
        padding: 1.5rem 2rem;
        margin: 2rem 0;
        border-radius: 0 12px 12px 0;
        font-style: italic;
        color: #1E293B;
        font-weight: 500;
    }

    .nd-prose-container ul, .nd-prose-container ol {
        margin: 1.5rem 0 1.75rem 1.5rem;
    }

    .nd-prose-container li {
        margin-bottom: 0.75rem;
    }

    /* Share Section */
    .nd-share-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1.5rem;
        background-color: var(--nd-bg-light);
        border: 1px solid var(--nd-border);
        border-radius: 12px;
        padding: 1.5rem 2rem;
        margin-top: 3.5rem;
    }

    .nd-share-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-weight: 700;
        color: var(--nd-text-dark);
        font-size: 0.9375rem;
    }

    .nd-share-links {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .nd-share-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        color: #FFFFFF;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .nd-share-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        opacity: 0.9;
    }

    .nd-share-facebook { background-color: #1877F2; }
    .nd-share-twitter { background-color: #000000; }
    .nd-share-whatsapp { background-color: #25D366; }
    .nd-share-telegram { background-color: #24A1DE; }
    .nd-share-copy { background-color: var(--nd-primary); }

    /* Copy Feedback Toast */
    .nd-copy-toast {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        background: var(--nd-primary);
        color: #FFFFFF;
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 0.5rem;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
        pointer-events: none;
        z-index: 9999;
    }

    .nd-copy-toast.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Sidebar Widgets */
    .nd-sidebar-card {
        background-color: #FFFFFF;
        border: 1px solid var(--nd-border);
        border-radius: var(--nd-radius);
        padding: 1.75rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
    }

    .nd-sidebar-header {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
        border-bottom: 2px solid var(--nd-bg-light);
    }

    .nd-sidebar-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--nd-text-dark);
        margin: 0;
    }

    .nd-sidebar-header::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: var(--nd-accent);
    }

    /* Latest Articles List */
    .nd-latest-item {
        display: flex;
        gap: 1rem;
        padding-bottom: 1.25rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px dashed var(--nd-border);
        align-items: center;
    }

    .nd-latest-item:last-child {
        padding-bottom: 0;
        margin-bottom: 0;
        border-bottom: none;
    }

    .nd-latest-thumb {
        width: 76px;
        height: 76px;
        border-radius: 10px;
        object-fit: cover;
        flex-shrink: 0;
        background-color: var(--nd-bg-light);
        border: 1px solid var(--nd-border);
        transition: transform 0.3s ease;
    }

    .nd-latest-item:hover .nd-latest-thumb {
        transform: scale(1.05);
    }

    .nd-latest-info {
        flex: 1;
        min-width: 0;
    }

    .nd-latest-info h4 {
        font-size: 0.875rem;
        font-weight: 600;
        line-height: 1.4;
        margin-bottom: 0.4rem;
    }

    .nd-latest-info h4 a {
        color: var(--nd-text-dark);
        text-decoration: none;
        transition: color 0.2s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .nd-latest-info h4 a:hover {
        color: var(--nd-accent);
    }

    .nd-latest-date {
        font-size: 0.75rem;
        color: var(--nd-text-muted);
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }

    /* CTA Card */
    .nd-cta-card {
        background: linear-gradient(135deg, #041F56 0%, #0B3485 100%);
        color: #FFFFFF;
        border-radius: var(--nd-radius);
        padding: 2rem;
        position: relative;
        overflow: hidden;
    }

    .nd-cta-card::before {
        content: '';
        position: absolute;
        top: -40px;
        right: -40px;
        width: 140px;
        height: 140px;
        border-radius: 50%;
        background: rgba(255, 90, 31, 0.2);
        pointer-events: none;
    }

    .nd-cta-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: #FFFFFF;
    }

    .nd-cta-desc {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .nd-cta-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        padding: 0.85rem 1.25rem;
        background-color: var(--nd-accent);
        color: #FFFFFF;
        font-weight: 700;
        font-size: 0.875rem;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .nd-cta-btn:hover {
        background-color: var(--nd-accent-hover);
        transform: translateY(-2px);
    }
</style>

<!-- Hero Section -->
<section class="nd-hero">
    <div class="nd-hero-bg">
        @if($news->featured_image)
            <img src="{{ Storage::url($news->featured_image) }}" alt="Article Banner Background">
        @else
            <img src="{{ asset('assets/images/backgrounds/workflow-2.webp') }}" alt="Default Banner Background">
        @endif
    </div>
    <div class="nd-hero-overlay"></div>

    <div class="nd-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="nd-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="nd-breadcrumb-separator">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ route('news.index') }}">News & Press Releases</a>
                <span class="nd-breadcrumb-separator">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Article Details</span>
            </div>
        </nav>

        <!-- Category Badge -->
        <div>
            <span class="nd-category-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                {{ $news->categories ?? 'NEWS UPDATE' }}
            </span>
        </div>

        <!-- Article Main Title -->
        <h1 class="nd-title">
            {{ $news->title }}
        </h1>

        <!-- Metadata Bar -->
        <div class="nd-meta-bar">
            <div class="nd-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span>Published {{ $publishedDate->format('M j, Y') }}</span>
            </div>
            <div class="nd-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 16 14"></polyline></svg>
                <span>{{ $readTime }} min read</span>
            </div>
            <div class="nd-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Planning & Budget Commission</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Article Body & Sidebar -->
<section class="nd-main-wrapper">
    <div class="nd-container">
        <div class="nd-grid">
            
            <!-- Article Body Column (Left) -->
            <div>
                @if($news->featured_image)
                    <div class="nd-featured-image-wrapper">
                        <img src="{{ Storage::url($news->featured_image) }}" alt="{{ $news->title }}" class="nd-featured-image">
                    </div>
                @endif

                <!-- Content -->
                <div class="nd-prose-container">
                    {!! nl2br(e($news->content)) !!}
                </div>

                <!-- Interactive Social Share Bar -->
                <div class="nd-share-box">
                    <div class="nd-share-title">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        <span>Share this press release</span>
                    </div>
                    <div class="nd-share-links">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="nd-share-btn nd-share-facebook" aria-label="Share on Facebook" title="Facebook">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" /></svg>
                        </a>
                        <!-- Twitter / X -->
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}" target="_blank" rel="noopener noreferrer" class="nd-share-btn nd-share-twitter" aria-label="Share on Twitter" title="X (Twitter)">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($news->title . ' ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="nd-share-btn nd-share-whatsapp" aria-label="Share on WhatsApp" title="WhatsApp">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        </a>
                        <!-- Telegram -->
                        <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}" target="_blank" rel="noopener noreferrer" class="nd-share-btn nd-share-telegram" aria-label="Share on Telegram" title="Telegram">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.896-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.892-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                        </a>
                        <!-- Copy Link Button -->
                        <button type="button" class="nd-share-btn nd-share-copy" id="copyShareBtn" aria-label="Copy Article Link" title="Copy Link">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column (Right) -->
            <aside>
                <!-- Latest News Card Widget -->
                <div class="nd-sidebar-card">
                    <div class="nd-sidebar-header">
                        <h3 class="nd-sidebar-title">Recent Updates</h3>
                    </div>

                    @forelse($latestNews as $item)
                        @php
                            $itemDate = $item->published_at ? \Carbon\Carbon::parse($item->published_at) : $item->created_at;
                        @endphp
                        <div class="nd-latest-item">
                            @if($item->featured_image)
                                <img src="{{ Storage::url($item->featured_image) }}" alt="Thumbnail" class="nd-latest-thumb">
                            @else
                                <div class="nd-latest-thumb" style="display: flex; align-items: center; justify-content: center; color: var(--nd-text-muted);">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                </div>
                            @endif
                            <div class="nd-latest-info">
                                <h4>
                                    <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="nd-latest-date">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <span>{{ $itemDate->format('M j, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p style="font-size: 0.875rem; color: var(--nd-text-muted); text-align: center; margin: 0;">No other articles available.</p>
                    @endforelse
                </div>

                <!-- Navigation & Call to Action Widget -->
                <div class="nd-cta-card">
                    <h3 class="nd-cta-title">Explore All News</h3>
                    <p class="nd-cta-desc">Stay informed with official updates, public notices, and strategic planning announcements from Kaduna State.</p>
                    <a href="{{ route('news.index') }}" class="nd-cta-btn">
                        <span>Back to News Overview</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- Copy Link Toast Notification -->
<div class="nd-copy-toast" id="copyToast">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
    <span>Link copied to clipboard!</span>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const copyBtn = document.getElementById('copyShareBtn');
        const toast = document.getElementById('copyToast');

        if (copyBtn && toast) {
            copyBtn.addEventListener('click', function() {
                const currentUrl = window.location.href;
                navigator.clipboard.writeText(currentUrl).then(function() {
                    toast.classList.add('show');
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 3000);
                }).catch(function(err) {
                    console.error('Could not copy link: ', err);
                });
            });
        }
    });
</script>
@endpush

@endsection
