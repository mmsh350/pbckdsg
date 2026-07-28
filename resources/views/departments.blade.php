@extends('layouts.frontend')

@section('title', 'Departments | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --dp-primary: #041F56;
        --dp-primary-light: #0B3485;
        --dp-accent: #FF5A1F;
        --dp-accent-hover: #E04810;
        --dp-text-dark: #0F172A;
        --dp-text-muted: #64748B;
        --dp-bg-light: #F8FAFC;
        --dp-border: #E2E8F0;
        --dp-radius: 16px;
    }

    /* Hero Section */
    .dp-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .dp-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .dp-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .dp-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 20%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .dp-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .dp-breadcrumb {
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

    .dp-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .dp-breadcrumb a:hover {
        color: var(--dp-accent);
    }

    .dp-breadcrumb-sep {
        color: var(--dp-accent);
    }

    .dp-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .dp-title { font-size: 3.5rem; }
    }

    .dp-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 650px;
        line-height: 1.6;
        margin: 0;
    }

    /* Main Section */
    .dp-main-section {
        background-color: var(--dp-bg-light);
        padding: 5rem 0 7rem;
    }

    .dp-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .dp-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 640px) {
        .dp-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (min-width: 1024px) {
        .dp-grid { grid-template-columns: repeat(3, 1fr); }
    }

    .dp-card {
        background: #FFFFFF;
        border: 1px solid var(--dp-border);
        border-radius: var(--dp-radius);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .dp-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 30px -10px rgba(15, 23, 42, 0.12);
        border-color: rgba(4, 31, 86, 0.15);
    }

    .dp-card-img-wrap {
        position: relative;
        height: 220px;
        overflow: hidden;
        background-color: var(--dp-bg-light);
    }

    .dp-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .dp-card:hover .dp-card-img {
        transform: scale(1.06);
    }

    .dp-card-icon-badge {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background: linear-gradient(135deg, var(--dp-primary) 0%, var(--dp-primary-light) 100%);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 16px rgba(4, 31, 86, 0.3);
        border: 2px solid #FFFFFF;
    }

    .dp-card-body {
        padding: 1.75rem;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .dp-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dp-text-dark);
        line-height: 1.35;
        margin-bottom: 0.75rem;
    }

    .dp-card-excerpt {
        font-size: 0.9375rem;
        color: var(--dp-text-muted);
        line-height: 1.65;
        margin-bottom: 1.75rem;
        flex: 1;
    }

    .dp-card-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
        font-weight: 700;
        color: var(--dp-accent);
        text-decoration: none;
        padding-top: 1rem;
        border-top: 1px solid var(--dp-border);
        transition: gap 0.2s ease;
        margin-top: auto;
    }

    .dp-card:hover .dp-card-link {
        gap: 0.75rem;
    }
</style>

<!-- Hero Section -->
<section class="dp-hero">
    <div class="dp-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Departments Banner Background">
    </div>
    <div class="dp-hero-overlay"></div>

    <div class="dp-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="dp-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="dp-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Departments</span>
            </div>
        </nav>

        <h1 class="dp-title">Commission Departments</h1>
        <p class="dp-subtitle">Explore the core operational bodies driving planning, strategic budgeting, project evaluation, and governance across Kaduna State.</p>
    </div>
</section>

<!-- Departments Grid Section -->
<section class="dp-main-section">
    <div class="dp-container">
        <div class="dp-grid">
            
            <!-- Planning Department -->
            <article class="dp-card">
                <div class="dp-card-img-wrap">
                    <img src="{{ asset('assets/images/backgrounds/pbc-kd-img2-768x512.jpg') }}" alt="Planning Department" class="dp-card-img">
                    <div class="dp-card-icon-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                </div>
                <div class="dp-card-body">
                    <h2 class="dp-card-title">Planning Department</h2>
                    <p class="dp-card-excerpt">Formulates state strategic development targets, aligns sectorial goals, and guides medium to long-term economic development frameworks for Kaduna State.</p>
                    <a href="{{ url('planning') }}" class="dp-card-link">
                        <span>Explore Department</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <!-- Budget Department -->
            <article class="dp-card">
                <div class="dp-card-img-wrap">
                    <img src="{{ asset('assets/images/backgrounds/GWLR5FVXkAAyOpM-768x576.jpeg') }}" alt="Budget Department" class="dp-card-img">
                    <div class="dp-card-icon-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                </div>
                <div class="dp-card-body">
                    <h2 class="dp-card-title">Budget Department</h2>
                    <p class="dp-card-excerpt">Manages state fiscal policy, coordinates annual budget preparation, monitors revenue allocation, and oversees public financial disbursements.</p>
                    <a href="{{ url('budget') }}" class="dp-card-link">
                        <span>Explore Department</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <!-- Monitoring & Evaluation -->
            <article class="dp-card">
                <div class="dp-card-img-wrap">
                    <img src="{{ asset('assets/images/backgrounds/pbc-kd-img4-768x512.jpg') }}" alt="M & E Department" class="dp-card-img">
                    <div class="dp-card-icon-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                </div>
                <div class="dp-card-body">
                    <h2 class="dp-card-title">Monitoring & Evaluation</h2>
                    <p class="dp-card-excerpt">Tracks state project execution performance, conducts field inspections, ensures quality control, and verifies effective public service delivery.</p>
                    <a href="{{ url('monitoring') }}" class="dp-card-link">
                        <span>Explore Department</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <!-- Dev. Aid & Coordination -->
            <article class="dp-card">
                <div class="dp-card-img-wrap">
                    <img src="{{ asset('assets/images/backgrounds/GZMrBdOXsAEq7Mq-768x1024.jpeg') }}" alt="Dev Aid Department" class="dp-card-img">
                    <div class="dp-card-icon-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                </div>
                <div class="dp-card-body">
                    <h2 class="dp-card-title">Dev. Aid & Coordination</h2>
                    <p class="dp-card-excerpt">Coordinates development assistance from donor partners, international agencies, and non-governmental organizations to support state initiatives.</p>
                    <a href="{{ url('devaid') }}" class="dp-card-link">
                        <span>Explore Department</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <!-- Admin & HR Department -->
            <article class="dp-card">
                <div class="dp-card-img-wrap">
                    <img src="{{ asset('assets/images/backgrounds/GZMpzJ9WMAAmoNU-768x432.jpeg') }}" alt="Admin & HR Department" class="dp-card-img">
                    <div class="dp-card-icon-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    </div>
                </div>
                <div class="dp-card-body">
                    <h2 class="dp-card-title">Admin & HR Department</h2>
                    <p class="dp-card-excerpt">Supervises human resources, personnel recruitment, staff development programs, and internal administrative logistics of the Commission.</p>
                    <a href="{{ url('administration') }}" class="dp-card-link">
                        <span>Explore Department</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

@endsection
