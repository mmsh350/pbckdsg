@extends('layouts.frontend')

@section('title', 'Departments | Planning & Budget Commission')

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
                    <span style="color: white;">DEPARTMENTS</span>
                </div>
                <h1
                    style="font-size: 3.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    Our Departments</h1>
                <p style="margin-top: 1rem; font-size: 1.1rem; color: rgba(255,255,255,0.9); max-width: 600px;">
                    Explore the core operational bodies responsible for driving planning, budgeting, monitoring, and administration within Kaduna State.
                </p>
            </div>
        </section>

        <!-- Departments Section -->
        <section class="section" style="background-color: #f8fafc; padding: 5rem 0 8rem;">
            <div class="container">
                <div class="depts-grid">
                    
                    <!-- Planning Department -->
                    <div class="dept-card fade-up">
                        <div class="dept-img-container">
                            <img src="{{ asset('assets/images/backgrounds/pbc-kd-img2-768x512.jpg') }}" alt="Planning Department" class="dept-img">
                            <div class="dept-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                            </div>
                        </div>
                        <div class="dept-content">
                            <h3 class="dept-title">Planning Department</h3>
                            <p class="dept-excerpt">A Plan is an approved document which outlines the aspirations of the state. It highlights the strategic framework to realize the vision and guides resource projections.</p>
                            <a href="planning.html" class="dept-link">
                                Learn More
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Budget Department -->
                    <div class="dept-card fade-up" style="animation-delay: 0.1s;">
                        <div class="dept-img-container">
                            <img src="{{ asset('assets/images/backgrounds/GWLR5FVXkAAyOpM-768x576.jpeg') }}" alt="Budget Department" class="dept-img">
                            <div class="dept-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                        </div>
                        <div class="dept-content">
                            <h3 class="dept-title">Budget Department</h3>
                            <p class="dept-excerpt">Spearheading the state's budgeting process and fiscal management. It coordinates the preparation and implementation of the annual state budget.</p>
                            <a href="budget.html" class="dept-link">
                                Learn More
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Monitoring & Evaluation -->
                    <div class="dept-card fade-up" style="animation-delay: 0.2s;">
                        <div class="dept-img-container">
                            <img src="{{ asset('assets/images/backgrounds/pbc-kd-img4-768x512.jpg') }}" alt="M & E Department" class="dept-img">
                            <div class="dept-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                            </div>
                        </div>
                        <div class="dept-content">
                            <h3 class="dept-title">Monitoring & Evaluation</h3>
                            <p class="dept-excerpt">Ensures performance tracking at regular intervals to avoid deviations from state objectives and maximizes the effective delivery of public services.</p>
                            <a href="monitoring.html" class="dept-link">
                                Learn More
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Dev. Aid & Coordination -->
                    <div class="dept-card fade-up" style="animation-delay: 0.3s;">
                        <div class="dept-img-container">
                            <img src="{{ asset('assets/images/backgrounds/GZMrBdOXsAEq7Mq-768x1024.jpeg') }}" alt="Dev. Aid Department" class="dept-img">
                            <div class="dept-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                        </div>
                        <div class="dept-content">
                            <h3 class="dept-title">Dev. Aid & Coordination</h3>
                            <p class="dept-excerpt">Coordinates development aid and collaborates with international and local partners to align external interventions with the state's strategic goals.</p>
                            <a href="devaid.html" class="dept-link">
                                Learn More
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Admin & HR Department -->
                    <div class="dept-card fade-up" style="animation-delay: 0.4s;">
                        <div class="dept-img-container">
                            <img src="{{ asset('assets/images/backgrounds/GZMpzJ9WMAAmoNU-768x432.jpeg') }}" alt="Admin & HR Department" class="dept-img">
                            <div class="dept-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                        </div>
                        <div class="dept-content">
                            <h3 class="dept-title">Admin & HR Department</h3>
                            <p class="dept-excerpt">Manages administrative functions and human resources, ensuring optimal operational capacity and the professional development of the commission's staff.</p>
                            <a href="administration.html" class="dept-link">
                                Learn More
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
