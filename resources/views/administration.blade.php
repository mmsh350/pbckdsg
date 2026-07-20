@extends('layouts.frontend')

@section('title', 'Administration | Planning & Budget Commission')

@section('content')
<!-- Page Hero -->
        <section class="page-hero"
            style="background-image: linear-gradient(to right, rgba(4, 31, 86, 0.98), rgba(4, 31, 86, 0.6)), url('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg'); background-size: cover; background-position: center; padding: 10rem 0 8rem; color: white;">
            <div class="container">
                <div class="breadcrumbs"
                    style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.75rem; font-weight: 700; margin-bottom: 2rem; color: white; text-transform: uppercase; letter-spacing: 0.05em;">
                    <a href="index.html" style="color: white; text-decoration: none;">HOME</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="4" width="14" height="14"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                    <a href="#" style="color: white; text-decoration: none;">GOVERNANCE</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="4" width="14" height="14"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                    <span style="color: white;">DEPARTMENTS</span>
                </div>
                <h1
                    style="font-size: 2.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    Administration and Human<br>Resources Department</h1>
            </div>
        </section>

        <!-- About Department -->
        <section class="section about-bureau" style="padding: 6rem 0;">
            <div class="container">
                <div class="about-bureau-grid"
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div class="about-bureau-content">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            About the Department</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">
                            The Department exists as one of the 5 Departments of the Commission. The Department is basically responsible for matters related to general administration, financial and human resources management. It provides support to all Departments and Units of the Commission in the discharge of their respective duties. The Department has the responsibility of overseeing the effective and efficient utilization of the Human, Physical and Financial Resources of the Commission. The Department is comprised of two divisions viz: Human Resource and General Administration with the Accounts as a Unit.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/GLc9qKqbgAAryYF-768x512.jpeg') }}"
                            alt="Administration and Human Resources Team" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Functions Section -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <!-- Left Column -->
                    <div class="strategic-left">
                        <h2 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 1.5rem; color: white; letter-spacing: -0.02em;">
                            Core<br>Functions
                        </h2>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    
                    <!-- Right Column -->
                    <div class="strategic-right">
                        <!-- FUNCTIONS -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1.25rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4; text-transform: uppercase;">FUNCTIONS</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.6; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Advise and support the Management on General Administration.</li>
                                <li style="margin-bottom: 0.4rem;">Responsible for Recruitment/Appointment, Promotion, Discipline, Training and Transfer of Personnel.</li>
                                <li style="margin-bottom: 0.4rem;">Overseeing the Commission's finances and advising the Management on prudent financial management.</li>
                                <li style="margin-bottom: 0.4rem;">Handle Employee Performance Management;</li>
                                <li style="margin-bottom: 0.4rem;">Registry Management.</li>
                                <li style="margin-bottom: 0.4rem;">Manage Inventory and safe keeping of Assets including Stores;</li>
                                <li style="margin-bottom: 0.4rem;">Provision of Office Accommodation for Staff.</li>
                                <li style="margin-bottom: 0.4rem;">Ensure a clean and secure Office environment (Office maintenance);</li>
                                <li style="margin-bottom: 0.4rem;">Ensure availability of working materials (Stationary) and Equipment i.e. Photocopying Services, Computers and Computer consumables.</li>
                                <li style="margin-bottom: 0.4rem;">Transport Management.</li>
                                <li style="margin-bottom: 0.4rem;">Staff welfare.</li>
                                <li style="margin-bottom: 0.4rem;">Manpower development and Training.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="section partners-section" id="partners">
            <div class="container fade-up">
                <div class="partners-header">
                    <span class="partners-subtitle">DEVELOPMENT</span>
                    <h2 class="partners-title">Partners</h2>
                </div>
                <div class="partners-marquee-wrapper">
                    <div class="partners-marquee-content">
                        <!-- Set 1 -->
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF">
                        </div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}"
                                alt="Bill & Melinda Gates Foundation"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}"
                                alt="The World Bank"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                        <!-- Set 2 for seamless scrolling -->
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF">
                        </div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}"
                                alt="Bill & Melinda Gates Foundation"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}"
                                alt="The World Bank"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection
