@extends('layouts.frontend')

@section('title', 'News & Press Releases | Planning & Budget Commission')

@section('content')

<style>
    /* News Index Theme Styles */
    :root {
        --np-primary: #041F56;
        --np-primary-light: #0B3485;
        --np-accent: #FF5A1F;
        --np-accent-hover: #E04810;
        --np-text-dark: #0F172A;
        --np-text-muted: #64748B;
        --np-bg-light: #F8FAFC;
        --np-border: #E2E8F0;
        --np-radius: 16px;
    }

    /* Hero Section */
    .np-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .np-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .np-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .np-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.12) 0%, transparent 60%);
    }

    .np-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    /* Breadcrumb */
    .np-breadcrumb {
        display: inline-flex;
        align-items: center;
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

    .np-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .np-breadcrumb a:hover {
        color: var(--np-accent);
    }

    .np-breadcrumb-sep {
        color: var(--np-accent);
    }

    .np-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .np-title { font-size: 3.5rem; }
    }

    .np-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 650px;
        line-height: 1.6;
        margin: 0;
    }

    /* Main Section Layout */
    .np-main-section {
        background-color: var(--np-bg-light);
        padding: 4rem 0 7rem;
    }

    .np-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    /* Featured Spotlight Article Banner */
    .np-featured-card {
        background: #FFFFFF;
        border: 1px solid var(--np-border);
        border-radius: var(--np-radius);
        overflow: hidden;
        margin-bottom: 3.5rem;
        box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.06);
        display: grid;
        grid-template-columns: 1fr;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    @media (min-width: 992px) {
        .np-featured-card {
            grid-template-columns: 1.2fr 1fr;
        }
    }

    .np-featured-card:hover {
        box-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.12);
    }

    .np-featured-img-wrap {
        position: relative;
        overflow: hidden;
        min-height: 300px;
    }

    .np-featured-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .np-featured-card:hover .np-featured-img {
        transform: scale(1.04);
    }

    .np-featured-content {
        padding: 2.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .np-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        background: rgba(255, 90, 31, 0.1);
        color: var(--np-accent);
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.35rem 0.85rem;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 1.25rem;
        width: fit-content;
    }

    .np-featured-title {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--np-text-dark);
        line-height: 1.3;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .np-featured-title { font-size: 2.1rem; }
    }

    .np-featured-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .np-featured-title a:hover {
        color: var(--np-primary-light);
    }

    .np-featured-excerpt {
        font-size: 1rem;
        color: var(--np-text-muted);
        line-height: 1.7;
        margin-bottom: 1.75rem;
    }

    .np-meta {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        font-size: 0.85rem;
        color: var(--np-text-muted);
        margin-bottom: 2rem;
    }

    .np-meta-item {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        font-weight: 500;
    }

    .np-meta-item svg {
        color: var(--np-accent);
    }

    .np-btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
        background-color: var(--np-primary);
        color: #FFFFFF;
        font-weight: 700;
        font-size: 0.9375rem;
        padding: 0.85rem 1.75rem;
        border-radius: 10px;
        text-decoration: none;
        transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        width: fit-content;
    }

    .np-btn-primary:hover {
        background-color: var(--np-primary-light);
        transform: translateY(-2px);
        box-shadow: none;
    }

    /* Grid Section Header */
    .np-section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .np-section-title {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--np-text-dark);
        margin: 0;
        position: relative;
        padding-left: 1rem;
    }

    .np-section-title::before {
        content: '';
        position: absolute;
        left: 0;
        top: 15%;
        bottom: 15%;
        width: 4px;
        background-color: var(--np-accent);
        border-radius: 4px;
    }

    /* Article Cards Grid */
    .np-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 640px) {
        .np-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (min-width: 1024px) {
        .np-grid { grid-template-columns: repeat(3, 1fr); }
    }

    .np-card {
        background: #FFFFFF;
        border: 1px solid var(--np-border);
        border-radius: var(--np-radius);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .np-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 30px -10px rgba(15, 23, 42, 0.1);
        border-color: rgba(4, 31, 86, 0.15);
    }

    .np-card-img-wrap {
        position: relative;
        height: 220px;
        overflow: hidden;
        background-color: var(--np-bg-light);
    }

    .np-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .np-card:hover .np-card-img {
        transform: scale(1.06);
    }

    .np-card-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(4, 31, 86, 0.85);
        backdrop-filter: blur(8px);
        color: #FFFFFF;
        font-size: 0.7rem;
        font-weight: 700;
        padding: 0.3rem 0.75rem;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .np-card-body {
        padding: 1.75rem;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .np-card-title {
        font-size: 1.1875rem;
        font-weight: 700;
        line-height: 1.4;
        margin-bottom: 0.75rem;
    }

    .np-card-title a {
        color: var(--np-text-dark);
        text-decoration: none;
        transition: color 0.2s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .np-card-title a:hover {
        color: var(--np-primary-light);
    }

    .np-card-excerpt {
        font-size: 0.9375rem;
        color: var(--np-text-muted);
        line-height: 1.6;
        margin-bottom: 1.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex: 1;
    }

    .np-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 1.25rem;
        border-top: 1px solid var(--np-border);
        margin-top: auto;
    }

    .np-card-link {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        font-size: 0.875rem;
        font-weight: 700;
        color: var(--np-accent);
        text-decoration: none;
        transition: gap 0.2s ease;
    }

    .np-card:hover .np-card-link {
        gap: 0.6rem;
    }

    /* Empty State */
    .np-empty-box {
        background: #FFFFFF;
        border: 1px solid var(--np-border);
        border-radius: var(--np-radius);
        padding: 5rem 2rem;
        text-align: center;
        max-width: 600px;
        margin: 2rem auto;
    }

    .np-empty-icon {
        width: 64px;
        height: 64px;
        background: rgba(255, 90, 31, 0.1);
        color: var(--np-accent);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
</style>

<!-- Hero Section -->
<section class="np-hero">
    <div class="np-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="News Header Background">
    </div>
    <div class="np-hero-overlay"></div>

    <div class="np-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="np-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="np-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">News & Press Releases</span>
            </div>
        </nav>

        <h1 class="np-title">News & Press Releases</h1>
        <p class="np-subtitle">Discover official announcements, strategic developments, and policy updates from the Kaduna State Planning and Budget Commission.</p>
    </div>
</section>

<!-- Main Articles Grid Section -->
<section class="np-main-section">
    <div class="np-container">

        @if($newsItems->count() > 0)
            
            @php
                // Use the first article on page 1 as the Spotlight Featured Item
                $isFirstPage = method_exists($newsItems, 'currentPage') ? $newsItems->currentPage() === 1 : true;
                $spotlightArticle = $isFirstPage ? $newsItems->first() : null;
                $gridArticles = $isFirstPage ? $newsItems->slice(1) : $newsItems;
            @endphp

            <!-- Spotlight Article Banner (Only on Page 1) -->
            @if($spotlightArticle)
                @php
                    $spotlightDate = $spotlightArticle->published_at ? \Carbon\Carbon::parse($spotlightArticle->published_at) : $spotlightArticle->created_at;
                    $wordCount = str_word_count(strip_tags($spotlightArticle->content ?? ''));
                    $readTime = max(1, ceil($wordCount / 200));
                @endphp
                <article class="np-featured-card">
                    <div class="np-featured-img-wrap">
                        @if($spotlightArticle->featured_image)
                            <img src="{{ Storage::url($spotlightArticle->featured_image) }}" alt="{{ $spotlightArticle->title }}" class="np-featured-img">
                        @else
                            <img src="{{ asset('assets/images/backgrounds/workflow-2.webp') }}" alt="Spotlight News Image" class="np-featured-img">
                        @endif
                    </div>
                    <div class="np-featured-content">
                        <span class="np-badge">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            Spotlight Release
                        </span>
                        <h2 class="np-featured-title">
                            <a href="{{ route('news.show', $spotlightArticle->slug) }}">{{ $spotlightArticle->title }}</a>
                        </h2>
                        <p class="np-featured-excerpt">
                            {{ Str::limit($spotlightArticle->excerpt ?? strip_tags($spotlightArticle->content), 170) }}
                        </p>
                        <div class="np-meta">
                            <div class="np-meta-item">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>{{ $spotlightDate->format('M j, Y') }}</span>
                            </div>
                            <div class="np-meta-item">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span>{{ $readTime }} min read</span>
                            </div>
                        </div>
                        <a href="{{ route('news.show', $spotlightArticle->slug) }}" class="np-btn-primary">
                            <span>Read Full Story</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </article>
            @endif

            <!-- News Grid Title -->
            @if($gridArticles->count() > 0)
                <div class="np-section-header">
                    <h2 class="np-section-title">Latest Articles & Statements</h2>
                </div>

                <div class="np-grid">
                    @foreach($gridArticles as $news)
                        @php
                            $articleDate = $news->published_at ? \Carbon\Carbon::parse($news->published_at) : $news->created_at;
                            $articleWordCount = str_word_count(strip_tags($news->content ?? ''));
                            $articleReadTime = max(1, ceil($articleWordCount / 200));
                        @endphp
                        <article class="np-card">
                            <div class="np-card-img-wrap">
                                @if($news->featured_image)
                                    <img src="{{ Storage::url($news->featured_image) }}" alt="{{ $news->title }}" class="np-card-img">
                                @else
                                    <img src="{{ asset('assets/images/backgrounds/workflow-2.webp') }}" alt="Default Article Image" class="np-card-img">
                                @endif
                                <span class="np-card-badge">{{ $news->categories ?? 'NEWS' }}</span>
                            </div>
                            <div class="np-card-body">
                                <h3 class="np-card-title">
                                    <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
                                </h3>
                                <p class="np-card-excerpt">
                                    {{ Str::limit($news->excerpt ?? strip_tags($news->content), 120) }}
                                </p>
                                <div class="np-card-footer">
                                    <div class="np-meta-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span>{{ $articleDate->format('M j, Y') }}</span>
                                    </div>
                                    <a href="{{ route('news.show', $news->slug) }}" class="np-card-link">
                                        <span>Read Article</span>
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

            <!-- Pagination -->
            @if($newsItems->hasPages())
                <div style="margin-top: 4rem; display: flex; justify-content: center;">
                    {{ $newsItems->links('vendor.pagination.custom') }}
                </div>
            @endif

        @else
            <!-- Empty State -->
            <div class="np-empty-box">
                <div class="np-empty-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20a2 2 0 012 2v1m-2 8H4"></path></svg>
                </div>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--np-text-dark); margin-bottom: 0.5rem;">No Articles Published Yet</h3>
                <p style="color: var(--np-text-muted); font-size: 0.9375rem; margin: 0;">Please check back soon for upcoming news releases and announcements from the Commission.</p>
            </div>
        @endif

    </div>
</section>

@endsection
