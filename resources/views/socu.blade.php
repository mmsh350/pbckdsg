@extends('layouts.frontend')

@section('title', 'State Operations Coordinating Unit (SOCU) | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --so-primary: #041F56;
        --so-primary-light: #0B3485;
        --so-accent: #FF5A1F;
        --so-accent-hover: #E04810;
        --so-text-dark: #0F172A;
        --so-text-muted: #64748B;
        --so-bg-light: #F8FAFC;
        --so-border: #E2E8F0;
        --so-radius: 16px;
    }

    /* Hero Section */
    .so-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .so-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .so-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .so-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .so-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .so-breadcrumb {
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

    .so-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .so-breadcrumb a:hover {
        color: var(--so-accent);
    }

    .so-breadcrumb-sep {
        color: var(--so-accent);
    }

    .so-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .so-title { font-size: 3.5rem; }
    }

    .so-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .so-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .so-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .so-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .so-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .so-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--so-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .so-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--so-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .so-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--so-text-muted);
        margin-bottom: 1.5rem;
    }

    .so-image-wrap {
        border-radius: var(--so-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--so-border);
    }

    .so-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* NSIPs Programs Cards */
    .so-nsip-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    @media (min-width: 640px) {
        .so-nsip-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .so-nsip-card {
        background: var(--so-bg-light);
        border: 1px solid var(--so-border);
        border-radius: 14px;
        padding: 1.75rem;
    }

    .so-nsip-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--so-text-dark);
        margin-bottom: 0.5rem;
    }

    .so-nsip-desc {
        font-size: 0.9375rem;
        color: var(--so-text-muted);
        line-height: 1.6;
        margin: 0;
    }

    /* Navy Section: Mandate & Structure */
    .so-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .so-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .so-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .so-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .so-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--so-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .so-func-card:last-child {
        margin-bottom: 0;
    }

    .so-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .so-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--so-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .so-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .so-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .so-func-list li {
        margin-bottom: 0.5rem;
    }
</style>

<!-- Hero Section -->
<section class="so-hero">
    <div class="so-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="SOCU Background">
    </div>
    <div class="so-hero-overlay"></div>

    <div class="so-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="so-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="so-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments & Units</a>
                <span class="so-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">SOCU Unit</span>
            </div>
        </nav>

        <h1 class="so-title">State Operations Coordinating Unit (SOCU)</h1>
        <p class="so-subtitle">Establishing, managing, and updating the State Single Register (SSR) of Poor & Vulnerable Households for targeted social interventions.</p>
    </div>
</section>

<!-- About Section -->
<section class="so-main-section">
    <div class="so-container">
        <div class="so-about-grid">
            <div>
                <span class="so-section-tag">SOCIAL INVESTMENT SECRETARIAT</span>
                <h2 class="so-section-heading">About the Unit</h2>
                <p class="so-about-text">
                    Established in 2016, SOCU generates, maintains, and updates the State Single Register (SSR) of Poor and Vulnerable Households in Kaduna State using Community-Based Targeting (CBT) methodology.
                </p>
                <p class="so-about-text">
                    Domiciled within the Planning and Budget Commission, SOCU serves as the operational Secretariat for the State Focal Person (SFP) on Social Investment Programs (NSIPs), linking National and State social welfare interventions.
                </p>
            </div>

            <div class="so-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/kd8.jpg') }}" alt="SOCU Field Operations">
            </div>
        </div>

        <!-- NSIP Programs Coordination Grid -->
        <span class="so-section-tag">PORTFOLIO COORDINATION</span>
        <h2 class="so-section-heading">National Social Investment Programs (NSIPs)</h2>

        <div class="so-nsip-grid">
            <div class="so-nsip-card">
                <h3 class="so-nsip-title">State Single Register (SSR)</h3>
                <p class="so-nsip-desc">Community-Based Targeting process identifying poor and vulnerable households across all 23 LGAs in Kaduna State.</p>
            </div>

            <div class="so-nsip-card">
                <h3 class="so-nsip-title">N-Power Program</h3>
                <p class="so-nsip-desc">Youth empowerment & skill acquisition program coordinated by SOCU at the Planning and Budget Commission.</p>
            </div>

            <div class="so-nsip-card">
                <h3 class="so-nsip-title">Conditional Cash Transfer (CCT)</h3>
                <p class="so-nsip-desc">Direct bi-monthly cash disbursements to verified households on the SSR, managed via the State Cash Transfer Unit (SCTU).</p>
            </div>

            <div class="so-nsip-card">
                <h3 class="so-nsip-title">Home Grown School Feeding (NHGSFP)</h3>
                <p class="so-nsip-desc">Primary school nutrition program providing daily meals to Primary 1-3 pupils in public schools across Kaduna State.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mandate & Structure Navy Section -->
<section class="so-navy-section">
    <div class="so-container">
        <div class="so-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--so-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">CORE MANDATE</span>
                <h2 class="so-navy-title">SOCU Operational Scope</h2>
                <div class="so-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/17254835_img20230520080414_jpeg41c4aa4a16958bbf96b85f9269a896b3.jpeg') }}" alt="Social Investment Engagement">
                </div>
            </div>

            <div>
                <div class="so-func-card">
                    <div class="so-func-head">
                        <div class="so-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="so-func-title">Key Responsibilities</h3>
                    </div>
                    <ul class="so-func-list">
                        <li>Generate, maintain, and update the State Single Register (SSR) of Poor and Vulnerable Households.</li>
                        <li>Monitor daily program implementation and manage beneficiary grievance redress systems.</li>
                        <li>Prepare weekly, monthly, and quarterly implementation reports for State and Federal authorities.</li>
                        <li>Maintain data entry, quality control, and data protection protocols for all beneficiary records.</li>
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
