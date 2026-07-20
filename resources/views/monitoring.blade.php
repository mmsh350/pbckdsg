@extends('layouts.frontend')

@section('title', 'Monitoring | Planning & Budget Commission')

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
                    Monitoring and Evaluation<br>Department</h1>
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
                            The Monitoring and Evaluation Department is a crucial unit within the Kaduna State Planning and Budget Commission that oversees the implementation of state policies, programs, and projects to ensure they align with set objectives and deliver intended results. Through systematic data collection, analysis, and reporting, the department tracks the performance of government initiatives, conducts impact assessments, and provides evidence-based recommendations for improved service delivery. Working collaboratively with all MDAs, the department maintains a comprehensive monitoring framework that helps identify challenges, measure progress, and ensure accountability in the utilization of state resources for the benefit of Kaduna State residents.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/pbc-kd-img4-768x512.jpg') }}"
                            alt="Monitoring and Evaluation Department Team" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Mandates and Activities -->
        <section class="section mandates-activities" style="padding: 6rem 0; background-color: #f8fafc;">
            <div class="container">
                <div class="roles-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem; align-items: flex-start;">
                    <div class="roles-image">
                        <img src="{{ asset('assets/images/backgrounds/GLQ2ixZW8AAVhuI-1674x2048.jpeg') }}"
                            alt="M&E Speaker" style="width: 100%; height: auto; display: block;">
                    </div>
                    <div class="roles-content">
                        <span style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--primary-blue); margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.05em;">DEPARTMENT'S</span>
                        
                        <!-- Mandates -->
                        <h2 style="font-size: 2.2rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">Mandates</h2>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 3rem;">
                            <!-- Column 1 -->
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Monitoring and Evaluation of Capital Projects.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Supervision of MDAs Projects Support Unit.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Establish and Manage an appropriate State Monitoring and Evaluation System.</span>
                                </div>
                            </div>
                            <!-- Column 2 -->
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Facilitate MDAs to set up M&E system including mechanism for measuring performance.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Facilitate, advice and conduct specific Evaluation Studies (Sector Policies and Programmes).</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Anchor Results Delivery at the Ministry's level.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Activities -->
                        <h2 style="font-size: 2.2rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">Activities</h2>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                            <!-- Column 1 -->
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Continuous Monitoring of Capital Projects.</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Impact Evaluation Studies for some Projects</span>
                                </div>
                            </div>
                            <!-- Column 2 -->
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Conduct Annual Sector Performance Review</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Compile Citizen Feedback and forward to Public Procurement Agency to respond</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Overview Section -->
        <section class="section overview-strategy" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <!-- Left Column -->
                    <div class="strategic-left">
                        <h2 style="font-size: 2.2rem; font-weight: 800; line-height: 1.2; margin-bottom: 1.5rem; color: white; letter-spacing: -0.02em;">
                            Overview of<br>Kaduna<br>Performance<br>Assessment<br>Strategy
                        </h2>
                        <p style="margin-bottom: 1rem; color: rgba(255,255,255,0.9); font-size: 0.9rem; line-height: 1.6;">
                            As part of our Performance Management strategy, Kaduna continues to strengthen its capability to track performance & demonstrate results through innovative initiatives like:
                        </p>
                        <ol style="margin-bottom: 2rem; padding-left: 1rem; list-style-type: none; font-size: 0.9rem; font-weight: 600; color: white;">
                            <li style="margin-bottom: 0.25rem;">1. The Eyes and Ears Project</li>
                            <li>2. Citizen Feedback Systems<br>&nbsp;&nbsp;&nbsp;&nbsp;(CitiFeed)</li>
                        </ol>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    
                    <!-- Right Column -->
                    <div class="strategic-right">
                        <!-- Block 1 -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">The Eyes and Ears at a glance</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">The Eyes & Ears App is an innovative policy tool developed by the PBC which links budget performance to SIP and the SDP.</li>
                                <li style="margin-bottom: 0.4rem;">Provides evidence-based feedback to policy makers to track budget implementation progress.</li>
                                <li style="margin-bottom: 0.4rem;">The aim is to provide actionable data to readily understand project/programmes implementation and promote learning on what works and what doesn't and why.</li>
                                <li style="margin-bottom: 0.4rem;">In response to demand for accountability by his Excellency and the citizenry by showcasing commitments to real results through a mixture of log reports, photos and geospatial mapping.</li>
                                <li style="margin-bottom: 0.4rem;">Allows Kaduna State to make resource allocation decisions, particularly in a climate of continuing budget constraint.</li>
                                <li style="margin-bottom: 0.4rem;">Provides an early warning system for BPC so that it can flag projects that are below acceptable level and provide proactive response to save the project from failing (either through substandard work or abandonment of the project).</li>
                            </ul>
                        </div>

                        <!-- Block 2 -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Structure of the Eyes & Ears</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">The Eyes & Ears Projects is housed in the M&E Department headed by the Director of M&E.</li>
                                <li style="margin-bottom: 0.4rem;">Uniform benchmarking model to assess projects like an average citizen of Kaduna State would assess with technical and social impact of projects and programmes.</li>
                                <li style="margin-bottom: 0.4rem;">Develop work plans to implement monitoring of projects and programmes based on government priorities and targets set by the MDAs.</li>
                                <li style="margin-bottom: 0.4rem;">Generate quarterly and Annual Performance Reports (APR) to document and provide institutional memory on Good, bad and uneventful practices with lessons learnt and recommendations.</li>
                            </ul>
                        </div>

                        <!-- Block 3 -->
                        <div class="strategic-block" style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Platforms for Citizen Engagement</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Customer Feedback Application is a smartphone application which enables citizens to monitor, assess, report or make enquiries on government projects located within their communities. This application is available on Google Play Store for android phone users.</li>
                                <li style="margin-bottom: 0.4rem;">Citizens can review projects by status, level of completion, and quality of execution.</li>
                                <li style="margin-bottom: 0.4rem;">Citizens can also include pictures and comments relating to project implementation by providing necessary information and context.</li>
                                <li style="margin-bottom: 0.4rem;">Submissions are reviewed in our Coordination Center.</li>
                                <li style="margin-bottom: 0.4rem;">Call Centre (SMS/Toll Free Line): Infrastructure to support toll free calls/SMS have been put in place to enable the general public particularly those who do not have access to smartphones to also assess or make enquiries about government projects located within their communities.</li>
                                <li style="margin-bottom: 0.4rem;">SMS/Toll Free Line number: 07080699500</li>
                            </ul>
                        </div>

                        <!-- Block 4 -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Introducing the Citizen Feedback System (Citifeed)</h4>
                            </div>
                            <ul style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">In order to democratize and broaden access to information, KDSG is consolidating its gains by engaging its citizenry to participate in governance.</li>
                                <li style="margin-bottom: 0.4rem;">Citifeed provides citizens with information on Government's projects and programmes so as to enhance transparency and provide H.E with an additional reporting layer separate from our internal mechanisms.</li>
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
