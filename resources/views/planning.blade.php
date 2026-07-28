@extends('layouts.frontend')

@section('title', 'Development Planning Department | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --pl-primary: #041F56;
        --pl-primary-light: #0B3485;
        --pl-accent: #FF5A1F;
        --pl-accent-hover: #E04810;
        --pl-text-dark: #0F172A;
        --pl-text-muted: #64748B;
        --pl-bg-light: #F8FAFC;
        --pl-border: #E2E8F0;
        --pl-radius: 16px;
    }

    /* Hero Section */
    .pl-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .pl-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .pl-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .pl-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .pl-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .pl-breadcrumb {
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

    .pl-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .pl-breadcrumb a:hover {
        color: var(--pl-accent);
    }

    .pl-breadcrumb-sep {
        color: var(--pl-accent);
    }

    .pl-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .pl-title { font-size: 3.5rem; }
    }

    .pl-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .pl-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .pl-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .pl-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
    }

    @media (min-width: 992px) {
        .pl-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .pl-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--pl-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .pl-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--pl-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .pl-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--pl-text-muted);
        margin-bottom: 1.5rem;
    }

    .pl-image-wrap {
        border-radius: var(--pl-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--pl-border);
    }

    .pl-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Mandates Section */
    .pl-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .pl-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .pl-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .pl-navy-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .pl-mandate-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--pl-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .pl-mandate-card:last-child {
        margin-bottom: 0;
    }

    .pl-mandate-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .pl-mandate-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--pl-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .pl-mandate-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
        line-height: 1.35;
    }

    .pl-mandate-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .pl-mandate-list li {
        margin-bottom: 0.5rem;
    }
</style>

<!-- Hero Section -->
<section class="pl-hero">
    <div class="pl-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Planning Background">
    </div>
    <div class="pl-hero-overlay"></div>

    <div class="pl-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="pl-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="pl-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments</a>
                <span class="pl-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Development Planning</span>
            </div>
        </nav>

        <h1 class="pl-title">Development Planning Department</h1>
        <p class="pl-subtitle">Formulating, coordinating, and managing strategic economic blueprints, state development frameworks, and inter-governmental planning policies.</p>
    </div>
</section>

<!-- About Section -->
<section class="pl-main-section">
    <div class="pl-container">
        <div class="pl-about-grid">
            <div>
                <span class="pl-section-tag">STRATEGIC BLUEPRINT</span>
                <h2 class="pl-section-heading">About the Department</h2>
                <p class="pl-about-text">
                    A plan serves as the definitive roadmap for policy and decision makers in Kaduna State. Jointly developed with citizens, MDAs, and development partners, the planning framework translates long-term state aspirations into strategic programs, resource projections, and measurable outcomes.
                </p>
                <p class="pl-about-text">
                    The Planning Department acts as the focal engine for integrating short, medium, and long-term sector strategies (SDP, MTSS) to ensure synchronized growth across all local governments and state sectors.
                </p>
            </div>

            <div class="pl-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/pbc-kd-img2-768x512.jpg') }}" alt="Planning Department Strategy Session">
            </div>
        </div>
    </div>
</section>

<!-- Mandate Section -->
<section class="pl-navy-section">
    <div class="pl-container">
        <div class="pl-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--pl-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">DEPARTMENTAL MANDATE</span>
                <h2 class="pl-navy-title">Key Responsibilities & Scope</h2>
                <div class="pl-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Mandate Overview">
                </div>
            </div>

            <div>
                <!-- Mandate 1 -->
                <div class="pl-mandate-card">
                    <div class="pl-mandate-head">
                        <div class="pl-mandate-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                        <h3 class="pl-mandate-title">Economic Policy Formulation</h3>
                    </div>
                    <ul class="pl-mandate-list">
                        <li>Researching, developing, managing, and disseminating socio-economic policy papers and analytical reports.</li>
                        <li>Organizing the annual Kaduna State Economic and Development Summit.</li>
                        <li>Translating federal economic guidelines into state-specific sector policies.</li>
                        <li>Representing Kaduna State at the National Council on Development Planning (NCDP).</li>
                    </ul>
                </div>

                <!-- Mandate 2 -->
                <div class="pl-mandate-card">
                    <div class="pl-mandate-head">
                        <div class="pl-mandate-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        </div>
                        <h3 class="pl-mandate-title">Development Plan Coordination</h3>
                    </div>
                    <ul class="pl-mandate-list">
                        <li>Formulating strategic planning guidelines and reviewing sector frameworks across all MDAs.</li>
                        <li>Collating natural, human, and financial resource data for strategic allocation.</li>
                        <li>Facilitating short-, medium-, and long-term state development plan integration (SDP & MTSS).</li>
                    </ul>
                </div>

                <!-- Mandate 3 -->
                <div class="pl-mandate-card">
                    <div class="pl-mandate-head">
                        <div class="pl-mandate-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="pl-mandate-title">LGA Plan Integration</h3>
                    </div>
                    <ul class="pl-mandate-list">
                        <li>Assisting Local Government Councils to develop social, economic, and financial plans.</li>
                        <li>Providing quality control and technical assistance for LGA development plans.</li>
                        <li>Synchronizing LGA plans into overarching State Development Plans.</li>
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
