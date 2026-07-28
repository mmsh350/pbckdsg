@extends('layouts.frontend')

@section('title', 'Sustainable Development Goals (SDGs) Unit | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --sd-primary: #041F56;
        --sd-primary-light: #0B3485;
        --sd-accent: #FF5A1F;
        --sd-accent-hover: #E04810;
        --sd-text-dark: #0F172A;
        --sd-text-muted: #64748B;
        --sd-bg-light: #F8FAFC;
        --sd-border: #E2E8F0;
        --sd-radius: 16px;
    }

    /* Hero Section */
    .sd-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .sd-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .sd-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .sd-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .sd-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .sd-breadcrumb {
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

    .sd-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .sd-breadcrumb a:hover {
        color: var(--sd-accent);
    }

    .sd-breadcrumb-sep {
        color: var(--sd-accent);
    }

    .sd-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .sd-title { font-size: 3.5rem; }
    }

    .sd-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* About Section */
    .sd-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .sd-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .sd-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .sd-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .sd-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--sd-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .sd-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--sd-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .sd-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--sd-text-muted);
        margin-bottom: 1.5rem;
    }

    .sd-image-wrap {
        border-radius: var(--sd-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--sd-border);
    }

    .sd-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Navy Achievements Section */
    .sd-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .sd-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .sd-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .sd-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .sd-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--sd-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .sd-func-card:last-child {
        margin-bottom: 0;
    }

    .sd-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .sd-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--sd-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .sd-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .sd-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .sd-func-list li {
        margin-bottom: 0.5rem;
    }
</style>

<!-- Hero Section -->
<section class="sd-hero">
    <div class="sd-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="SDGs Unit Background">
    </div>
    <div class="sd-hero-overlay"></div>

    <div class="sd-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="sd-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="sd-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments & Units</a>
                <span class="sd-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">SDGs Unit</span>
            </div>
        </nav>

        <h1 class="sd-title">Kaduna State SDGs Unit</h1>
        <p class="sd-subtitle">Localizing the 17 United Nations Sustainable Development Goals into state development plans, monitoring indicators, and driving inclusive socio-economic growth.</p>
    </div>
</section>

<!-- About Section -->
<section class="sd-main-section">
    <div class="sd-container">
        <div class="sd-about-grid">
            <div>
                <span class="sd-section-tag">GLOBAL GOALS, LOCAL IMPACT</span>
                <h2 class="sd-section-heading">About the SDGs Unit</h2>
                <p class="sd-about-text">
                    Adopted at the 70th UN General Assembly in September 2015, the 17 Sustainable Development Goals (SDGs) guide worldwide action toward zero poverty, good health, quality education, and clean energy by 2030.
                </p>
                <p class="sd-about-text">
                    Kaduna State made history on September 20, 2017 as the first sub-national government in Nigeria to present its in-depth SDGs implementation strategy at the 72nd UN General Assembly in New York. The SDGs are fully integrated into the Kaduna State Development Plan (SDP).
                </p>
            </div>

            <div class="sd-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="SDGs Global Goals Action">
            </div>
        </div>
    </div>
</section>

<!-- Achievements Navy Section -->
<section class="sd-navy-section">
    <div class="sd-container">
        <div class="sd-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--sd-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">TRACK RECORD</span>
                <h2 class="sd-navy-title">Key Unit Achievements</h2>
                <div class="sd-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/save-energy-7382279_1280-768x512.jpg') }}" alt="SDGs Healthcare Intervention">
                </div>
            </div>

            <div>
                <!-- Card 1 -->
                <div class="sd-func-card">
                    <div class="sd-func-head">
                        <div class="sd-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3 class="sd-func-title">Global Presentation & Policy Action</h3>
                    </div>
                    <ul class="sd-func-list">
                        <li>Presented the Kaduna State 2017 SDGs Report at the 72nd United Nations General Assembly (UNGA) in New York, USA.</li>
                        <li>Organized the State SDGs Acceleration Conference in January 2019.</li>
                        <li>Mapped SDGs indicators across all Kaduna State Ministries, Departments, and Agencies (MDAs).</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="sd-func-card">
                    <div class="sd-func-head">
                        <div class="sd-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16"></path><path d="M1 21h22"></path></svg>
                        </div>
                        <h3 class="sd-func-title">Healthcare & Infrastructure Projects</h3>
                    </div>
                    <ul class="sd-func-list">
                        <li>Facilitated the construction of a 100-Bed Mother and Child Care Hospital at Dan'daura, Kubau LGA (OSSAP-SDGs intervention).</li>
                        <li>Executed 124 projects under the Conditional Grant Scheme (CGS) with ₦1.2Bn counterpart funds across Kaura, Kachia, Igabi, Chikun, Ikara, and Kubau LGAs.</li>
                        <li>Distributed OSSAP-SDGs special interventions: 1 Toyota Hiace Ambulance, 10 Phototherapy Machines, 10 Incubators, 30 Tricycles, 200 Motorcycles, and 69 Grinding Machines.</li>
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
