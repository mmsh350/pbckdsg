@extends('layouts.frontend')

@section('title', 'Devaid | Planning & Budget Commission')

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
                    Development Aid and<br>Coordination Department</h1>
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
                            Department of Development Aid Coordination is one of the departments under the Planning and Budget Commission. It is the entry and exit point of all development Partners in the State. The department coordinates Development Partners activities and ensures that signed Memorandum of Understanding are in line with Government Plans and priorities. The department is the link between Partners (International and Local) in terms of foreign and local support for even development. Support to State can either be Technical, Financial (Grants or Loans) or Supplies.
                        </p>

                        <h2
                            style="font-size: 2.2rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; margin-top: 1.5rem; letter-spacing: -0.02em;">
                            Mandate</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">
                            Coordinate, harmonize and align Foreign and Local assistance to Kaduna State.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/GZMpzJ9WMAAmoNU-768x432.jpeg') }}"
                            alt="Development Aid Coordination Team" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Functions and Duties -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <!-- Left Column -->
                    <div class="strategic-left">
                        <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.6;">
                            The department of Aid Coordination function with both Bilateral and Multilateral Partners and ensures that Partners programs key into State Government Plans and Priorities. Ensure that Partners are well Coordinated to avoid duplication of effort, reduce resources and time wastages and ensure even development across the State.
                        </p>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    
                    <!-- Right Column -->
                    <div class="strategic-right">
                        <!-- Core Functions -->
                        <div class="strategic-block" style="margin-bottom: 3rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1.25rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white; line-height: 1.4;">Core Functions</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.6; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Manage and oversee the State's responsibilities, relationships and Counter-part funding in relation to aid delivery and donor support programs.</li>
                                <li style="margin-bottom: 0.4rem;">Establish and maintain a comprehensive data bank on Development Partners and support programs in the State.</li>
                                <li style="margin-bottom: 0.4rem;">Ensure that Development Partner programs are properly coordinated, monitored and aligned with State Government Policies and priorities.</li>
                                <li style="margin-bottom: 0.4rem;">Promoting the State and attracting Donor Partners to support State development.</li>
                                <li style="margin-bottom: 0.4rem;">Providing economic analyses and advice State Government on efficacy of Donor Partner loans and grants as part of the Debt Management Committee under the Ministry of Finance.</li>
                                <li style="margin-bottom: 0.4rem;">Budgeting for and managing counterpart funding.</li>
                                <li style="margin-bottom: 0.4rem;">Serve as the entry point of all visitors on Study Tour to the State through the Commission.</li>
                                <li style="margin-bottom: 0.4rem;">Carry out any other function as may be assigned by the Commissioner or the Permanent Secretary.</li>
                            </ul>
                        </div>

                        <!-- Duties and Responsibilities -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1.25rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white; line-height: 1.4;">Duties and Responsibilities</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.6; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Identifying key areas of need for Development Partners Intervention, including target beneficiaries</li>
                                <li style="margin-bottom: 0.4rem;">Identifying possible sources of development loans/funds.</li>
                                <li style="margin-bottom: 0.4rem;">Profiling alternative development loans and funds.</li>
                                <li style="margin-bottom: 0.4rem;">Advising government on appropriateness of loans.</li>
                                <li style="margin-bottom: 0.4rem;">Liaising with National Planning Commission to identify new Development Partners.</li>
                                <li style="margin-bottom: 0.4rem;">Developing proposals on attracting Development Partners in collaboration with MDAs.</li>
                                <li style="margin-bottom: 0.4rem;">Implementing approved proposals on attracting Development Partners to the State.</li>
                                <li style="margin-bottom: 0.4rem;">Receiving and scrutinizing proposals from MDAs, NGOs and National Institutions based on developed and agreed work plans and processing proposals to Government and for release of funds where applicable.</li>
                                <li style="margin-bottom: 0.4rem;">Monitoring the issuance of special releases to MoF upon receipt of approval from Government House.</li>
                                <li style="margin-bottom: 0.4rem;">Processing of payments to relevant MDAs and other Organizations upon receipt of cash backing from MoF.</li>
                                <li style="margin-bottom: 0.4rem;">Monitoring and reporting on the implementation of Partners' activities.</li>
                                <li style="margin-bottom: 0.4rem;">Liaising with MDAs and Development Partners on proposed or existing MOUs in order to streamline them with State Government priorities.</li>
                                <li style="margin-bottom: 0.4rem;">Analyzing signed MoUs in line with Government priorities.</li>
                                <li style="margin-bottom: 0.4rem;">Monitoring Development Partners program implementation in line with Government priorities.</li>
                                <li style="margin-bottom: 0.4rem;">Writing and presenting report based on program implemented.</li>
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
