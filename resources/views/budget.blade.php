@extends('layouts.frontend')

@section('title', 'Budget Department | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --bg-primary: #041F56;
        --bg-primary-light: #0B3485;
        --bg-accent: #FF5A1F;
        --bg-accent-hover: #E04810;
        --bg-text-dark: #0F172A;
        --bg-text-muted: #64748B;
        --bg-bg-light: #F8FAFC;
        --bg-border: #E2E8F0;
        --bg-radius: 16px;
    }

    /* Hero Section */
    .bg-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .bg-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .bg-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .bg-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 70% 30%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .bg-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .bg-breadcrumb {
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

    .bg-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .bg-breadcrumb a:hover {
        color: var(--bg-accent);
    }

    .bg-breadcrumb-sep {
        color: var(--bg-accent);
    }

    .bg-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .bg-title { font-size: 3.5rem; }
    }

    .bg-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 700px;
        line-height: 1.6;
        margin: 0;
    }

    /* Main About Section */
    .bg-main-section {
        background-color: #FFFFFF;
        padding: 5rem 0;
    }

    .bg-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .bg-about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .bg-about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .bg-section-tag {
        font-size: 0.8125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--bg-accent);
        margin-bottom: 0.5rem;
        display: block;
    }

    .bg-section-heading {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--bg-text-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .bg-about-text {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--bg-text-muted);
        margin-bottom: 1.5rem;
    }

    .bg-image-wrap {
        border-radius: var(--bg-radius);
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
        border: 1px solid var(--bg-border);
    }

    .bg-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Core Functions Navy Section */
    .bg-navy-section {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        padding: 5rem 0;
    }

    .bg-navy-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }

    @media (min-width: 992px) {
        .bg-navy-grid {
            grid-template-columns: 340px 1fr;
        }
    }

    .bg-navy-title {
        font-size: 2.75rem;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.15;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .bg-func-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--bg-radius);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .bg-func-card:last-child {
        margin-bottom: 0;
    }

    .bg-func-head {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .bg-func-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--bg-accent);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .bg-func-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0;
    }

    .bg-func-list {
        margin: 0;
        padding-left: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        line-height: 1.7;
    }

    .bg-func-list li {
        margin-bottom: 0.5rem;
    }

    /* Roles & Responsibilities Section */
    .bg-roles-section {
        background-color: var(--bg-bg-light);
        padding: 5rem 0;
    }

    .bg-roles-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    @media (min-width: 640px) {
        .bg-roles-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .bg-roles-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .bg-role-card {
        background: #FFFFFF;
        border: 1px solid var(--bg-border);
        border-radius: 14px;
        padding: 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .bg-role-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px -5px rgba(15, 23, 42, 0.06);
    }

    .bg-role-icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255, 90, 31, 0.12);
        color: var(--bg-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }

    .bg-role-text {
        font-size: 0.9375rem;
        font-weight: 600;
        color: var(--bg-text-dark);
        line-height: 1.5;
    }
</style>

<!-- Hero Section -->
<section class="bg-hero">
    <div class="bg-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Budget Background">
    </div>
    <div class="bg-hero-overlay"></div>

    <div class="bg-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="bg-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="bg-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <a href="{{ url('departments') }}">Departments</a>
                <span class="bg-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Budget Department</span>
            </div>
        </nav>

        <h1 class="bg-title">Budget Department</h1>
        <p class="bg-subtitle">Spearheading fiscal governance, annual state budget formulation, Medium-Term Expenditure Frameworks (MTEF), and strategic revenue-expenditure modeling.</p>
    </div>
</section>

<!-- About Section -->
<section class="bg-main-section">
    <div class="bg-container">
        <div class="bg-about-grid">
            <div>
                <span class="bg-section-tag">FISCAL GOVERNANCE</span>
                <h2 class="bg-section-heading">About the Department</h2>
                <p class="bg-about-text">
                    The Budget Department is the core engine for fiscal management in Kaduna State. Working closely with all Ministries, Departments, and Agencies (MDAs), the department manages the end-to-end preparation, approval, and execution of annual appropriation bills.
                </p>
                <p class="bg-about-text">
                    By issuing call circulars, establishing revenue forecasts, conducting technical estimates reviews, and enforcing compliance with public financial management regulations, the department ensures every naira is aligned with Kaduna State's development priorities.
                </p>
            </div>

            <div class="bg-image-wrap">
                <img src="{{ asset('assets/images/backgrounds/GWLR5FVXkAAyOpM-768x576.jpeg') }}" alt="Budget Strategy Session">
            </div>
        </div>
    </div>
</section>

<!-- Core Functions Navy Section -->
<section class="bg-navy-section">
    <div class="bg-container">
        <div class="bg-navy-grid">
            
            <div>
                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--bg-accent); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.5rem;">CORE MANDATE</span>
                <h2 class="bg-navy-title">Statutory Functions & Structure</h2>
                <div class="bg-image-wrap" style="margin-top: 2rem;">
                    <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom Overview">
                </div>
            </div>

            <div>
                <!-- Block 1 -->
                <div class="bg-func-card">
                    <div class="bg-func-head">
                        <div class="bg-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </div>
                        <h3 class="bg-func-title">Budget Preparation & Management</h3>
                    </div>
                    <ul class="bg-func-list">
                        <li>Issuing Annual Budget Call Circulars, guidelines, and revenue ceiling apportionments for all MDAs.</li>
                        <li>Facilitating comprehensive budget bilateral reviews and matching budgets to strategic plans.</li>
                        <li>Serving as the official Secretariat to the State Estimates Committee.</li>
                    </ul>
                </div>

                <!-- Block 2 -->
                <div class="bg-func-card">
                    <div class="bg-func-head">
                        <div class="bg-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <h3 class="bg-func-title">Constitutional Framework (Section 121)</h3>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.85); font-size: 0.9375rem; line-height: 1.7; margin: 0;">
                        Pursuant to Section 121(1) of the 1999 Constitution (as amended), the Governor shall cause to be prepared and laid before the House of Assembly estimates of revenues and expenditures for the State for each financial year.
                    </p>
                </div>

                <!-- Block 3 -->
                <div class="bg-func-card">
                    <div class="bg-func-head">
                        <div class="bg-func-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <h3 class="bg-func-title">Structure of State Budget</h3>
                    </div>
                    <ul class="bg-func-list">
                        <li><strong>Revenues:</strong> Internally Generated Revenue (IGR), Statutory Allocation, VAT, Loans, Grants.</li>
                        <li><strong>Recurrent Expenditure:</strong> Personnel Costs & Overhead Costs.</li>
                        <li><strong>Capital Expenditure:</strong> Infrastructure Projects, Sectoral Programs & Capital Equipment.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Roles & Responsibilities Section -->
<section class="bg-roles-section">
    <div class="bg-container">
        <span class="bg-section-tag">OPERATIONAL EXCELLENCE</span>
        <h2 class="bg-section-heading">Roles & Operational Duties</h2>

        <div class="bg-roles-grid">
            <div class="bg-role-card">
                <div class="bg-role-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="bg-role-text">Drafting Medium Term Expenditure Framework (MTEF)</div>
            </div>

            <div class="bg-role-card">
                <div class="bg-role-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="bg-role-text">Issuance of releases for Governor-approved requests</div>
            </div>

            <div class="bg-role-card">
                <div class="bg-role-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="bg-role-text">Production of Budget Expenditure Profile & Reports</div>
            </div>

            <div class="bg-role-card">
                <div class="bg-role-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="bg-role-text">Compilations of Contractual Commitments of MDAs</div>
            </div>

            <div class="bg-role-card">
                <div class="bg-role-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="bg-role-text">Public Expenditure & Financial Accountability (PEFA) Report</div>
            </div>

            <div class="bg-role-card">
                <div class="bg-role-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                <div class="bg-role-text">Analysis of Revenue Performance and Debt Status</div>
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
