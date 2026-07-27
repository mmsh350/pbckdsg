@extends('layouts.frontend')

@section('title', 'Monitoring & Evaluation Department | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --me-primary: #041F56;
        --me-primary-light: #0B3485;
        --me-accent: #FF5A1F;
        --me-accent-hover: #E04810;
        --me-text-dark: #0F172A;
        --me-text-muted: #64748B;
        --me-bg-light: #F8FAFC;
        --me-border: #E2E8F0;
        --me-radius: 16px;
    }

    /* Hero Section */
    .me-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .me-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .me-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .me-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .me-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .me-breadcrumb {
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

    .me-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .me-breadcrumb a:hover {
        color: var(--me-accent);
    }

    .me-breadcrumb-sep {
        color: var(--me-accent);
    }

    .me-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .me-title { font-size: 3.5rem; }
    }

    .me-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .me-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .me-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .me-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .me-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .me-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--me-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .me-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--me-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .me-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--me-text-muted);
        margin-bottom: 1.5rem;
    }

    .me-image-wrap {
        border-radius: var(--me-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--me-border);
    }

    .me-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Mandates Grid */
    .me-mandates-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    @media (min-width: 640px) {
        .me-mandates-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .me-mandate-item {
        background: var(--me-bg-light);
        border: 1px solid var(--me-border);
        border-radius: 12px;
        padding: 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .me-mandate-icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255, 90, 31, 0.12);
        color: var(--me-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }

    .me-mandate-text {
        font-size: 0.9375rem;
        font-weight: 600;
        color: var(--me-text-dark);
        line-height: 1.5;
    }

    /* Navy Section: Eyes and Ears & Citifeed */
    .me-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .me-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .me-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .me-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .me-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--me-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .me-func-card:last-child {
        margin-bottom: 0;
    }

    .me-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .me-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--me-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .me-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .me-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .me-func-list li {
        margin-bottom: 0.5rem;
    }
</style>

<!-- Hero Section -->
<section class="me-hero">
    <div class="me-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Monitoring & Evaluation Background">
    </div>
    <div class="me-hero-overlay"></div>

    <div class="me-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="me-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="me-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments</a>
                <span class="me-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Monitoring & Evaluation</span>
            </div>
        </nav>

        <h1 class="me-title">Monitoring & Evaluation Department</h1>
        <p class="me-subtitle">Ensuring accountability, project performance tracking, impact evaluations, and citizen feedback loops across all state capital investments.</p>
    </div>
</section>

<!-- About Section -->
<section class="me-main-section">
    <div class="me-container">
        <div class="me-about-grid">
            <div>
                <span class="me-section-tag">RESULTS DELIVERY</span>
                <h2 class="me-section-heading">About the Department</h2>
                <p class="me-about-text">
                    The Monitoring and Evaluation (M&E) Department tracks the implementation of state policies, programs, and capital projects to verify that public funds deliver their intended socio-economic impact for Kaduna State residents.
                </p>
                <p class="me-about-text">
                    Through systematic data collection, field inspections, annual sector performance reviews, and citizen engagement tools, the department provides empirical evidence and early warnings to decision-makers.
                </p>
            </div>

            <div class="me-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/pbc-kd-img4-768x512.jpg') }}" alt="M&E Field Inspection Team">
            </div>
        </div>

        <span class="me-section-tag">KEY MANDATES & ACTIVITIES</span>
        <h2 class="me-section-heading">Core Scope & Responsibilities</h2>

        <div class="me-mandates-grid">
            <div class="me-mandate-item">
                <div class="me-mandate-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="me-mandate-text">Monitoring & Evaluation of all Capital Projects.</div>
            </div>

            <div class="me-mandate-item">
                <div class="me-mandate-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="me-mandate-text">Supervision of MDAs Project Support Units.</div>
            </div>

            <div class="me-mandate-item">
                <div class="me-mandate-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="me-mandate-text">Establish and manage the State M&E System.</div>
            </div>

            <div class="me-mandate-item">
                <div class="me-mandate-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="me-mandate-text">Conduct Impact Evaluation Studies for key state projects.</div>
            </div>

            <div class="me-mandate-item">
                <div class="me-mandate-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="me-mandate-text">Conduct Annual Sector Performance Reviews.</div>
            </div>

            <div class="me-mandate-item">
                <div class="me-mandate-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="me-mandate-text">Anchor Results Delivery at the Ministry level.</div>
            </div>
        </div>
    </div>
</section>

<!-- Navy Section: Performance Assessment Framework -->
<section class="me-navy-section">
    <div class="me-container">
        <div class="me-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--me-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">PERFORMANCE STRATEGY</span>
                <h2 class="me-navy-title">Eyes & Ears Project & CitiFeed</h2>
                <div class="me-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/GLQ2ixZW8AAVhuI-1674x2048.jpeg') }}" alt="Eyes & Ears Framework">
                </div>
            </div>

            <div>
                <!-- Eyes & Ears Overview -->
                <div class="me-func-card">
                    <div class="me-func-head">
                        <div class="me-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </div>
                        <h3 class="me-func-title">The Eyes & Ears Project</h3>
                    </div>
                    <ul class="me-func-list">
                        <li>Innovative mobile & geospatial tool linking budget execution directly to project milestones.</li>
                        <li>Provides real-time evidence-based feedback to policymakers with photos, GPS coordinates, and progress logs.</li>
                        <li>Serves as an early warning system to flag sub-standard work or abandoned projects before completion deadlines.</li>
                    </ul>
                </div>

                <!-- CitiFeed & Citizen Feedback -->
                <div class="me-func-card">
                    <div class="me-func-head">
                        <div class="me-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </div>
                        <h3 class="me-func-title">Citizen Feedback (CitiFeed) App & Call Center</h3>
                    </div>
                    <ul class="me-func-list">
                        <li><strong>Smartphone App:</strong> Available on Play Store for citizens to inspect community projects, submit ratings, upload photos, and flag issues.</li>
                        <li><strong>Toll-Free Call Center:</strong> SMS/Toll-Free Line (07080699500) enabling all residents to report project feedback directly to the Commission.</li>
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
