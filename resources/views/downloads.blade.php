@extends('layouts.frontend')

@section('title', 'Downloads | Planning & Budget Commission')

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
                <span style="color: white;">DOWNLOADS</span>
            </div>
            <h1
                style="font-size: 3rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                Downloads</h1>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="section" style="background-color: #fafbfd; padding: 6rem 0;">
        <div class="container">
            <div class="downloads-container">
                <!-- Left Side -->
                <div>
                    <span
                        style="font-size: 0.75rem; font-weight: 700; color: #1e3a8a; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 1rem; display: block;">
                        ACCESS OFFICIAL PLANNING AND BUDGET DOCUMENTS
                    </span>
                    <h2
                        style="font-size: 2.2rem; font-weight: 800; color: #041f56; margin-bottom: 2rem; letter-spacing: -0.02em; line-height: 1.2;">
                        Resources and<br>Downloads
                    </h2>
                    <img src="{{ asset('assets/images/backgrounds/kd_documents.jpg') }}" alt="Stack of Books"
                        style="width: 100%; height: auto; border-radius: 4px; margin-bottom: 2rem; display: block;">
                    <p style="color: var(--gray-600); font-size: 0.95rem; line-height: 1.7;">
                        Welcome to our comprehensive document repository where you can access essential planning and
                        budget-related materials for Kaduna State. We've organized our documents into three main categories
                        to help you find exactly what you need:
                    </p>
                </div>

                <!-- Right Side: Card -->
                <div class="resource-card">
                    <!-- Item 1 -->
                    <div class="resource-item">
                        <div class="resource-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.1rem; font-weight: 700; color: #041f56;">Budget
                                Documents</h4>
                            <p style="margin: 0; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6;">
                                Explore our collection of state budgets, including annual appropriation bills, budget
                                implementation reports, and citizens' budgets. These documents provide detailed insights
                                into the state's financial planning and resource allocation.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="resource-item">
                        <div class="resource-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                                <path d="M9 22v-4h6v4"></path>
                                <path d="M8 6h.01"></path>
                                <path d="M16 6h.01"></path>
                                <path d="M12 6h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M16 10h.01"></path>
                                <path d="M16 14h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M8 14h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.1rem; font-weight: 700; color: #041f56;">Policy
                                Documents</h4>
                            <p style="margin: 0; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6;">
                                Access key policy frameworks, development plans, and strategic documents that guide our
                                state's economic direction. This section includes medium-term sector strategies, economic
                                blueprints, and planning guidelines.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="resource-item">
                        <div class="resource-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.1rem; font-weight: 700; color: #041f56;">Report
                                and Publications</h4>
                            <p style="margin: 0; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6;">
                                Find our periodic performance reports, economic reviews, statistical bulletins, and
                                evaluation documents. These publications offer detailed analysis and updates on the state's
                                economic progress and development initiatives.
                            </p>
                        </div>
                    </div>

                    <p style="margin: 2.5rem 0 0 0; color: var(--gray-400); font-size: 0.85rem; line-height: 1.6;">
                        Browse through our categories and download the documents you need. For any additional information or
                        support, please contact our help desk.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Document Grid Section -->
    @livewire('frontend.downloads')
@endsection
