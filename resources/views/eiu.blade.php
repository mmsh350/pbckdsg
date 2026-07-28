@extends('layouts.frontend')

@section('title', 'Economic Intelligence Unit (EIU) | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --ei-primary: #041F56;
        --ei-primary-light: #0B3485;
        --ei-accent: #FF5A1F;
        --ei-accent-hover: #E04810;
        --ei-text-dark: #0F172A;
        --ei-text-muted: #64748B;
        --ei-bg-light: #F8FAFC;
        --ei-border: #E2E8F0;
        --ei-radius: 16px;
    }

    /* Hero Section */
    .ei-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .ei-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .ei-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .ei-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .ei-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ei-breadcrumb {
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

    .ei-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .ei-breadcrumb a:hover {
        color: var(--ei-accent);
    }

    .ei-breadcrumb-sep {
        color: var(--ei-accent);
    }

    .ei-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .ei-title { font-size: 3.5rem; }
    }

    .ei-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .ei-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .ei-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ei-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .ei-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .ei-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--ei-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .ei-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--ei-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .ei-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--ei-text-muted);
        margin-bottom: 1.5rem;
    }

    .ei-image-wrap {
        border-radius: var(--ei-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--ei-border);
    }

    .ei-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Navy Section: Functions */
    .ei-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .ei-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .ei-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .ei-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .ei-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--ei-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .ei-func-card:last-child {
        margin-bottom: 0;
    }

    .ei-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .ei-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--ei-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ei-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .ei-func-desc {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
        margin: 0;
    }

    /* Achievements Grid */
    .ei-achieve-section {
        background-color: var(--ei-bg-light);
        padding: 5rem 0;
    }

    .ei-achieve-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.75rem;
        margin-top: 2rem;
    }

    @media (min-width: 768px) {
        .ei-achieve-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .ei-achieve-card {
        background: #FFFFFF;
        border: 1px solid var(--ei-border);
        border-radius: 14px;
        padding: 1.75rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .ei-achieve-num {
        display: inline-block;
        font-size: 0.8125rem;
        font-weight: 800;
        color: var(--ei-accent);
        background: rgba(255, 90, 31, 0.1);
        padding: 0.2rem 0.6rem;
        border-radius: 6px;
        margin-bottom: 0.75rem;
    }

    .ei-achieve-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--ei-text-dark);
        margin-bottom: 0.5rem;
    }

    .ei-achieve-desc {
        font-size: 0.9375rem;
        color: var(--ei-text-muted);
        line-height: 1.6;
        margin: 0;
    }
</style>

<!-- Hero Section -->
<section class="ei-hero">
    <div class="ei-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="EIU Background">
    </div>
    <div class="ei-hero-overlay"></div>

    <div class="ei-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="ei-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="ei-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments & Units</a>
                <span class="ei-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Economic Intelligence Unit</span>
            </div>
        </nav>

        <h1 class="ei-title">Economic Intelligence Unit (EIU)</h1>
        <p class="ei-subtitle">Providing research-driven economic forecasting, Consumer Price Index (CPI) asymmetries analysis, IGR monitoring, and policy impact assessments.</p>
    </div>
</section>

<!-- About Section -->
<section class="ei-main-section">
    <div class="ei-container">
        <div class="ei-about-grid">
            <div>
                <span class="ei-section-tag">ANALYTICAL BRAIN TRUST</span>
                <h2 class="ei-section-heading">About the Unit</h2>
                <p class="ei-about-text">
                    The Economic Intelligence Unit (EIU) is the specialized macroeconomic research unit within the Kaduna State Planning and Budget Commission.
                </p>
                <p class="ei-about-text">
                    EIU monitors sub-national and national economic trends, produces quarterly macroeconomic updates, analyzes IGR sector contributions, conducts policy impact assessments (ex-ante & ex-post), and generates quarterly position papers to guide executive decision-making.
                </p>
            </div>

            <div class="ei-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/blur-1853262_1280-768x576.jpg') }}" alt="Macroeconomic Analytics">
            </div>
        </div>
    </div>
</section>

<!-- Core Functions Navy Section -->
<section class="ei-navy-section">
    <div class="ei-container">
        <div class="ei-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--ei-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">CORE FUNCTIONS</span>
                <h2 class="ei-navy-title">Research & Forecasting Mandates</h2>
                <div class="ei-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="EIU Strategy Session">
                </div>
            </div>

            <div>
                <div class="ei-func-card">
                    <div class="ei-func-head">
                        <div class="ei-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <h3 class="ei-func-title">Macroeconomic & Revenue Monitoring</h3>
                    </div>
                    <p class="ei-func-desc">
                        Tracks underlying factors impacting state revenue and expenditure. Analyzes mineral sector yields, national economic indicators, and state GDP linkages to deliver historical and forward-looking performance reports.
                    </p>
                </div>

                <div class="ei-func-card">
                    <div class="ei-func-head">
                        <div class="ei-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 class="ei-func-title">Emerging Trends & Policy Impact Assessment</h3>
                    </div>
                    <p class="ei-func-desc">
                        Evaluates new policy pronouncements (ex-ante & ex-post) to measure fiscal implications. Produces ad-hoc position papers and technical advice for the Honorable Commissioner.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Unit Achievements Section -->
<section class="ei-achieve-section">
    <div class="ei-container">
        <span class="ei-section-tag">KEY MILESTONES</span>
        <h2 class="ei-section-heading">Key Research Products & Achievements</h2>

        <div class="ei-achieve-grid">
            <div class="ei-achieve-card">
                <span class="ei-achieve-num">REPORT 01</span>
                <h3 class="ei-achieve-title">N30,000 Minimum Wage Analysis</h3>
                <p class="ei-achieve-desc">Modeled 3 implementation scenarios evaluating personnel costs and state revenues, leading Kaduna State to be the first state in Nigeria to implement the ₦30,000 minimum wage.</p>
            </div>

            <div class="ei-achieve-card">
                <span class="ei-achieve-num">REPORT 02</span>
                <h3 class="ei-achieve-title">Consumer Price Index (CPI) Asymmetries</h3>
                <p class="ei-achieve-desc">Quarterly analysis tracking urban vs rural inflation rates across Kaduna State and comparing them against National Bureau of Statistics (NBS) benchmarks.</p>
            </div>

            <div class="ei-achieve-card">
                <span class="ei-achieve-num">REPORT 03</span>
                <h3 class="ei-achieve-title">Internally Generated Revenue (IGR) Assessment</h3>
                <p class="ei-achieve-desc">Sector-by-sector revenue contribution tracking identifying high-performing and lagging revenue channels across state MDAs.</p>
            </div>

            <div class="ei-achieve-card">
                <span class="ei-achieve-num">REPORT 04</span>
                <h3 class="ei-achieve-title">Kaduna State Country Report</h3>
                <p class="ei-achieve-desc">Modeled after the UK Economist Intelligence Unit report, providing political and economic forecasts highly sought after by international development partners.</p>
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
