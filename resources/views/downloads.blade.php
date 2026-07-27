@extends('layouts.frontend')

@section('title', 'Downloads & Resource Repository | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --dl-primary: #041F56;
        --dl-primary-light: #0B3485;
        --dl-accent: #FF5A1F;
        --dl-accent-hover: #E04810;
        --dl-text-dark: #0F172A;
        --dl-text-muted: #64748B;
        --dl-bg-light: #F8FAFC;
        --dl-border: #E2E8F0;
        --dl-radius: 16px;
    }

    /* Hero Section */
    .dl-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .dl-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .dl-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .dl-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.12) 0%, transparent 60%);
    }

    .dl-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .dl-breadcrumb {
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

    .dl-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .dl-breadcrumb a:hover {
        color: var(--dl-accent);
    }

    .dl-breadcrumb-sep {
        color: var(--dl-accent);
    }

    .dl-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .dl-title { font-size: 3.5rem; }
    }

    .dl-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 650px;
        line-height: 1.6;
        margin: 0;
    }

    /* Resources Category Overview */
    .dl-overview-section {
        background-color: #FFFFFF;
        padding: 5rem 0 3rem;
    }

    .dl-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .dl-overview-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .dl-overview-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .dl-cat-card {
        background: var(--dl-bg-light);
        border: 1px solid var(--dl-border);
        border-radius: var(--dl-radius);
        padding: 2rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .dl-cat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 25px -10px rgba(15, 23, 42, 0.08);
        border-color: rgba(4, 31, 86, 0.15);
    }

    .dl-cat-icon {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--dl-primary) 0%, var(--dl-primary-light) 100%);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        box-shadow: 0 6px 16px rgba(4, 31, 86, 0.25);
    }

    .dl-cat-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dl-text-dark);
        margin-bottom: 0.75rem;
    }

    .dl-cat-desc {
        font-size: 0.9375rem;
        color: var(--dl-text-muted);
        line-height: 1.6;
        margin: 0;
    }
</style>

<!-- Hero Section -->
<section class="dl-hero">
    <div class="dl-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Downloads Banner Background">
    </div>
    <div class="dl-hero-overlay"></div>

    <div class="dl-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="dl-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="dl-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Downloads Repository</span>
            </div>
        </nav>

        <h1 class="dl-title">Document Repository</h1>
        <p class="dl-subtitle">Access public financial frameworks, state budget publications, policy guidelines, and statistical reports issued by Kaduna State.</p>
    </div>
</section>

<!-- Overview Cards -->
<section class="dl-overview-section">
    <div class="dl-container">
        <div class="dl-overview-grid">
            
            <!-- Category 1 -->
            <div class="dl-cat-card">
                <div class="dl-cat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                </div>
                <h3 class="dl-cat-title">Budget Documents</h3>
                <p class="dl-cat-desc">Annual state budget bills, implementation statements, revenue projections, and simplified citizens' budget breakdowns.</p>
            </div>

            <!-- Category 2 -->
            <div class="dl-cat-card">
                <div class="dl-cat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path></svg>
                </div>
                <h3 class="dl-cat-title">Policy Frameworks</h3>
                <p class="dl-cat-desc">Medium-Term Sector Strategies (MTSS), state development blueprints, and strategic planning guidelines.</p>
            </div>

            <!-- Category 3 -->
            <div class="dl-cat-card">
                <div class="dl-cat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                </div>
                <h3 class="dl-cat-title">Reports & Reviews</h3>
                <p class="dl-cat-desc">Performance evaluation bulletins, statistical reviews, economic indicators, and official commission reports.</p>
            </div>

        </div>
    </div>
</section>

<!-- Livewire Document Search & Downloads Component -->
@livewire('frontend.downloads')

@endsection
