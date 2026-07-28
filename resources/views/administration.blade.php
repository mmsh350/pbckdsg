@extends('layouts.frontend')

@section('title', 'Administration & HR Department | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --ad-primary: #041F56;
        --ad-primary-light: #0B3485;
        --ad-accent: #FF5A1F;
        --ad-accent-hover: #E04810;
        --ad-text-dark: #0F172A;
        --ad-text-muted: #64748B;
        --ad-bg-light: #F8FAFC;
        --ad-border: #E2E8F0;
        --ad-radius: 16px;
    }

    /* Hero Section */
    .ad-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .ad-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .ad-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .ad-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .ad-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ad-breadcrumb {
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

    .ad-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .ad-breadcrumb a:hover {
        color: var(--ad-accent);
    }

    .ad-breadcrumb-sep {
        color: var(--ad-accent);
    }

    .ad-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .ad-title { font-size: 3.5rem; }
    }

    .ad-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .ad-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .ad-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ad-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .ad-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .ad-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--ad-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .ad-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--ad-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .ad-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--ad-text-muted);
        margin-bottom: 1.5rem;
    }

    .ad-image-wrap {
        border-radius: var(--ad-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--ad-border);
    }

    .ad-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Navy Section: Functions */
    .ad-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .ad-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .ad-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .ad-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .ad-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--ad-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .ad-func-card:last-child {
        margin-bottom: 0;
    }

    .ad-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .ad-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--ad-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ad-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .ad-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .ad-func-list li {
        margin-bottom: 0.5rem;
    }
</style>

<!-- Hero Section -->
<section class="ad-hero">
    <div class="ad-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Administration Background">
    </div>
    <div class="ad-hero-overlay"></div>

    <div class="ad-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="ad-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="ad-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments</a>
                <span class="ad-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Administration & HR</span>
            </div>
        </nav>

        <h1 class="ad-title">Administration & Human Resources</h1>
        <p class="ad-subtitle">Managing human capital development, financial administration, asset inventory, staff welfare, and operational support across all Commission directorates.</p>
    </div>
</section>

<!-- About Section -->
<section class="ad-main-section">
    <div class="ad-container">
        <div class="ad-about-grid">
            <div>
                <span class="ad-section-tag">HUMAN CAPITAL & FINANCE</span>
                <h2 class="ad-section-heading">About the Department</h2>
                <p class="ad-about-text">
                    The Department of Administration and Human Resources is responsible for institutional support, general administration, financial management, and workforce development across the Planning and Budget Commission.
                </p>
                <p class="ad-about-text">
                    Comprising the Human Resources Division, General Administration Division, and the Accounts Unit, the department ensures prudent financial management, asset inventory tracking, and employee performance optimization to empower all commission directorates.
                </p>
            </div>

            <div class="ad-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/GLc9qKqbgAAryYF-768x512.jpeg') }}" alt="Administration Team Meeting">
            </div>
        </div>
    </div>
</section>

<!-- Core Functions Navy Section -->
<section class="ad-navy-section">
    <div class="ad-container">
        <div class="ad-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--ad-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">INSTITUTIONAL MANDATE</span>
                <h2 class="ad-navy-title">Core Administration Functions</h2>
                <div class="ad-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom Overview">
                </div>
            </div>

            <div>
                <div class="ad-func-card">
                    <div class="ad-func-head">
                        <div class="ad-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="ad-func-title">Personnel & HR Management</h3>
                    </div>
                    <ul class="ad-func-list">
                        <li>Supervising recruitment, appointments, promotions, discipline, training, and personnel transfers.</li>
                        <li>Handling employee performance management and manpower development.</li>
                        <li>Managing staff welfare, registry operations, and career progression frameworks.</li>
                    </ul>
                </div>

                <div class="ad-func-card">
                    <div class="ad-func-head">
                        <div class="ad-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </div>
                        <h3 class="ad-func-title">Financial & Asset Administration</h3>
                    </div>
                    <ul class="ad-func-list">
                        <li>Overseeing Commission finances and advising executive management on prudent financial management.</li>
                        <li>Managing inventory, store records, asset safekeeping, and transport logistics.</li>
                        <li>Ensuring clean, secure office environments, IT/computer consumables, and office accommodation.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Development Partners Section -->
<section class="section partners-section" id="partners">
    <div class="container fade-up">
        <div class="partners-header">
            <span class="partners-subtitle">DEVELOPMENT</span>
            <h2 class="partners-title">Partners</h2>
        </div>
        <div class="partners-marquee-wrapper">
            <div class="partners-marquee-content">
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}" alt="Bill & Melinda Gates Foundation"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}" alt="The World Bank"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                <!-- Duplicate set for marquee loop -->
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}" alt="Bill & Melinda Gates Foundation"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}" alt="The World Bank"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
            </div>
        </div>
    </div>
</section>

@endsection
