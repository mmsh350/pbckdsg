@extends('layouts.frontend')

@section('title', 'Bureau | Planning & Budget Commission')

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
                    style="font-size: 3.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    Kaduna State Bureau of<br>Statistics</h1>
            </div>
        </section>

        <!-- About Bureau -->
        <section class="section about-bureau" style="padding: 6rem 0;">
            <div class="container">
                <div class="about-bureau-grid"
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div class="about-bureau-content">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            About the Bureau</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7;">Kaduna State Bureau of
                            Statistics is the statistical agency responsible for managing all sets of data and
                            statistical activities in the State. It is the apex body and the custodian of all State
                            official statistics and has the overall responsibility for overseeing the State Statistical
                            System and coordinating the implementation of the State Statistical Master Plan. <a
                                href="https://kdbs.ng/"
                                style="color: blue; font-weight: 500; text-decoration: none;">Click here for the
                                official website</a></p>

                        <div class="vmc-item" style="margin-top: 2.5rem;">
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
                            <p style="font-size: 0.95rem; color: var(--gray-600); line-height: 1.6;">To be a leading,
                                reliable source of all statistical requirements of Kaduna state and beyond.</p>
                        </div>

                        <div class="vmc-item" style="margin-top: 2rem;">
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
                            <p style="font-size: 0.95rem; color: var(--gray-600); line-height: 1.6;">To strengthen the
                                Kaduna State Statistical System by generating quality statistics for decision makers,
                                planners, and researchers in an objective, cost effective, timely and effective manner
                                in line with the restoration master plan.</p>
                        </div>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/business-2904773_1280-1024x678.jpg') }}"
                            alt="Business Statistics" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- KDBS Strategic Function -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <div class="strategic-left">
                        <h2
                            style="font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 2rem; color: white; letter-spacing: -0.02em;">
                            KDBS<br>Strategic<br>Function</h2>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    <div class="strategic-right">
                        <!-- Strategic Function Item -->
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
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Strategic
                                    Function</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">Be responsible for the development and management of
                                    official Statistics</li>
                                <li style="margin-bottom: 0.2rem;">Collecting, compiling, interpreting, analyzing,
                                    publishing statistical information alone or in collaborating with other agencies
                                    (both governmental and non- governmental)</li>
                                <li style="margin-bottom: 0.2rem;">Developing and maintaining a comprehensive
                                    socio-economic State Data Bank</li>
                                <li style="margin-bottom: 0.2rem;">Fulfilling all other functions relating to statistics
                                    which the government may direct from time to time.</li>
                                <li style="margin-bottom: 0.2rem;">Developing and promoting the use of statistical
                                    standards and appropriate methodologies in the state statistical system</li>
                                <li style="margin-bottom: 0.2rem;">Advising the State and Local Government on all
                                    matters relating to statistics.</li>
                                <li style="margin-bottom: 0.2rem;">to eliminate waste, duplication, compromise of
                                    quality, and improve statistical standards.</li>
                            </ul>
                        </div>

                        <!-- Departments and Functions -->
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
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Departments
                                    and Functions</h4>
                            </div>
                            <p style="margin-bottom: 0.75rem; font-size: 0.85rem; color: white;">Research and
                                Methodology Department The department is in-charge of:</p>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">Data management</li>
                                <li style="margin-bottom: 0.2rem;">Data processing</li>
                                <li style="margin-bottom: 0.2rem;">Methodology design</li>
                                <li style="margin-bottom: 0.2rem;">Data analysis</li>
                                <li style="margin-bottom: 0.2rem;">Quality check</li>
                            </ul>
                        </div>

                        <!-- Census and Survey -->
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
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Cencus and
                                    Survey Department</h4>
                            </div>
                            <p style="margin-bottom: 0.75rem; font-size: 0.85rem; color: white;">The department is
                                in-charge of:</p>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">Field Activities</li>
                                <li style="margin-bottom: 0.2rem;">Survey Frames</li>
                                <li style="margin-bottom: 0.2rem;">Establishments</li>
                                <li style="margin-bottom: 0.2rem;">Update of Frame</li>
                                <li style="margin-bottom: 0.2rem;">Market prices data collection</li>
                            </ul>
                        </div>

                        <!-- Social and Economic Statistics -->
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
                                <h4 style="margin: 0; font-size: 1.2rem; font-weight: 700; color: white;">Social and
                                    Ecnomic Statistics</h4>
                            </div>
                            <p style="margin-bottom: 0.75rem; font-size: 0.85rem; color: white;">The department is
                                in-charge of:</p>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.4; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.2rem;">System of Administrative Statistics</li>
                                <li style="margin-bottom: 0.2rem;">Social Statistics e.g Schools, Hospital, Transport
                                </li>
                                <li style="margin-bottom: 0.2rem;">Economic Statistics e.g GDP,CPI</li>
                                <li style="margin-bottom: 0.2rem;">Vital Statistics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Journey So Far -->
        <section class="section journey-so-far" style="padding: 6rem 0;">
            <div class="container">
                <div class="journey-grid"
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div class="journey-content">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            Journey So Far</h2>
                        <p style="margin-bottom: 2.5rem; color: var(--gray-600); font-size: 0.95rem;">KDBS has conducted
                            the following Main Surveys from December 2016 till Date</p>
                        <div class="surveys-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.1rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Annual School
                                    Census 2015/2016, 2016/2017, 2018/2019</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.1rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Agricultural
                                    Structure Survey (KASS) 2015/2016, 2016/2017, 2018/2019</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.1rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">General
                                    Households surveys 2015/2016, 2016/2017</span>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.1rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">State Gross
                                    Domestic Product (GDP) Survey (KDGDP)</span>
                            </div>
                        </div>
                    </div>
                    <div class="journey-image">
                        <img src="{{ asset('assets/images/backgrounds/kd8.jpg') }}" alt="Journey So Far"
                            style="width: 100%; display: block;">
                    </div>
                </div>
            </div>
        </section>

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
