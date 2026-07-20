@extends('layouts.frontend')

@section('title', $news->title . ' | Planning & Budget Commission')

@section('content')

    <style>
        /* Hero Section */
        .news-details-hero {
            position: relative;
            background-color: #041F56;
            color: white;
            min-height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
            padding-bottom: 5rem;
            padding-top: 8rem;
        }

        .news-details-bg {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .news-details-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            opacity: 0.35;
        }

        .news-details-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(4, 31, 86, 0.7);
        }

        .news-details-hero-content {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            width: 100%;
        }

        .nd-category {
            display: inline-block;
            background-color: #FF5A1F;
            color: white;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.4rem 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.5rem;
        }

        .nd-title {
            color: white;
            font-size: 2.25rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            max-width: 800px;
        }

        @media (min-width: 768px) {
            .nd-title { font-size: 2.75rem; }
        }

        @media (min-width: 1024px) {
            .nd-title { font-size: 3.5rem; }
        }

        .nd-divider {
            border: 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 400px;
            margin: 1.5rem 0;
        }

        .nd-meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Content Section */
        .page-content-wrapper {
            background-color: #ffffff;
            padding: 4rem 0;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .nd-prose {
            color: #475569;
            font-size: 1rem;
            line-height: 1.8;
            font-family: inherit;
        }

        .nd-prose p {
            margin-bottom: 1.5rem;
        }

        .nd-prose img {
            max-width: 100%;
            height: auto;
            margin: 2rem 0;
        }

        /* Share Section */
        .share-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 3rem 0;
            padding: 1.5rem 0;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            font-weight: 600;
            color: #1e293b;
            font-size: 0.875rem;
        }

        .share-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            background-color: #1d4ed8;
            color: white;
            transition: opacity 0.2s;
        }
        .share-btn:hover { opacity: 0.8; }
        .bg-facebook { background-color: #1877f2; }
        .bg-twitter { background-color: #1da1f2; }
        .bg-whatsapp { background-color: #25d366; }
        .bg-telegram { background-color: #0088cc; }

        /* Sidebar Styling */
        .sidebar-widget {
            margin-bottom: 2.5rem;
        }

        .sidebar-title {
            font-size: 1.25rem;
            font-weight: 400;
            color: #1e293b;
            margin-bottom: 1.5rem;
        }

        .widget-categories {
            background-color: #f8fafc;
            padding: 2rem;
        }

        .newsletter-widget {
            background-color: #041F56;
            color: white;
            padding: 2rem;
        }

        .newsletter-widget .sidebar-title {
            color: #FF5A1F;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .newsletter-desc {
            font-size: 0.875rem;
            color: white;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .newsletter-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: none;
            margin-bottom: 1rem;
            font-size: 0.875rem;
            border-radius: 0;
            color: #333;
        }

        .newsletter-btn {
            width: 100%;
            padding: 0.75rem 1rem;
            border: none;
            background-color: #1d4ed8;
            color: white;
            font-weight: 700;
            font-size: 0.875rem;
            cursor: pointer;
            border-radius: 0;
            transition: background 0.2s;
        }
        .newsletter-btn:hover { background-color: #1e40af; }

        .widget-latest {
            background: #fff;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
            border-radius: 0.25rem;
        }

        .latest-news-item {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            align-items: flex-start;
        }
        .latest-news-item:last-child { margin-bottom: 0; }

        .latest-news-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            flex-shrink: 0;
            background: #e2e8f0;
        }

        .latest-news-info h4 {
            font-size: 0.875rem;
            font-weight: 500;
            color: #1e40af;
            line-height: 1.5;
            margin-bottom: 0.5rem;
        }
        .latest-news-info h4 a {
            color: inherit;
            text-decoration: none;
        }
        .latest-news-info h4 a:hover { text-decoration: underline; }

        .latest-news-info .date {
            font-size: 0.75rem;
            color: #94a3b8;
        }
    </style>

    <!-- Article Hero Section -->
    <section class="news-details-hero">
        <div class="news-details-bg">
            @if($news->featured_image)
                <img src="{{ Storage::url($news->featured_image) }}" alt="Background">
            @else
                <img src="{{ asset('assets/images/backgrounds/workflow-2.webp') }}" alt="Background">
            @endif
            <div class="news-details-overlay"></div>
        </div>

        <div class="news-details-hero-content">
            <span class="nd-category">
                {{ $news->categories ?? 'UNCATEGORIZED' }}
            </span>
            <h1 class="nd-title">
                {{ $news->title }}
            </h1>
            <hr class="nd-divider">
            <div class="nd-meta">
                <span>{{ $news->published_at ? \Carbon\Carbon::parse($news->published_at)->format('F j, Y') : $news->created_at->format('F j, Y') }}</span>
                <span>No Comments</span>
            </div>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="page-content-wrapper">
        <div class="main-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Main Content (Left) -->
                <div class="lg:col-span-8">
                    
                    @if($news->featured_image)
                        <div style="margin-bottom: 2rem;">
                            <img src="{{ Storage::url($news->featured_image) }}" alt="{{ $news->title }}" style="width: 100%; height: auto; max-height: 500px; object-fit: cover;">
                        </div>
                    @endif

                    <div class="nd-prose">
                        {!! nl2br(e($news->content)) !!}
                    </div>
                    
                    <!-- Social Share -->
                    <div class="share-section">
                        <span>Share it :</span>
                        <!-- Facebook -->
                        <a href="#" class="share-btn bg-facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" /></svg>
                        </a>
                        <!-- Twitter -->
                        <a href="#" class="share-btn bg-twitter">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="#" class="share-btn bg-whatsapp">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        </a>
                        <!-- Telegram -->
                        <a href="#" class="share-btn bg-telegram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.896-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.892-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Sidebar (Right) -->
                <div class="lg:col-span-4">
                    
                    <!-- Latest News -->
                    <div class="sidebar-widget widget-latest">
                        <h3 class="sidebar-title">Latest News</h3>
                        @foreach($latestNews as $item)
                        <div class="latest-news-item">
                            @if($item->featured_image)
                                <img src="{{ Storage::url($item->featured_image) }}" alt="News Thumbnail" class="latest-news-img">
                            @else
                                <div class="latest-news-img"></div>
                            @endif
                            <div class="latest-news-info">
                                <h4><a href="{{ route('news.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->title, 60) }}</a></h4>
                                <div class="date">{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('F j, Y') : $item->created_at->format('F j, Y') }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
