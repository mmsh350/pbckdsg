@extends('layouts.frontend')

@section('title', 'Development Aid Coordination Department | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --da-primary: #041F56;
        --da-primary-light: #0B3485;
        --da-accent: #FF5A1F;
        --da-accent-hover: #E04810;
        --da-text-dark: #0F172A;
        --da-text-muted: #64748B;
        --da-bg-light: #F8FAFC;
        --da-border: #E2E8F0;
        --da-radius: 16px;
    }

    /* Hero Section */
    .da-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .da-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .da-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .da-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .da-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .da-breadcrumb {
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

    .da-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .da-breadcrumb a:hover {
        color: var(--da-accent);
    }

    .da-breadcrumb-sep {
        color: var(--da-accent);
    }

    .da-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .da-title { font-size: 3.5rem; }
    }

    .da-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .da-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .da-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .da-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .da-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .da-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--da-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .da-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--da-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .da-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--da-text-muted);
        margin-bottom: 1.5rem;
    }

    .da-image-wrap {
        border-radius: var(--da-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--da-border);
    }

    .da-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Navy Section: Functions & Duties */
    .da-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .da-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .da-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .da-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .da-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--da-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .da-func-card:last-child {
        margin-bottom: 0;
    }

    .da-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .da-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--da-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .da-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .da-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .da-func-list li {
        margin-bottom: 0.5rem;
    }
</style>

<!-- Hero Section -->
<section class="da-hero">
    <div class="da-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Development Aid Background">
    </div>
    <div class="da-hero-overlay"></div>

    <div class="da-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="da-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="da-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments</a>
                <span class="da-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Development Aid Coordination</span>
            </div>
        </nav>

        <h1 class="da-title">Development Aid Coordination Department</h1>
        <p class="da-subtitle">Serving as the primary portal for international and local development partners, managing MOUs, counterpart funding, grants, and technical assistance.</p>
    </div>
</section>

<!-- About Section -->
<section class="da-main-section">
    <div class="da-container">
        <div class="da-about-grid">
            <div>
                <span class="da-section-tag">PARTNER GATEWAY</span>
                <h2 class="da-section-heading">About the Department</h2>
                <p class="da-about-text">
                    The Department of Development Aid Coordination acts as the official entry and exit gateway for all bilateral and multilateral partners operating in Kaduna State.
                </p>
                <p class="da-about-text">
                    The department harmonizes donor assistance (technical, financial grants/loans, and material supplies) to ensure signed Memoranda of Understanding (MOUs) align directly with State Government priorities, preventing duplication of effort and maximizing resource efficiency across all LGAs.
                </p>
            </div>

            <div class="da-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/GZMpzJ9WMAAmoNU-768x432.jpeg') }}" alt="Development Aid Coordination Session">
            </div>
        </div>
    </div>
</section>

<!-- Functions & Duties Navy Section -->
<section class="da-navy-section">
    <div class="da-container">
        <div class="da-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--da-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">KEY MANDATE</span>
                <h2 class="da-navy-title">Functions & Operational Duties</h2>
                <div class="da-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom Overview">
                </div>
            </div>

            <div>
                <!-- Core Functions -->
                <div class="da-func-card">
                    <div class="da-func-head">
                        <div class="da-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                        </div>
                        <h3 class="da-func-title">Core Functions</h3>
                    </div>
                    <ul class="da-func-list">
                        <li>Oversee state relationships, counter-part funding, and donor support programs.</li>
                        <li>Maintain a comprehensive data bank on all active Development Partners in Kaduna State.</li>
                        <li>Advise government on the economic efficacy of donor loans/grants as part of the Debt Management Committee under the Ministry of Finance.</li>
                        <li>Promote Kaduna State to attract new international and local development support.</li>
                    </ul>
                </div>

                <!-- Duties & Responsibilities -->
                <div class="da-func-card">
                    <div class="da-func-head">
                        <div class="da-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 class="da-func-title">Operational Responsibilities</h3>
                    </div>
                    <ul class="da-func-list">
                        <li>Identifying key sectors for partner intervention and target beneficiaries.</li>
                        <li>Liaising with the National Planning Commission to profile alternative development funding sources.</li>
                        <li>Scrutinizing proposals from MDAs/NGOs and managing payment releases upon cash backing.</li>
                        <li>Analyzing and monitoring signed MOUs against Kaduna State Development Plan (SDP) targets.</li>
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
