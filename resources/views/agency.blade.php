@extends('layouts.frontend')

@section('title', 'Kaduna State Residents Registration Agency | Parastatal')

@section('content')

<style>
    :root {
        --ag-primary: #041F56;
        --ag-primary-light: #0B3485;
        --ag-accent: #FF5A1F;
        --ag-accent-hover: #E04810;
        --ag-text-dark: #0F172A;
        --ag-text-muted: #64748B;
        --ag-bg-light: #F8FAFC;
        --ag-border: #E2E8F0;
        --ag-radius: 16px;
    }

    /* Hero Section */
    .ag-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .ag-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .ag-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .ag-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .ag-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ag-breadcrumb {
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

    .ag-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .ag-breadcrumb a:hover {
        color: var(--ag-accent);
    }

    .ag-breadcrumb-sep {
        color: var(--ag-accent);
    }

    .ag-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .ag-title { font-size: 3.5rem; }
    }

    .ag-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* Main Section */
    .ag-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .ag-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ag-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .ag-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .ag-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--ag-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .ag-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--ag-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .ag-about-text {
        font-size: 1.0625rem;
        line-height: 1.75;
        color: var(--ag-text-muted);
        margin-bottom: 2rem;
    }

    .ag-image-wrap {
        border-radius: var(--ag-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--ag-border);
    }

    .ag-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* 4-Card Pillars Grid */
    .ag-pillars-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 3rem;
    }

    @media (min-width: 768px) {
        .ag-pillars-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .ag-pillar-card {
        background: var(--ag-bg-light);
        border: 1px solid var(--ag-border);
        border-radius: 14px;
        padding: 2rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .ag-pillar-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 25px -5px rgba(15, 23, 42, 0.06);
    }

    .ag-pillar-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .ag-pillar-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--ag-primary);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ag-pillar-title {
        font-size: 1.1875rem;
        font-weight: 700;
        color: var(--ag-text-dark);
        margin: 0;
    }

    .ag-pillar-desc {
        font-size: 0.9375rem;
        color: var(--ag-text-muted);
        line-height: 1.65;
        margin: 0;
    }

    .ag-pillar-list {
        margin: 0;
        padding-left: 1.25rem;
        font-size: 0.9375rem;
        color: var(--ag-text-muted);
        line-height: 1.65;
    }

    .ag-pillar-list li {
        margin-bottom: 0.35rem;
    }

    /* Functions & Guidelines Navy Section */
    .ag-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .ag-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .ag-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .ag-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .ag-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--ag-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .ag-func-card:last-child {
        margin-bottom: 0;
    }

    .ag-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .ag-func-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: var(--ag-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ag-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .ag-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .ag-func-list li {
        margin-bottom: 0.5rem;
    }

    .ag-func-text {
        font-size: 0.9375rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.7;
        margin-bottom: 1rem;
    }
</style>

<!-- Hero Section -->
<section class="ag-hero">
    <div class="ag-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Agency Background">
    </div>
    <div class="ag-hero-overlay"></div>

    <div class="ag-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="ag-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="ag-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span>Governance</span>
                <span class="ag-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Residents Registration Agency</span>
            </div>
        </nav>

        <h1 class="ag-title">Kaduna State Residents Registration Agency</h1>
        <p class="ag-subtitle">Creating an up-to-date, reliable database of all residents in Kaduna State to optimize resource allocation, healthcare, education, and social welfare.</p>
    </div>
</section>

<!-- About Section -->
<section class="ag-main-section">
    <div class="ag-container">
        <div class="ag-about-grid">
            
            <div>
                <span class="ag-section-tag">STATE RESIDENT DATABASE</span>
                <h2 class="ag-section-heading">About the Agency (KADSRRA)</h2>
                <p class="ag-about-text">
                    Established by law on 1st March 2018 and formally inaugurated on 11th April 2019, KADSRRA is mandated to build a central resident database. This system assigns unique resident identifiers to provide actionable demographic data for state planning, healthcare, education, financial inclusion, and housing.
                </p>
            </div>

            <div class="ag-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/subscribe-3534409_1280-1024x661.jpg') }}" alt="KADSRRA Resident Registration">
            </div>

        </div>

        <!-- 4 Pillars Grid -->
        <div class="ag-pillars-grid">
            
            <div class="ag-pillar-card">
                <div class="ag-pillar-head">
                    <div class="ag-pillar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </div>
                    <h3 class="ag-pillar-title">Vision</h3>
                </div>
                <p class="ag-pillar-desc">To be an effective agency for generating up-to-date biometric and demographic data of all Kaduna State residents for good governance.</p>
            </div>

            <div class="ag-pillar-card">
                <div class="ag-pillar-head">
                    <div class="ag-pillar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3 class="ag-pillar-title">Mission</h3>
                </div>
                <p class="ag-pillar-desc">To identify and deploy modern technology to register all residents in Kaduna State for effective planning and sustainable development.</p>
            </div>

            <div class="ag-pillar-card">
                <div class="ag-pillar-head">
                    <div class="ag-pillar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <h3 class="ag-pillar-title">Core Values</h3>
                </div>
                <ul class="ag-pillar-list">
                    <li>Teamwork & Transparency</li>
                    <li>Reliability & Security</li>
                    <li>Credibility & Integrity</li>
                    <li>Statewide Unity</li>
                </ul>
            </div>

            <div class="ag-pillar-card">
                <div class="ag-pillar-head">
                    <div class="ag-pillar-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    </div>
                    <h3 class="ag-pillar-title">Key Objectives</h3>
                </div>
                <ul class="ag-pillar-list">
                    <li>Enable precise state resource allocation based on actual population metrics.</li>
                    <li>Simplify service delivery by linking state services with unique person identifiers.</li>
                    <li>Accelerate economic growth and financial inclusion across all LGAs.</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Functions & Registration Guidelines Section -->
<section class="ag-navy-section">
    <div class="ag-container">
        <div class="ag-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--ag-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">STATUTORY MANDATE</span>
                <h2 class="ag-navy-title">Agency Functions & Registration</h2>
                <div class="ag-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="KADSRRA Infrastructure">
                </div>
            </div>

            <div>
                <!-- Block 1 -->
                <div class="ag-func-card">
                    <div class="ag-func-head">
                        <div class="ag-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="ag-func-title">Core Functions</h3>
                    </div>
                    <ul class="ag-func-list">
                        <li>Maintain a central resident database covering security, social welfare, employment, housing, health, and education data.</li>
                        <li>Establish digital infrastructure for issuing residency cards to qualified state residents.</li>
                        <li>Formulate biometric collection guidelines and advise government on data capture protocols.</li>
                    </ul>
                </div>

                <!-- Block 2 -->
                <div class="ag-func-card">
                    <div class="ag-func-head">
                        <div class="ag-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3 class="ag-func-title">Benefits of Resident Registration</h3>
                    </div>
                    <ul class="ag-func-list">
                        <li>Provides real-time population data for infrastructure development and healthcare funding.</li>
                        <li>Allows accurate determination of public budget requirements for targeted community projects.</li>
                        <li>Enhances public security management and emergency response planning across Kaduna State.</li>
                    </ul>
                </div>

                <!-- Block 3 -->
                <div class="ag-func-card">
                    <div class="ag-func-head">
                        <div class="ag-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <h3 class="ag-func-title">Registration Guidelines (Adults 16+)</h3>
                    </div>
                    <p class="ag-func-text">
                        Applicants aged 16 and above undergo biometric data capture and receive a temporary proof slip. Two proofs of residency (utility bill / rent receipt) along with any valid ID (Passport, Driver's License, Student ID, or Tax Receipt) are required.
                    </p>
                </div>

                <!-- Block 4 -->
                <div class="ag-func-card">
                    <div class="ag-func-head">
                        <div class="ag-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                        </div>
                        <h3 class="ag-func-title">Registration Guidelines (Children 0-15)</h3>
                    </div>
                    <p class="ag-func-text">
                        Children aged 0-15 are registered under their parent or guardian. Required items include Birth Certificate, Passport Photograph, and the Parent/Guardian registration slip.
                    </p>
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
