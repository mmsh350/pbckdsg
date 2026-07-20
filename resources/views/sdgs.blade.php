@extends('layouts.frontend')

@section('title', 'Sdgs | Planning & Budget Commission')

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
                    Kaduna State SDGs Unit</h1>
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
                            On 25 September 2015, the Member States of the United Nations agreed on the 17 Sustainable
                            Development Goals (SDGs) of the Post-2015 Development Agenda. The SDGs build on the
                            Millennium Development Goals, the global agenda that was pursued from 2000 to 2015, and will
                            guide global action on sustainable development until 2030. The SDGs are a cause for
                            celebration by local and regional governments the world over.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Sustainable Energy Lightbulb"
                            style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Info Layout -->
        <section class="section sdgs-info" style="background-color: #f5f8fc; padding: 5rem 0;">
            <div class="container">
                <div
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; color: var(--gray-600); font-size: 0.95rem; line-height: 1.7;">
                    <!-- Left Column -->
                    <div>
                        <p style="margin-bottom: 1.5rem;">
                            Even before Kaduna State is fully committed to galvanizing collaborative efforts of the
                            Civil Society, Academia, international, regional, national and sub-national entities - both
                            public and private- and the general public towards achieving the SDGs.
                        </p>
                        <p style="margin-bottom: 1.5rem;">
                            The Kaduna State Government of today has taken steps to set the standard for transparent
                            decision making, citizen engagement (the first sub-national to subscribed to OGP), and a
                            competent and responsive public service, looking at young people everywhere in public
                            institutions of the State not to talk of political Appointees who are generally vibrant
                            young men and women. All these are the requisite foundation laid for the attainment of the
                            SDGs by 2030.
                        </p>
                        <p style="margin-bottom: 1.5rem;">
                            Kaduna State made history on September 20, 2017 when it became the first State in Nigeria to
                            present an in-depth analysis of its SDGs data and strategy for implementation at the 72nd
                            United Nations General Assembly in New York (talking about SDGs report 2017).
                        </p>
                        <p>
                            The State has integrated the 17 SDGs into the State Development Plan 2016-2020 and specified
                            concerted policy actions towards making Kaduna State a leading destination for business
                            investment, achieving strong and inclusive
                        </p>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <p style="margin-bottom: 1.5rem;">
                            growth that creates wealth for all, education for all and a healthy population with improved
                            life expectancy.
                        </p>
                        <p style="margin-bottom: 1.5rem;">
                            The state government invested heavily to reposition the Kaduna State Bureau Statistics to
                            enable it get accurate data that will guide decision making in the State. The State
                            conducted two General Household Surveys (KDGHS), two Annual School Censuses, a state gross
                            domestic product (GDP) Survey (KDGDP), a population dynamics survey and an Agricultural
                            Structure Survey (KASS). The State also conducted Annual School Census between last year and
                            by first week of March 2020, the State will be conducting its third General Household Survey
                            (KDGHS). This survey is going to be the first of its kind not only in Nigeria but in Africa,
                            as it will capture Maternal, Neonatal and Child Health. The data generated from these
                            surveys helped the State to develop clear action plans on the way forward, especially with
                            regards to the implementation of the SDGs.
                        </p>
                        <p style="margin-bottom: 1.5rem;">
                            Attaining the SDGs involves the collective efforts of all stakeholders. The role for each
                            actor (state and non-state) cannot be over emphasized. We are on the right track, but more
                            needs to be done.
                        </p>
                        <p>
                            Thus, the mandates and activities of the Unit geared towards achieving the SDGs was
                            localized into MDAs.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <!-- Left Column -->
                    <div class="strategic-left">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 1.5rem; color: white; letter-spacing: -0.02em;">
                            ACHIEVEMENTS<br>FROM 2015 TO<br>DATE
                        </h2>
                        <img src="{{ asset('assets/images/backgrounds/save-energy-7382279_1280-768x512.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>

                    <!-- Right Column -->
                    <div class="strategic-right">
                        <!-- Heading / List -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1.25rem;">
                                <div class="icon-circle"
                                    style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                        stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        style="margin-left: 2px;">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <h4
                                    style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">
                                    Managing the State Government Budget preparation process</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.6; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Conducted the SDGs Acceleration Conference in January
                                    2019</li>
                                <li style="margin-bottom: 0.4rem;">Facilitated the construction of 100 Nos Bed Mother
                                    and Child Care Hospital at Dan'daura in Kubau LGA being OSSAP-SDGs intervention.
                                </li>
                                <li style="margin-bottom: 0.4rem;">Presented the Kaduna State 2017 SDGs Report which was
                                    subsequently launched at the 72nd United Nations General Assembly (UNGA) in New
                                    York, USA.</li>
                                <li style="margin-bottom: 0.4rem;">Executed the Construction of 124 Projects under the
                                    2014 Conditional Grant Scheme (CGS) utilizing N1.2Bn, being counterpart funds from
                                    the Federal Government of Nigeria and Kaduna State of equal amounts. This was
                                    allocated to six high-burden Local Government Areas in Kaduna State (Kaura, Kachia,
                                    Igabi, Chikun, Ikara, Kubau)</li>
                                <li style="margin-bottom: 0.4rem;">Conducted mapping of SDGs indicators to various
                                    Ministries, Agencies and Departments (MDAs) in Kaduna State.</li>
                                <li style="margin-bottom: 0.4rem;">Engaged Officers from Ministries, Departments and
                                    Agencies (MDAs) on Gender Mainstreaming.</li>
                                <li style="margin-bottom: 0.4rem;">Distributed items being OSSAP-SDGs 2017 Special
                                    Projects Intervention; including:
                                    <ul style="padding-left: 1.5rem; list-style-type: circle; margin-top: 0.4rem;">
                                        <li style="margin-bottom: 0.2rem;">30 Number of Tricycles</li>
                                        <li style="margin-bottom: 0.2rem;">200 Number of TVS Motorcycles</li>
                                        <li style="margin-bottom: 0.2rem;">69 Number grinding Machines</li>
                                        <li style="margin-bottom: 0.2rem;">1 Number TOYOTA HIACE Ambulance</li>
                                        <li style="margin-bottom: 0.2rem;">10 Number Phototherapy Machines</li>
                                        <li style="margin-bottom: 0.2rem;">10 Number Incubator</li>
                                    </ul>
                                </li>
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
