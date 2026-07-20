@extends('layouts.frontend')

@section('title', 'Budget | Planning & Budget Commission')

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
                    Budget Department</h1>
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
                            The Budget Department serves as a core unit within the Kaduna State Planning and Budget
                            Commission, spearheading the state's budgeting process and fiscal management. It coordinates
                            the preparation and implementation of the annual state budget, working closely with all
                            Ministries, Departments, and Agencies (MDAs) to ensure effective resource allocation and
                            utilization. The department issues budget guidelines, provides technical support, reviews
                            budget proposals, monitors implementation, and prepares performance reports while
                            maintaining strict adherence to budgeting best practices – all aimed at achieving the
                            state's development objectives and enhancing service delivery to the people of Kaduna State.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/GWLR5FVXkAAyOpM-768x576.jpeg') }}"
                            alt="Budget Department Meeting" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Functions -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <div class="strategic-left">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 2rem; color: white; letter-spacing: -0.02em;">
                            Core<br>Functions</h2>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    <div class="strategic-right">
                        <!-- Function 1 -->
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
                                <h4
                                    style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">
                                    Managing the State Government Budget preparation process</h4>
                            </div>
                            <ul
                                style="padding-left: 2.2rem; list-style-type: disc; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Issuing Budget Call Circular and Guideline, including
                                    Revenue</li>
                                <li style="margin-bottom: 0.4rem;">Forecasts and apportionment of ceilings between MDAs.
                                </li>
                                <li style="margin-bottom: 0.4rem;">Facilitate Budget Reviews.</li>
                                <li style="margin-bottom: 0.4rem;">Ensuring Budget match plans.</li>
                                <li style="margin-bottom: 0.4rem;">Serve as the secretariat of the State Estimate
                                    Committee.</li>
                            </ul>
                        </div>

                        <!-- Function 2 -->
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
                                <h4
                                    style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">
                                    Legal Framework</h4>
                            </div>
                            <p
                                style="margin-bottom: 0.75rem; padding-left: 2.2rem; font-size: 0.85rem; color: white; line-height: 1.5;">
                                <strong>121.(1)</strong> The Governor shall cause to be prepared and laid before the
                                House of Assembly at any time before the commencement of each financial year estimates
                                of the revenues and expenditures of the State for the next following financial year.
                                (Authorisation of expenditure from Consolidated Revenue Fund)
                            </p>
                        </div>

                        <!-- Function 3 -->
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
                                <h4
                                    style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">
                                    Structure of government Budget</h4>
                            </div>
                            <ol
                                style="padding-left: 3rem; margin: 0; line-height: 1.5; font-size: 0.85rem; color: white;">
                                <li style="margin-bottom: 0.4rem;">Revenue
                                    <ul
                                        style="padding-left: 1.5rem; list-style-type: circle; margin-top: 0.2rem; margin-bottom: 0.4rem;">
                                        <li>Internally Generated Revenue (IGR)</li>
                                        <li>Statutory Allocation</li>
                                        <li>Value Added Tax (VAT)</li>
                                        <li>Loans</li>
                                        <li>Grants</li>
                                    </ul>
                                </li>
                                <li style="margin-bottom: 0.4rem;">Expenditure
                                    <ul
                                        style="padding-left: 1.5rem; list-style-type: circle; margin-top: 0.2rem; margin-bottom: 0.4rem;">
                                        <li>Recurrent –Personnel Cost and Overhead Cost</li>
                                        <li>Capital Expenditure – Programme /Projects, Infrastructure or equipment</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Roles and Responsibilities -->
        <section class="section roles-responsibilities" style="padding: 6rem 0; background-color: white;">
            <div class="container">
                <div class="roles-grid"
                    style="display: grid; grid-template-columns: 2fr 1fr; gap: 4rem; align-items: flex-start;">
                    <div class="roles-content">
                        <span
                            style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--primary-blue); margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.05em;">DEPARTMENT'S</span>
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 2.5rem; letter-spacing: -0.02em;">
                            Roles and Responsibilities</h2>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                            <!-- Column 1 -->
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Writing
                                        of letters to Government House and MDAs</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Issuance
                                        of releases for request approved by the Governor</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Report
                                        Writing</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Liaising
                                        with MDAs on budget issues and other related issues</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span
                                        style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Compilations
                                        of Contractual commitments of MDAs</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span
                                        style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Production
                                        of Implementation status on MDAs performance</span>
                                </div>
                            </div>

                            <!-- Column 2 -->
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Drafting
                                        of Medium Term Expenditure Framework (MTEF)</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span
                                        style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Production
                                        of Budget Expenditure Profile</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Gender
                                        and Social Inclusion issues</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span
                                        style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Computation
                                        of fringe benefits of Political Appointees</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span
                                        style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Production
                                        of Public Expenditure and Financial Accountability (PEFA) report</span>
                                </div>
                                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                    <div class="icon-circle"
                                        style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                        <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor"
                                            stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            style="margin-left: 2px;">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <span style="font-size: 0.9rem; line-height: 1.5; color: var(--gray-600);">Analysis
                                        of Revenue and Debt status</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="roles-image">
                        <img src="{{ asset('assets/images/backgrounds/bg-footer.jpg') }}" alt="Budget Coins and Notes"
                            style="width: 100%; height: auto; display: block;">
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
