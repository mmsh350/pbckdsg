@extends('layouts.frontend')

@section('title', 'Agency | Planning & Budget Commission')

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
                    <span style="color: white;">PARASTATALS</span>
                </div>
                <h1
                    style="font-size: 2.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    Kaduna State Residents<br>Registration Agency</h1>
            </div>
        </section>

        <!-- About Agency -->
        <section class="section about-bureau" style="padding: 6rem 0;">
            <div class="container">
                <div class="about-bureau-grid"
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div class="about-bureau-content">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            About the Agency</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">Kaduna State Residents Registration Agency (KADSRRA) was
                            established by law on 1st March, 2018 by the administration of His
                            Excellency Mallam Nasir Ahmad el-Rufai and inaugurated on 11th April
                            2019. The Agency was established to create a reliable database of all
                            residents in the State to provide useful data for planning, financial
                            services, education, housing, health and related matters.</p>

                        <div class="vmc-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 2rem;">
                            <!-- Vision -->
                            <div class="vmc-item">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: var(--gray-700);">
                                        Vision</h4>
                                </div>
                                <p style="font-size: 0.95rem; color: var(--gray-600); line-height: 1.6;">To be an effective agency for the generation of an up-to-date data of all residents in Kaduna State for good governance.</p>
                            </div>

                            <!-- Mission -->
                            <div class="vmc-item">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: var(--gray-700);">
                                        Mission</h4>
                                </div>
                                <p style="font-size: 0.95rem; color: var(--gray-600); line-height: 1.6;">To identify and deploy the latest technology to register all residents in Kaduna State for effective planning and development of the State.</p>
                            </div>
                            
                            <!-- Values -->
                            <div class="vmc-item">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: var(--gray-700);">
                                        Values</h4>
                                </div>
                                <ul style="padding-left: 1.5rem; list-style-type: disc; font-size: 0.95rem; color: var(--gray-600); line-height: 1.6; margin: 0;">
                                    <li>Team Work</li>
                                    <li>Reliability</li>
                                    <li>Credibility</li>
                                    <li>Unity</li>
                                </ul>
                            </div>
                            
                            <!-- Objectives -->
                            <div class="vmc-item">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: var(--gray-700);">
                                        Objectives</h4>
                                </div>
                                <ul style="padding-left: 1.5rem; list-style-type: disc; font-size: 0.95rem; color: var(--gray-600); line-height: 1.6; margin: 0;">
                                    <li style="margin-bottom: 0.2rem;">To enable Kaduna State Government effectively allocate resources to meets the needs of its residents.</li>
                                    <li style="margin-bottom: 0.2rem;">To assist in simplifying Government State service delivery and facilitate transactions by linking existing data sources with unique person identifier.</li>
                                    <li style="margin-bottom: 0.2rem;">To develop and improve economic growth of the State.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/subscribe-3534409_1280-1024x661.jpg') }}"
                            alt="Login Application Form" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Function of the Agency -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <div class="strategic-left">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 2rem; color: white; letter-spacing: -0.02em;">
                            Function of<br>the Agency</h2>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    <div class="strategic-right">
                        <!-- Function -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Function</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">To create a reliable database of all residents in Kaduna State with a view to providing useful data for planning, security, social welfare, employment, financial services, housing demography, education, health and other related matters.</li>
                                <li style="margin-bottom: 0.2rem;">To establish the relevant infrastructure for the creation of a resident's information database for every resident of the State with a view to producing residency cards for all qualified residents of the state; and ensure easy identification of residents.</li>
                                <li style="margin-bottom: 0.2rem;">To produce guidelines for the biometric data to be determined in the registration form.</li>
                                <li style="margin-bottom: 0.2rem;">Advice the Government on the mode of collecting residents' data from the general public.</li>
                            </ul>
                        </div>

                        <!-- Benefits of Registration -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Benefits of Registration</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">Data will assist the Government to effectively plan and develop the State and this will improve the standard of living of the residents.</li>
                                <li style="margin-bottom: 0.2rem;">Data will allow the Government determine the overall resources required to formulate and implement policies, projects and programmes that will cater for the needs of residents.</li>
                                <li style="margin-bottom: 0.2rem;">Enable the Government to effectively plan and manage the security of the State.</li>
                            </ul>
                        </div>

                        <!-- Mode of Registration -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Mode of Registration</h4>
                            </div>
                            <p style="margin-bottom: 0.75rem; font-size: 0.85rem; color: white;"><strong>Adults: Age 16 years and above:</strong> Applicant's information is entered into the registration data bank, their biometric information captured and a temporary slip is issued for the Applicant to retain. This serves as proof of registration and must be surrendered when permanent residency card is printed and to be collected. Applicants can register anywhere across the State but must be qualified residents.</p>
                            <p style="margin-bottom: 0.75rem; font-size: 0.85rem; color: white; text-transform: uppercase; font-weight: 700;">Conditions for Application <span style="text-transform: none; font-weight: 400;">Two proofs of residency are required:<br>Rent receipt/utility bill of current place of residence and any one of the following:</span></p>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">International Passport</li>
                                <li style="margin-bottom: 0.2rem;">Employee's ID card - must have address/logo of employer</li>
                                <li style="margin-bottom: 0.2rem;">National Driver's License</li>
                                <li style="margin-bottom: 0.2rem;">Students' ID card</li>
                                <li style="margin-bottom: 0.2rem;">Tax card or receipt</li>
                                <li style="margin-bottom: 0.2rem;">Letter of Identification from registration or organization</li>
                            </ul>
                        </div>
                        
                        <!-- Children -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Children</h4>
                            </div>
                            <p style="margin-bottom: 0.75rem; font-size: 0.85rem; color: white;">Registrants under the of 16 (Ages 0-15 years) will be registered as children and will require proof of identification only.</p>
                        </div>
                        
                        <!-- Conditions for Application (Children) -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Conditions for Application</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">Birth Certificate</li>
                                <li style="margin-bottom: 0.2rem;">Passport size photograph</li>
                                <li style="margin-bottom: 0.2rem;">Registration card/slip of Parent/Guardian</li>
                                <li style="margin-bottom: 0.2rem;">Biometric of children may not be captured as these are considered unstable until adulthood.</li>
                            </ul>
                        </div>

                        <!-- Conditions That Apply for both Adult and Children -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Conditions That Apply for both Adult and Children</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">Registration will not be complete until the proof of identify is presented.</li>
                                <li style="margin-bottom: 0.2rem;">All proofs of residency and means of identification presented must be at time of registration.</li>
                                <li style="margin-bottom: 0.2rem;">The registration Officer will retain a copy all items presented.</li>
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
