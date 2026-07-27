@extends('layouts.frontend')

@section('title', 'Home | Kaduna State Planning & Budget Commission')

@section('content')

<style>
    :root {
        --idx-primary: #041F56;
        --idx-primary-dark: #021235;
        --idx-primary-light: #0B3485;
        --idx-accent: #FF5A1F;
        --idx-accent-hover: #E04810;
        --idx-text-dark: #0F172A;
        --idx-text-muted: #64748B;
        --idx-bg-light: #F8FAFC;
        --idx-border: #E2E8F0;
        --idx-radius: 16px;
    }

    /* Hero Section with Active Working Slider */
    .hero-main {
        position: relative;
        min-height: 88vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        color: #FFFFFF;
        padding: 9rem 0 6rem;
        background-color: #021235;
    }

    .hero-slider {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .hero-slider .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        z-index: 0;
    }

    .hero-slider .slide.active {
        opacity: 1;
        z-index: 1;
    }

    .hero-slider img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .hero-overlay-dark {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(2, 18, 53, 0.88) 0%, rgba(4, 31, 86, 0.82) 50%, rgba(11, 52, 133, 0.75) 100%);
        z-index: 2;
    }

    .hero-container-main {
        position: relative;
        z-index: 3;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        width: 100%;
    }

    .hero-badge-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0.45rem 1.25rem;
        border-radius: 50px;
        font-size: 0.8125rem;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        color: #FFFFFF;
        margin-bottom: 1.5rem;
    }

    .hero-badge-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: var(--idx-accent);
        box-shadow: 0 0 10px var(--idx-accent);
    }

    .hero-title-main {
        font-size: 2.75rem;
        font-weight: 800;
        line-height: 1.15;
        color: #FFFFFF;
        letter-spacing: -0.025em;
        margin-bottom: 1.25rem;
        max-width: 820px;
    }

    @media (min-width: 768px) {
        .hero-title-main { font-size: 3.75rem; }
    }

    .hero-subtitle-main {
        font-size: 1.15rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin-bottom: 2.5rem;
    }

    .hero-portals-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.25rem;
        max-width: 1050px;
    }

    .portal-card {
        background: #FFFFFF;
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 14px;
        padding: 1.1rem 1.35rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        color: #0F172A;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    .portal-card:hover {
        background: #FFFFFF;
        border-color: var(--idx-accent);
        transform: translateY(-4px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.35);
    }

    .portal-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: #FFFFFF !important;
    }

    .portal-info h4 {
        font-size: 0.95rem;
        font-weight: 800;
        color: #041F56;
        margin: 0 0 0.2rem 0;
        line-height: 1.25;
    }

    .portal-info span {
        font-size: 0.8125rem;
        font-weight: 600;
        color: #64748B;
        line-height: 1.3;
        display: block;
    }

    /* Stats Ribbon */
    .stats-ribbon {
        background: #FFFFFF;
        border-bottom: 1px solid var(--idx-border);
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
        position: relative;
        z-index: 10;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        padding: 2.25rem 1.5rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    @media (min-width: 992px) {
        .stats-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        padding: 0.5rem 1rem;
        border-right: 1px solid var(--idx-border);
    }

    .stat-item:last-child {
        border-right: none;
    }

    .stat-num {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--idx-primary);
        line-height: 1;
        letter-spacing: -0.03em;
    }

    .stat-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--idx-text-muted);
        line-height: 1.3;
    }

    /* Overview Section */
    .overview-section {
        padding: 6rem 0;
        background: #FFFFFF;
    }

    .overview-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 4rem;
        align-items: center;
    }

    @media (min-width: 992px) {
        .overview-grid {
            grid-template-columns: 1fr 1.1fr;
        }
    }

    .section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--idx-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--idx-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .overview-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--idx-text-muted);
        margin-bottom: 1.5rem;
    }

    .vmc-grid-v2 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .vmc-card-v2 {
        background: var(--idx-bg-light);
        border: 1px solid var(--idx-border);
        border-radius: var(--idx-radius);
        padding: 1.75rem;
        transition: all 0.3s ease;
    }

    .vmc-card-v2:hover {
        background: #FFFFFF;
        border-color: var(--idx-accent);
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
    }

    .vmc-card-v2.dark {
        background: linear-gradient(135deg, #021235 0%, #041F56 100%);
        color: #FFFFFF;
        border: none;
    }

    .vmc-card-v2.dark .vmc-title-v2 { color: #FFFFFF; }
    .vmc-card-v2.dark .vmc-desc-v2 { color: rgba(255, 255, 255, 0.85); }

    .vmc-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
    }

    .vmc-icon-v2 {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        background: rgba(255, 90, 31, 0.12);
        color: var(--idx-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .vmc-card-v2.dark .vmc-icon-v2 {
        background: var(--idx-accent);
        color: #FFFFFF;
    }

    .vmc-title-v2 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--idx-text-dark);
        margin: 0;
    }

    .vmc-desc-v2 {
        font-size: 0.9375rem;
        line-height: 1.65;
        color: var(--idx-text-muted);
        margin: 0;
    }

    /* Leadership Section */
    .leadership-section {
        background: var(--idx-bg-light);
        padding: 6rem 0;
    }

    .leadership-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2.5rem;
        margin-top: 3rem;
    }

    @media (min-width: 992px) {
        .leadership-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .leader-card {
        background: #FFFFFF;
        border: 1px solid var(--idx-border);
        border-radius: var(--idx-radius);
        overflow: hidden;
        box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.05);
        display: flex;
        flex-direction: column;
    }

    .leader-img-box {
        height: 320px;
        position: relative;
        overflow: hidden;
        background: #021235;
    }

    .leader-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
    }

    .leader-body {
        padding: 2.25rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .leader-role {
        font-size: 0.8125rem;
        font-weight: 700;
        color: var(--idx-accent);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 0.35rem;
    }

    .leader-name {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--idx-text-dark);
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .leader-bio {
        font-size: 0.95rem;
        line-height: 1.7;
        color: var(--idx-text-muted);
        margin-bottom: 1.5rem;
    }

    .pills-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: auto;
    }

    .prior-pill {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--idx-primary);
        background: rgba(4, 31, 86, 0.06);
        padding: 0.35rem 0.85rem;
        border-radius: 50px;
        border: 1px solid rgba(4, 31, 86, 0.12);
    }

    /* Services Matrix Section */
    .services-matrix-section {
        padding: 6rem 0;
        background: #FFFFFF;
    }

    .services-grid-v2 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 3rem;
    }

    @media (min-width: 640px) {
        .services-grid-v2 { grid-template-columns: repeat(2, 1fr); }
    }

    @media (min-width: 1024px) {
        .services-grid-v2 { grid-template-columns: repeat(4, 1fr); }
    }

    .matrix-card {
        background: var(--idx-bg-light);
        border: 1px solid var(--idx-border);
        border-radius: 14px;
        padding: 1.75rem;
        transition: all 0.3s ease;
    }

    .matrix-card:hover {
        background: #FFFFFF;
        border-color: var(--idx-accent);
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
    }

    .matrix-icon-box {
        width: 46px;
        height: 46px;
        border-radius: 12px;
        background: rgba(4, 31, 86, 0.08);
        color: var(--idx-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.25rem;
        transition: all 0.3s ease;
    }

    .matrix-card:hover .matrix-icon-box {
        background: var(--idx-accent);
        color: #FFFFFF;
    }

    .matrix-title {
        font-size: 1.0625rem;
        font-weight: 700;
        color: var(--idx-text-dark);
        margin-bottom: 0.5rem;
        line-height: 1.35;
    }

    .matrix-desc {
        font-size: 0.875rem;
        color: var(--idx-text-muted);
        line-height: 1.6;
        margin: 0;
    }

    /* Repository CTA Section */
    .repo-banner-section {
        padding: 4rem 0 6rem 0;
        background: #FFFFFF;
    }

    .repo-banner-card {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        border-radius: var(--idx-radius);
        color: #FFFFFF;
        padding: 3.5rem 2.5rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 2.5rem;
        align-items: center;
        box-shadow: 0 20px 40px -15px rgba(2, 18, 53, 0.3);
    }

    @media (min-width: 992px) {
        .repo-banner-card {
            grid-template-columns: 1fr 320px;
            padding: 4rem 4rem;
        }
    }

    .repo-banner-title {
        font-size: 2.25rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.2;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .repo-banner-desc {
        font-size: 1.0625rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.7;
        margin-bottom: 1.75rem;
    }

    .repo-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
    }

    .repo-tag {
        font-size: 0.8125rem;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0.35rem 0.85rem;
        border-radius: 50px;
        color: #FFFFFF;
    }

    .btn-orange-lg {
        background: var(--idx-accent);
        color: #FFFFFF;
        font-size: 1rem;
        font-weight: 700;
        padding: 1rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(255, 90, 31, 0.3);
    }

    .btn-orange-lg:hover {
        background: var(--idx-accent-hover);
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(255, 90, 31, 0.4);
    }

    /* News Grid */
    .news-section-v2 {
        background: var(--idx-bg-light);
        padding: 6rem 0;
    }

    .news-grid-v2 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        margin-top: 3rem;
    }

    @media (min-width: 768px) {
        .news-grid-v2 { grid-template-columns: repeat(2, 1fr); }
    }

    @media (min-width: 1024px) {
        .news-grid-v2 { grid-template-columns: repeat(3, 1fr); }
    }

    .news-card-v2 {
        background: #FFFFFF;
        border: 1px solid var(--idx-border);
        border-radius: 14px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(15, 23, 42, 0.02);
    }

    .news-card-v2:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 35px rgba(15, 23, 42, 0.08);
        border-color: #CBD5E1;
    }

    .news-thumb-box {
        height: 210px;
        overflow: hidden;
        position: relative;
        background: #E2E8F0;
    }

    .news-thumb-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-card-v2:hover .news-thumb-box img {
        transform: scale(1.05);
    }

    .news-body-v2 {
        padding: 1.75rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .news-date-tag {
        font-size: 0.78125rem;
        font-weight: 700;
        color: var(--idx-accent);
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    .news-title-v2 {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--idx-text-dark);
        line-height: 1.4;
        margin-bottom: 0.75rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-excerpt-v2 {
        font-size: 0.9375rem;
        line-height: 1.6;
        color: var(--idx-text-muted);
        margin-bottom: 1.5rem;
    }

    .news-link-v2 {
        margin-top: auto;
        font-size: 0.875rem;
        font-weight: 700;
        color: var(--idx-primary);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        transition: gap 0.2s ease;
    }

    .news-card-v2:hover .news-link-v2 {
        color: var(--idx-accent);
        gap: 0.65rem;
    }
</style>

<!-- Hero Section with Active Working Slider -->
<section class="hero-main" id="home">
    <div class="hero-slider" id="heroSlider">
        @if($sliders->isNotEmpty())
            @foreach($sliders as $index => $slider)
                <div class="slide {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ Storage::url($slider->image) }}" alt="{{ $slider->title }}" loading="{{ $index === 0 ? 'eager' : 'lazy' }}">
                </div>
            @endforeach
        @else
            <div class="slide active">
                <img src="{{ asset('assets/images/hero/hero-budget.jpg') }}" alt="Kaduna State Budget" loading="eager">
            </div>
        @endif
    </div>
    
    <div class="hero-overlay-dark"></div>

    <div class="hero-container-main">
        <div class="hero-badge-pill">
            <span class="hero-badge-dot"></span>
            <span>KADUNA STATE GOVERNMENT</span>
        </div>

        <h1 class="hero-title-main">A World-Class & Dynamic Planning & Budget Commission</h1>
        <p class="hero-subtitle-main">Formulating policy frameworks, directing public expenditure, and managing strategic investments to elevate the living standards of Kaduna State residents.</p>

        <!-- Portals Grid -->
        <div class="hero-portals-grid">
            <a href="https://play.google.com/store/apps/details?id=kaduna.citizen.feedback" target="_blank" rel="noopener noreferrer" class="portal-card">
                <div class="portal-icon" style="background: #FF5A1F;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                </div>
                <div class="portal-info">
                    <h4>CitiFeed App</h4>
                    <span>Citizen Feedback Portal</span>
                </div>
            </a>

            <a href="https://www.opengovpartnership.org/members/kaduna-state-nigeria/" target="_blank" rel="noopener noreferrer" class="portal-card">
                <div class="portal-icon" style="background: #2563EB;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <div class="portal-info">
                    <h4>OpenGov (OGP)</h4>
                    <span>Fiscal Transparency</span>
                </div>
            </a>

            <a href="https://pbc.kdsg.gov.ng/download/2026-revenue-budget-template/" target="_blank" rel="noopener noreferrer" class="portal-card">
                <div class="portal-icon" style="background: #10B981;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                </div>
                <div class="portal-info">
                    <h4>Budget Template</h4>
                    <span>2027 Budget Projections</span>
                </div>
            </a>

            <a href="https://nscfn.nationalplanning.gov.ng/fn-dashboard" target="_blank" rel="noopener noreferrer" class="portal-card">
                <div class="portal-icon" style="background: #8B5CF6;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                </div>
                <div class="portal-info">
                    <h4>Nutrition Dashboard</h4>
                    <span>National NSCFN Metrics</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="stats-ribbon">
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-num">5</div>
            <div class="stat-label">Core Commission Directorates</div>
        </div>
        <div class="stat-item">
            <div class="stat-num">3</div>
            <div class="stat-label">Specialized Operating Units</div>
        </div>
        <div class="stat-item">
            <div class="stat-num">2</div>
            <div class="stat-label">Apex State Parastatals</div>
        </div>
        <div class="stat-item">
            <div class="stat-num">23</div>
            <div class="stat-label">LGAs Covered Statewide</div>
        </div>
    </div>
</div>

<!-- Overview Section -->
<section class="overview-section" id="about">
    <div class="container">
        <div class="overview-grid">
            <div>
                <span class="section-tag">INSTITUTIONAL FOUNDATION</span>
                <h2 class="section-heading">Welcome to the Commission</h2>
                <p class="overview-text">
                    Established under Law No. 2017, the Kaduna State Planning and Budget Commission serves as the central machinery for economic planning, annual budget formulation, project monitoring, and social investment coordination.
                </p>
                <p class="overview-text">
                    From its origins in 1979 to its modern statutory role, the Commission manages public finances and donor partnerships across all 23 Local Government Areas in Kaduna State.
                </p>
                
                <div style="margin-top: 2rem;">
                    <a href="{{ url('departments') }}" class="btn-orange-lg">
                        <span>Explore Departments & Units</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
            </div>

            <!-- Vision, Mission, Values -->
            <div class="vmc-grid-v2">
                <div class="vmc-card-v2">
                    <div class="vmc-head">
                        <div class="vmc-icon-v2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </div>
                        <h3 class="vmc-title-v2">Vision</h3>
                    </div>
                    <p class="vmc-desc-v2">A world-class and dynamic Planning and Budget Agency creating a vibrant economy for continuous improvement of the living standards of the people of Kaduna State.</p>
                </div>

                <div class="vmc-card-v2 dark">
                    <div class="vmc-head">
                        <div class="vmc-icon-v2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h3 class="vmc-title-v2">Mission</h3>
                    </div>
                    <p class="vmc-desc-v2">To serve as an effective machinery for the formulation, coordination, monitoring and evaluation of Government economic policies, plans and budgets using a competent workforce.</p>
                </div>

                <div class="vmc-card-v2">
                    <div class="vmc-head">
                        <div class="vmc-icon-v2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <h3 class="vmc-title-v2">Core Values</h3>
                    </div>
                    <p class="vmc-desc-v2">Dedication, Integrity, Teamwork, Fiscal Transparency, Employee Welfare, and Continuous Innovation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Executive Leadership Section -->
<section class="leadership-section">
    <div class="container">
        <span class="section-tag">EXECUTIVE LEADERSHIP</span>
        <h2 class="section-heading">Steering Kaduna's Socio-Economic Agenda</h2>

        <div class="leadership-grid">
            <!-- Governor -->
            <div class="leader-card">
                <div class="leader-img-box">
                    <img src="{{ asset('assets/images/leadership/governor.jpg') }}" alt="Sen. Uba Sani - Executive Governor of Kaduna State">
                </div>
                <div class="leader-body">
                    <span class="leader-role">Executive Governor of Kaduna State</span>
                    <h3 class="leader-name">Sen. Uba Sani</h3>
                    <p class="leader-bio">Leading the administration with a strategic mandate focused on rural transformation, human capital development, institutional reform, and inclusive economic growth across Kaduna State.</p>
                    
                    <div class="pills-grid">
                        <span class="prior-pill">Safety & Security</span>
                        <span class="prior-pill">Infrastructure</span>
                        <span class="prior-pill">Human Capital</span>
                        <span class="prior-pill">Agriculture</span>
                        <span class="prior-pill">Trade & Investment</span>
                        <span class="prior-pill">OGP Transparency</span>
                    </div>
                </div>
            </div>

            <!-- Commissioner -->
            <div class="leader-card">
                <div class="leader-img-box">
                    <img src="{{ asset('assets/images/leadership/commissioner.png') }}" alt="Hon. Mukhtar Ahmed Monrovia - Honorable Commissioner">
                </div>
                <div class="leader-body">
                    <span class="leader-role">Honourable Commissioner</span>
                    <h3 class="leader-name">Hon. Mukhtar Ahmed Monrovia</h3>
                    <p class="leader-bio">"Our dedicated team works tirelessly to ensure optimal resource allocation, fiscal discipline, and empirical M&E to create a lasting positive impact across all sectors of our economy."</p>
                    
                    <div class="pills-grid" style="margin-top: auto;">
                        <span class="prior-pill" style="background: rgba(255, 90, 31, 0.1); color: var(--idx-accent); border-color: rgba(255, 90, 31, 0.2);">Planning & Budget Commission</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Matrix -->
<section class="services-matrix-section">
    <div class="container">
        <span class="section-tag">PORTFOLIO MANDATES</span>
        <h2 class="section-heading">Core Commission Services</h2>

        <div class="services-grid-v2">
            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <h3 class="matrix-title">Economic Development Plans</h3>
                <p class="matrix-desc">Facilitate the formulation of State Development Plans (SDP) and Local Government Sector Strategies.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83M22 12A10 10 0 0 0 12 2v10z"/></svg>
                </div>
                <h3 class="matrix-title">Annual Budget Management</h3>
                <p class="matrix-desc">Prepare annual state appropriation bills, MTEF frameworks, and monitor budget implementation.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>
                </div>
                <h3 class="matrix-title">Development Aid Gateway</h3>
                <p class="matrix-desc">Coordinate bilateral/multilateral partners, MOUs, grants, and state counterpart funding.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </div>
                <h3 class="matrix-title">Eyes & Ears Project M&E</h3>
                <p class="matrix-desc">Conduct real-time geospatial project tracking and citizen feedback via the CitiFeed app.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 8h12l4 5-10 10L2 13z"/><path d="M12 23l4-10"/><path d="M12 23L8 13"/><path d="M2 13h20"/></svg>
                </div>
                <h3 class="matrix-title">SDGs Localization</h3>
                <p class="matrix-desc">Drive the 17 UN Sustainable Development Goals across sector MDAs and local communities.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                </div>
                <h3 class="matrix-title">Bureau of Statistics (KDBS)</h3>
                <p class="matrix-desc">Generate official state demographic, Gross Domestic Product (GDP), and household surveys.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><circle cx="12" cy="14" r="2"/></svg>
                </div>
                <h3 class="matrix-title">Social Investment (SOCU)</h3>
                <p class="matrix-desc">Manage the State Single Register (SSR) of Poor & Vulnerable Households for social transfers.</p>
            </div>

            <div class="matrix-card">
                <div class="matrix-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2" ry="2"/><circle cx="9" cy="10" r="3"/></svg>
                </div>
                <h3 class="matrix-title">Resident IDs (KADSRRA)</h3>
                <p class="matrix-desc">Register all residents in Kaduna State to issue unique identification numbers for public services.</p>
            </div>
        </div>
    </div>
</section>

<!-- Repository CTA Banner -->
<section class="repo-banner-section">
    <div class="container">
        <div class="repo-banner-card">
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--idx-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">DIGITAL LIBRARY</span>
                <h2 class="repo-banner-title">Official Planning & Fiscal Publications</h2>
                <p class="repo-banner-desc">Access downloadable budget statements, citizens' budgets, sector strategies (MTSS), state development blueprints, and statistical bulletins.</p>

                <div class="repo-tags">
                    <span class="repo-tag">Annual Appropriation Bills</span>
                    <span class="repo-tag">Citizens' Budget Breakdowns</span>
                    <span class="repo-tag">Statistical Bulletins</span>
                </div>
            </div>

            <div style="text-align: center;">
                <a href="{{ url('downloads') }}" class="btn-orange-lg" style="width: 100%;">
                    <span>Browse Downloads</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- News & Press Releases -->
<section class="news-section-v2">
    <div class="container">
        <span class="section-tag">MEDIA CENTER</span>
        <h2 class="section-heading">News & Press Releases</h2>

        <div class="news-grid-v2">
            @forelse($news as $article)
                <article class="news-card-v2">
                    <div class="news-thumb-box">
                        @if($article->featured_image)
                            <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}" loading="lazy">
                        @else
                            <div style="background: #E2E8F0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                <svg style="color: #94A3B8; width: 44px; height: 44px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20a2 2 0 012 2v1m-2 8H4"></path></svg>
                            </div>
                        @endif
                    </div>
                    <div class="news-body-v2">
                        <div class="news-date-tag">
                            {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('M d, Y') : $article->created_at->format('M d, Y') }}
                        </div>
                        <h3 class="news-title-v2">{{ $article->title }}</h3>
                        <p class="news-excerpt-v2">{{ Str::limit($article->excerpt ?? strip_tags($article->content), 105) }}</p>
                        
                        <a href="{{ route('news.show', $article->slug) }}" class="news-link-v2">
                            <span>Read Full Story</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </article>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 4rem 0;">
                    <h3 style="font-size: 1.25rem; color: #94A3B8;">No news articles published yet.</h3>
                </div>
            @endforelse
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('news.index') }}" class="btn-orange-lg">
                <span>View All News & Press Releases</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="section social-media-section" id="social-media" style="padding: 5rem 0; background: #FFFFFF;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span class="social-subtitle" style="font-size: 0.75rem; font-weight: 700; color: var(--idx-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.25rem;">FEEDS FROM THE</span>
            <h2 class="social-title" style="font-size: 2.25rem; font-weight: 800; color: var(--idx-primary); margin-bottom: 0.25rem; letter-spacing: -0.02em;">Social Media</h2>
            <p class="social-handle" style="font-size: 0.9375rem; font-weight: 600; color: var(--idx-text-muted);">Official Handle @KADPBC</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 900px; margin: 0 auto;">
            <!-- X / Twitter Card -->
            <div style="background: var(--idx-bg-light); border: 1px solid var(--idx-border); border-radius: 16px; padding: 2rem; display: flex; flex-direction: column; gap: 1.25rem; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <div style="width: 42px; height: 42px; border-radius: 50%; background: #000000; color: #FFFFFF; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                        <div>
                            <h4 style="margin: 0; font-size: 1rem; font-weight: 700; color: var(--idx-text-dark);">Kaduna State PBC</h4>
                            <span style="font-size: 0.8125rem; color: var(--idx-text-muted);">@KADPBC &bull; X (Twitter)</span>
                        </div>
                    </div>
                    <span style="font-size: 0.75rem; font-weight: 700; background: rgba(4, 31, 86, 0.08); color: var(--idx-primary); padding: 0.25rem 0.6rem; border-radius: 50px;">Official</span>
                </div>

                <p style="font-size: 0.9375rem; line-height: 1.6; color: var(--idx-text-dark); margin: 0;">
                    Follow our official handle for live updates on the Kaduna State Development Plan (SDP), annual budget consultations, M&E field inspections, and citizens engagement projects.
                </p>

                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--idx-border);">
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" style="font-size: 0.875rem; font-weight: 700; color: var(--idx-accent); text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <span>Follow @KADPBC on X</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
            </div>

            <!-- Facebook Card -->
            <div style="background: var(--idx-bg-light); border: 1px solid var(--idx-border); border-radius: 16px; padding: 2rem; display: flex; flex-direction: column; gap: 1.25rem; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <div style="width: 42px; height: 42px; border-radius: 50%; background: #1877F2; color: #FFFFFF; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </div>
                        <div>
                            <h4 style="margin: 0; font-size: 1rem; font-weight: 700; color: var(--idx-text-dark);">Planning & Budget Commission</h4>
                            <span style="font-size: 0.8125rem; color: var(--idx-text-muted);">Kaduna State &bull; Facebook</span>
                        </div>
                    </div>
                    <span style="font-size: 0.75rem; font-weight: 700; background: rgba(24, 119, 242, 0.1); color: #1877F2; padding: 0.25rem 0.6rem; border-radius: 50px;">Page</span>
                </div>

                <p style="font-size: 0.9375rem; line-height: 1.6; color: var(--idx-text-dark); margin: 0;">
                    Join our Facebook community to access photo stories of state infrastructure projects, public townhall announcements, and social investment program releases.
                </p>

                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--idx-border);">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" style="font-size: 0.875rem; font-weight: 700; color: #1877F2; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <span>Join Community on Facebook</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Development Partners Section -->
<section class="section partners-section" id="partners" style="padding: 6rem 0; background: var(--idx-bg-light);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span class="section-tag">DEVELOPMENT PARTNERS</span>
            <h2 class="section-heading" style="margin-bottom: 0;">Strategic Global Collaboration</h2>
        </div>
        <div class="partners-marquee-wrapper">
            <div class="partners-marquee-content">
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}" alt="Bill & Melinda Gates Foundation"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}" alt="The World Bank"></div>
                <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                <!-- Duplicate set for seamless infinite scrolling -->
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
