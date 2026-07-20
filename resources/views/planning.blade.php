@extends('layouts.frontend')

@section('title', 'Planning | Planning & Budget Commission')

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
                    Planning Department</h1>
            </div>
        </section>

        <!-- About Department -->
        <section class="section about-bureau" style="padding: 6rem 0;">
            <div class="container">
                <div class="about-bureau-grid"
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div class="about-bureau-content">
                        <span style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--primary-blue); margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.05em;">FUNCTION</span>
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            About the Department</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">To avoid hitting the target and missing the point, a plan needs to be developed to serve as a guide for decision and policy makers. The plan needs to be jointly developed with relevant stakeholders (Government, Citizens and Development Partners) participating throughout the development processes for ownership. A Plan provides detail programs & activities, target and intended impact within the plan period which allow performance tracking at regular intervals to avoid deviations. A Plan is an approved document which outlines the aspirations of the state. It highlights strategic framework to realize the vision, resource projections to guide and prioritize expenditure, and implementation plan to deliver results and monitor progress. It is a blueprint of strategies and actions that are to be taken to achieve the development aspirations. It provides focus direction that will serve as guide to policy and decision makers towards achieving the state vision.</p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/pbc-kd-img2-768x512.jpg') }}"
                            alt="Planning Department Documents Signing" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Mandate of Planning Department -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <div class="strategic-left">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 2rem; color: white; letter-spacing: -0.02em;">
                            Mandate of<br>Planning<br>Department</h2>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    <div class="strategic-right">
                        <!-- Mandate 1 -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Advise and support Kaduna State Government in the formulation of Economic Policies</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Researching, developing, managing and disseminating socio-economic, and economic policy papers, proposals and analytical reports.</li>
                                <li style="margin-bottom: 0.4rem;">Holding annual economic and development summit for the State.</li>
                                <li style="margin-bottom: 0.4rem;">Adapting and translating Federal policies into State policies and plans.</li>
                                <li style="margin-bottom: 0.4rem;">Representing the State in the Annual Joint Planning Board (AJPB)/National Council on Development Planning (NCDP).</li>
                            </ul>
                        </div>

                        <!-- Mandate 2 -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Develop, coordinate, monitor and evaluate all development plans and strategies of the State.</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Translating Federal planning guidelines for use by the State or developing State's planning guidelines and disseminating.</li>
                                <li style="margin-bottom: 0.4rem;">Reviewing plan guidelines and framework on the scope, content and process of strategic planning for the State.</li>
                                <li style="margin-bottom: 0.4rem;">Collecting, collating and analysing data on the natural, human and financial resources of the State.</li>
                                <li style="margin-bottom: 0.4rem;">Consulting stakeholders on the development of policies, programmes, projects etc.</li>
                                <li style="margin-bottom: 0.4rem;">Facilitating and coordinating the preparation of the State, short-, medium-, and long-term development plans ensuring full integration.</li>
                                <li style="margin-bottom: 0.4rem;">Providing a focal point for the formulation and coordination of State economic planning and budgeting policies and programmes.</li>
                            </ul>
                        </div>

                        <!-- Mandate 3 -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Coordination and integration of Local Government Plans with State Plans</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Facilitating and supporting LGAs to develop economic, social and financial analysis for LGAs plans.</li>
                                <li style="margin-bottom: 0.4rem;">Facilitating, supporting and advising LGAs on planning and development; and offering quality control for outputs.</li>
                                <li style="margin-bottom: 0.4rem;">Ensuring coordination and integration of LGAs plans into State Plans.</li>
                                <li style="margin-bottom: 0.4rem;">Additional duties as required on projects assisted by the Development Partners.</li>
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
