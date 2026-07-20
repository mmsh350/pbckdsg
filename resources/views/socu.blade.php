@extends('layouts.frontend')

@section('title', 'Socu | Planning & Budget Commission')

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
                    <span style="color: white;">UNITS</span>
                </div>
                <h1
                    style="font-size: 2.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    State Operation and<br>Coordination Unit (SOCU)</h1>
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
                            About the Unit</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">
                            The unit was created in 2016 to implement the FGN program of Identification of the Poor and Vulnerable in communities and population of the State Single Register (SSR). By design of the whole program nationwide, SOCU is situated in the Planning and Budget Commission though staff are drawn from various MDAs within the Civil Service.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/kd8.jpg') }}"
                            alt="Government Building" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Mandate Section -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem; align-items: center;">
                    <!-- Left Column -->
                    <div class="strategic-left">
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    
                    <!-- Right Column -->
                    <div class="strategic-right">
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1.25rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Mandate of SOCU</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.6; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.8rem;">To Generate, Maintain and Update the State Single Register of Poor and Vulnerable Households necessary for planning.</li>
                                <li style="margin-bottom: 0.8rem;">Kaduna SOCU has a wider mandate by virtue of the fact that the State Focal Person (SFP) is the Commissioner Planning and Budget, the Unit doubles as the secretariat for the State Focal Person (SFP) on Social Investment Programs (SIPs); meaning the Unit links up with the other programmes primarily for reports and represent the SFP where necessary.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NSIPs Section -->
        <section class="section about-nsips" style="padding: 6rem 0;">
            <div class="container">
                <div class="nsips-grid"
                    style="display: grid; grid-template-columns: 2fr 1fr; gap: 4rem;">
                    <div class="nsips-content">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em; line-height: 1.2;">
                            SOCU & The National Social Investment<br>Programmes (NSIPs)</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">
                            The National Social Investment Programs is a portfolio of Programs created in 2015 and launched in 2016 by the FGN to deliver socio-economic support to disadvantaged Nigerians across the Nation. In other words, NSIPs was created to overcome the failings of the past and to enshrine the values and vision of the current administration for graduating its citizens from poverty through capacity building, investment and direct support. The National Social Investment Office (NSIO) designed a holistic approach for delivering the Social Investment Portfolio by embarking on the following:
                        </p>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <!-- List Column 1 -->
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.95rem; color: var(--gray-600);">Sharing Resources and lessons learnt for Continuous Improvement</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.95rem; color: var(--gray-600);">Central Coordination</span>
                                </div>
                            </div>
                            <!-- List Column 2 -->
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.95rem; color: var(--gray-600);">Partnering with States and LGAs</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.95rem; color: var(--gray-600);">Leveraging Existing Capacity within MDAs</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.95rem; color: var(--gray-600);">Digital First</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nsips-image">
                        <img src="{{ asset('assets/images/backgrounds/17254835_img20230520080414_jpeg41c4aa4a16958bbf96b85f9269a896b3.jpeg') }}"
                            alt="Bill Gates and Officials" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Structure Section -->
        <section class="section structure-section" style="background-color: #f5f8fc; padding: 5rem 0;">
            <div class="container">
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem; align-items: start;">
                    <!-- Left Image and Title -->
                    <div>
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            Structure</h2>
                        <img src="{{ asset('assets/images/backgrounds/GZMrBdOXsAEq7Mq-768x1024.jpeg') }}"
                            alt="Aerial view" style="width: 100%; height: auto; display: block;">
                    </div>
                    
                    <!-- Right Content -->
                    <div style="color: var(--gray-600); font-size: 0.9rem; line-height: 1.6;">
                        <p style="margin-bottom: 2rem;">
                            States are expected to form structures in order to efficiently coordinate and implement the programs. It is expected that each State Government appoints a State Focal Person who links up with each program to effectively brief His Excellency and the FGN on the happenings. The Kaduna State Focal Person is the State Coordinator, State Operations Coordinating Unit. Every state has its own arrangement on the coordination of the NSIPs. In Kaduna the arrangement is as follows:
                        </p>
                        
                        <!-- List Two Columns -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                            <!-- Col 1 -->
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Population of the State Single Register (SSR) coordinated by the State Operations Coordinating Unit domiciled in the Planning and Budget Commission. Process of identification uses the Community Based Targeting Process.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>The Need for Power (N-Power) Program; Coordinated by SOCU and domiciled at Planning and Budget Commission, Kaduna. Enrolment is through on-line application.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Government Enterprise Empowerment Program (GEEP) Coordinated by Poultry Association of Nigeria, Kaduna State chapter, Yakubu Gowon Way. Enrolment is done through Cooperatives.</span>
                                </div>
                            </div>
                            <!-- Col 2 -->
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>National Home Grown School Feeding Program; Coordinated by Ministry of Education, Science & Technology (MOEST.) Program Manager in the Ministry of Education, Science & Technology Food vendors apply to the Ministry of Education, Science & Technology. Feeding is for Primary 1-3 Pupils.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Conditional Cash Transfer (CCT) Coordinated by the State Cash Transfer Unit (SCTU domiciled at Ministry of Rural & Community Development). The SCTU use data from the SSR for intervention.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div style="border-top: 1px solid #e2e8f0; margin-bottom: 2rem;"></div>
                        
                        <!-- Bottom Info -->
                        <p style="margin-bottom: 1.5rem;">
                            The Unit work closely with MDAs/LGAs in charge of each program or component to:
                        </p>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                            <!-- Col 1 -->
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Monitor daily implementation of the program.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Manage information on beneficiaries of assigned program.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Tackle grievances of beneficiaries.</span>
                                </div>
                            </div>
                            <!-- Col 2 -->
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Prepare daily, weekly, monthly and quarterly reports on implementation of each program.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span>Responsible for data entry, quality assurance, management and protocol of beneficiaries of assigned program.</span>
                                </div>
                            </div>
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
