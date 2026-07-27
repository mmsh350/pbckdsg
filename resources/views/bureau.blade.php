@extends('layouts.frontend')

@section('title', 'Kaduna State Bureau of Statistics | Parastatal')

@section('content')

<style>
    :root {
        --kd-primary: #041F56;
        --kd-primary-light: #0B3485;
        --kd-accent: #FF5A1F;
        --kd-accent-hover: #E04810;
        --kd-text-dark: #0F172A;
        --kd-text-muted: #64748B;
        --kd-bg-light: #F8FAFC;
        --kd-border: #E2E8F0;
        --kd-radius: 16px;
    }

    /* Hero Section */
    .kd-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .kd-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .kd-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .kd-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .kd-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .kd-breadcrumb {
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

    .kd-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .kd-breadcrumb a:hover {
        color: var(--kd-accent);
    }

    .kd-breadcrumb-sep {
        color: var(--kd-accent);
    }

    .kd-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .kd-title { font-size: 3.5rem; }
    }

    .kd-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* Main Section */
    .kd-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .kd-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .kd-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 5rem;
    }

    @media (min-width: 992px) {
        .kd-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .kd-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--kd-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .kd-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--kd-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .kd-about-text {
        font-size: 1.0625rem;
        line-height: 1.75;
        color: var(--kd-text-muted);
        margin-bottom: 2rem;
    }

    .kd-website-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.85rem 1.75rem;
        background: var(--kd-primary);
        color: #FFFFFF;
        font-weight: 700;
        font-size: 0.9375rem;
        border-radius: 10px;
        text-decoration: none;
        transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        box-shadow: 0 4px 14px rgba(4, 31, 86, 0.2);
    }

    .kd-website-btn:hover {
        background: var(--kd-primary-light);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(4, 31, 86, 0.3);
    }

    .kd-image-wrap {
        border-radius: var(--kd-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--kd-border);
    }

    .kd-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Vision / Mission Grid */
    .kd-vm-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    @media (min-width: 640px) {
        .kd-vm-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .kd-vm-card {
        background: var(--kd-bg-light);
        border: 1px solid var(--kd-border);
        border-radius: 14px;
        padding: 1.75rem;
    }

    .kd-vm-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
    }

    .kd-vm-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--kd-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .kd-vm-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--kd-text-dark);
        margin: 0;
    }

    .kd-vm-desc {
        font-size: 0.9375rem;
        color: var(--kd-text-muted);
        line-height: 1.6;
        margin: 0;
    }

    /* Strategic Functions Section */
    .kd-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .kd-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .kd-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .kd-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .kd-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--kd-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .kd-func-card:last-child {
        margin-bottom: 0;
    }

    .kd-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .kd-func-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: var(--kd-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .kd-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .kd-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .kd-func-list li {
        margin-bottom: 0.5rem;
    }

    /* Journey Section */
    .kd-journey-section {
        background-color: var(--kd-bg-light);
        padding: 5rem 0;
    }

    .kd-surveys-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.25rem;
        margin-top: 2rem;
    }

    @media (min-width: 640px) {
        .kd-surveys-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .kd-survey-item {
        background: #FFFFFF;
        border: 1px solid var(--kd-border);
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .kd-survey-icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: rgba(255, 90, 31, 0.12);
        color: var(--kd-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }

    .kd-survey-text {
        font-size: 0.9375rem;
        font-weight: 600;
        color: var(--kd-text-dark);
        line-height: 1.5;
    }
</style>

<!-- Hero Section -->
<section class="kd-hero">
    <div class="kd-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Bureau Background">
    </div>
    <div class="kd-hero-overlay"></div>

    <div class="kd-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="kd-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="kd-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span>Governance</span>
                <span class="kd-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Bureau of Statistics</span>
            </div>
        </nav>

        <h1 class="kd-title">Kaduna State Bureau of Statistics</h1>
        <p class="kd-subtitle">The apex statistical agency and custodian of official state data, responsible for overseeing the State Statistical System and Master Plan.</p>
    </div>
</section>

<!-- About Section -->
<section class="kd-main-section">
    <div class="kd-container">
        <div class="kd-about-grid">
            
            <div>
                <span class="kd-section-tag">APEX STATISTICAL AGENCY</span>
                <h2 class="kd-section-heading">About the Bureau</h2>
                <p class="kd-about-text">
                    The Kaduna State Bureau of Statistics (KDBS) is the statistical authority responsible for generating, analyzing, and publishing all official statistical information in Kaduna State. It serves as the custodian of the State Statistical Master Plan and coordinates data activities across all government MDAs.
                </p>

                <a href="https://kdbs.ng/" target="_blank" rel="noopener noreferrer" class="kd-website-btn">
                    <span>Visit Official Website (kdbs.ng)</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>

                <div class="kd-vm-grid">
                    <div class="kd-vm-card">
                        <div class="kd-vm-header">
                            <div class="kd-vm-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </div>
                            <h3 class="kd-vm-title">Vision</h3>
                        </div>
                        <p class="kd-vm-desc">To be a leading, reliable source of all statistical requirements of Kaduna State and beyond.</p>
                    </div>

                    <div class="kd-vm-card">
                        <div class="kd-vm-header">
                            <div class="kd-vm-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <h3 class="kd-vm-title">Mission</h3>
                        </div>
                        <p class="kd-vm-desc">To strengthen the State Statistical System by generating quality, objective, and timely statistics for decision makers and planners.</p>
                    </div>
                </div>
            </div>

            <div class="kd-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/business-2904773_1280-1024x678.jpg') }}" alt="KDBS Data Analytics">
            </div>

        </div>
    </div>
</section>

<!-- Strategic Functions Section -->
<section class="kd-navy-section">
    <div class="kd-container">
        <div class="kd-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--kd-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">CORE MANDATE</span>
                <h2 class="kd-navy-title">KDBS Strategic Functions</h2>
                <div class="kd-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="KDBS Boardroom">
                </div>
            </div>

            <div>
                <!-- Block 1 -->
                <div class="kd-func-card">
                    <div class="kd-func-head">
                        <div class="kd-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                        <h3 class="kd-func-title">Strategic Responsibilities</h3>
                    </div>
                    <ul class="kd-func-list">
                        <li>Development and management of official State Statistics.</li>
                        <li>Collecting, compiling, interpreting, analyzing, and publishing statistical data.</li>
                        <li>Developing and maintaining a comprehensive socio-economic State Data Bank.</li>
                        <li>Promoting statistical standards and methodologies across all government bodies.</li>
                        <li>Advising the State and Local Governments on statistical policy matters.</li>
                    </ul>
                </div>

                <!-- Block 2 -->
                <div class="kd-func-card">
                    <div class="kd-func-head">
                        <div class="kd-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        </div>
                        <h3 class="kd-func-title">Research & Methodology Department</h3>
                    </div>
                    <ul class="kd-func-list">
                        <li>Data management, processing, methodology design, analysis, and quality assurance.</li>
                    </ul>
                </div>

                <!-- Block 3 -->
                <div class="kd-func-card">
                    <div class="kd-func-head">
                        <div class="kd-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="kd-func-title">Census & Survey Department</h3>
                    </div>
                    <ul class="kd-func-list">
                        <li>Managing field activities, survey frames, establishment updates, and market price collection.</li>
                    </ul>
                </div>

                <!-- Block 4 -->
                <div class="kd-func-card">
                    <div class="kd-func-head">
                        <div class="kd-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        </div>
                        <h3 class="kd-func-title">Social & Economic Statistics Department</h3>
                    </div>
                    <ul class="kd-func-list">
                        <li>Administrative statistics, social indicators (schools, health, transport), and economic metrics (GDP, CPI).</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Journey So Far -->
<section class="kd-journey-section">
    <div class="kd-container">
        <div class="kd-about-grid" style="margin-bottom: 0;">
            <div>
                <span class="kd-section-tag">KEY MILESTONES</span>
                <h2 class="kd-section-heading">Journey So Far</h2>
                <p class="kd-about-text">KDBS has successfully executed major statistical surveys and census operations providing critical empirical evidence for Kaduna State.</p>

                <div class="kd-surveys-grid">
                    <div class="kd-survey-item">
                        <div class="kd-survey-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div class="kd-survey-text">Annual School Census (2015/16, 2016/17, 2018/19)</div>
                    </div>

                    <div class="kd-survey-item">
                        <div class="kd-survey-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div class="kd-survey-text">Agricultural Structure Survey (KASS)</div>
                    </div>

                    <div class="kd-survey-item">
                        <div class="kd-survey-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div class="kd-survey-text">General Household Surveys</div>
                    </div>

                    <div class="kd-survey-item">
                        <div class="kd-survey-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div class="kd-survey-text">State Gross Domestic Product (KDGDP) Survey</div>
                    </div>
                </div>
            </div>

            <div class="kd-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/kd8.jpg') }}" alt="KDBS Surveys and Field Activity">
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
