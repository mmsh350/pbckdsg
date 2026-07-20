@extends('layouts.frontend')

@section('title', 'News | Planning & Budget Commission')

@section('content')
<!-- Page Hero -->
        <section class="page-hero"
            style="background-image: linear-gradient(to right, rgba(4, 31, 86, 0.98), rgba(4, 31, 86, 0.6)), url('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg'); background-size: cover; background-position: center; padding: 10rem 0 8rem; color: white;">
            <div class="container">
                <h1 style="font-size: 3rem; font-weight: 800; color: white; margin: 0 0 1rem 0; line-height: 1.15; letter-spacing: -0.02em;">
                    News and Articles</h1>
                <div style="font-size: 1rem; color: white;">
                    Page: News and Articles
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="section" style="background-color: #f8fafc; padding: 5rem 0 8rem;">
            <div class="container fade-up">
                <div class="news-articles-grid">
                    
                    @forelse($newsItems as $news)
                        <article class="news-article-card">
                            <div class="na-img">
                                @if($news->featured_image)
                                    <img src="{{ Storage::url($news->featured_image) }}" alt="{{ $news->title }}" class="news-img">
                                @else
                                    <div class="news-img" style="background: #e2e8f0; display: flex; align-items: center; justify-content: center;">
                                        <svg style="color: #94a3b8; width: 48px; height: 48px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20a2 2 0 012 2v1m-2 8H4"></path></svg>
                                    </div>
                                @endif
                                <div class="na-avatar">
                                    <svg viewBox="0 0 24 24" fill="#ccc"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                                </div>
                            </div>
                            <div class="na-content">
                                <h3 style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; min-height: 4.5rem;">{{ $news->title }}</h3>
                                <p>{{ Str::limit($news->excerpt ?? strip_tags($news->content), 120) }}</p>
                                <a href="{{ route('news.show', $news->slug) }}" class="na-read-more">READ MORE &raquo;</a>
                            </div>
                            <div class="na-footer">
                                PBC Media &bull; {{ $news->published_at ? \Carbon\Carbon::parse($news->published_at)->format('F j, Y') : $news->created_at->format('F j, Y') }} &bull; No Comments
                            </div>
                        </article>
                    @empty
                        <div style="grid-column: 1 / -1; text-align: center; padding: 4rem 0;">
                            <h3 style="font-size: 1.5rem; color: #475569;">No articles published yet.</h3>
                            <p style="color: #64748b; margin-top: 1rem;">Check back later for updates from the Commission.</p>
                        </div>
                    @endforelse

                </div>
                
                @if($newsItems->hasPages())
                    <div style="margin-top: 3rem; display: flex; justify-content: center;">
                        {{ $newsItems->links('vendor.pagination.custom') }}
                    </div>
                @endif
            </div>
        </section>
@endsection
