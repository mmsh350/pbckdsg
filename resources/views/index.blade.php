@extends('layouts.frontend')

@section('title', 'Home | Planning & Budget Commission')

@section('content')
<!-- Hero Section -->
                <section class="hero" id="home">
            <div class="hero-bg hero-slider" id="heroSlider">
                @if($sliders->isNotEmpty())
                    @foreach($sliders as $index => $slider)
                        <div class="slide {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ Storage::url($slider->image) }}" alt="{{ $slider->title }}" loading="{{ $index === 0 ? 'eager' : 'lazy' }}">
                        </div>
                    @endforeach
                @else
                    <div class="slide active">
                        <img src="{{ asset('assets/images/hero/hero-budget.jpg') }}" alt="Kaduna State Budget" loading="eager">
                    </div>
                @endif
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-container fade-up">
                <div class="hero-content">
                    <h1 class="hero-title">A world class and<br>dynamic Planning<br>and Budget Agency</h1>
                    <p class="hero-subtitle">... creating a vibrant economy for improvement of the living standards of the people of Kaduna State.</p>
                    <div class="hero-buttons-grid">
                        <a href="https://play.google.com/store/apps/details?id=kaduna.citizen.feedback" target="_blank" rel="noopener noreferrer" class="btn hero-grid-btn" style="background-color: #143FA8; color: white;">Citizens Feedback App</a>
                        <a href="https://www.opengovpartnership.org/members/kaduna-state-nigeria/" target="_blank" rel="noopener noreferrer" class="btn hero-grid-btn" style="background-color: #FF5A1F; color: white;">OpenGov Partnership</a>
                        <a href="https://pbc.kdsg.gov.ng/download/2026-revenue-budget-template/" target="_blank" rel="noopener noreferrer" class="btn hero-grid-btn" style="background-color: #00FF55; color: white;">2027 Revenue Budget Template</a>
                        <a href="https://nscfn.nationalplanning.gov.ng/fn-dashboard" target="_blank" rel="noopener noreferrer" class="btn hero-grid-btn" style="background-color: #00FFFF; color: white;">Nutrition Dashboard</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="section about" id="about">
            <div class="container fade-up">
                <!-- Top History Section -->
                <div class="history-grid">
                    <div class="history-logo">
                        <span class="welcome-text">WELCOME TO THE</span>
                        <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Kaduna State Planning & Budget Commission Logo" class="about-logo-img">
                    </div>
                    <div class="history-text">
                        <p>The Commission had undergone several changes. It was a full-fledged Ministry under the former civilian regime of 1979-1980. It was later changed to the Directorate of Budget and Planning within the Ministry of Finance (MoF) under successive military administrations. Subsequently,</p>
                        <p>it was upgraded to the Bureau of Budget and Planning and later became the Kaduna State Planning and Budget Commission by Law No. 2017. The Commission comprises five departments, two stand-alone units and two parastatals.</p>
                    </div>
                </div>

                <!-- Cards Section -->
                <div class="vmc-grid">
                    <!-- Vision -->
                    <div class="vmc-card light-card">
                        <div class="vmc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 17c-4.5 0-8.5-4-8.5-4s4-4 8.5-4 8.5 4 8.5 4-4 4-8.5 4z" />
                                <circle cx="12" cy="13" r="2.5" />
                                <path d="M12 5v2" />
                                <path d="M7 6.5l1.5 1.5" />
                                <path d="M17 6.5l-1.5 1.5" />
                                <path d="M12 19v2" />
                                <path d="M7 19.5l1.5-1.5" />
                                <path d="M17 19.5l-1.5-1.5" />
                            </svg>
                        </div>
                        <h3>Vision</h3>
                        <p>A world class and dynamic Planning and Budget Agency creating a vibrant economy for improvement of the living standards of the people of Kaduna State.</p>
                    </div>

                    <!-- Mission -->
                    <div class="vmc-card dark-card">
                        <div class="vmc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="10" cy="14" r="7" />
                                <circle cx="10" cy="14" r="3.5" />
                                <circle cx="10" cy="14" r="1" />
                                <path d="M21 3l-10 10" />
                                <path d="M21 3l-3 0M21 3l0 3" />
                                <path d="M18 6l-2-2" />
                            </svg>
                        </div>
                        <h3>Mission</h3>
                        <p>To serve as an effective machinery for the formulation, coordination, monitoring and evaluation of Government economic policies, plans and budgets to enhance the socio-economic development of the state and its people using a competent and well-motivated workforce.</p>
                    </div>

                    <!-- Core Values -->
                    <div class="vmc-card light-card">
                        <div class="vmc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 10h16l-8 11z" />
                                <path d="M7 5h10l3 5H4z" />
                                <path d="M7 5l5 5 5-5" />
                                <path d="M12 1v2" />
                                <path d="M7 2.5l1.5 1.5" />
                                <path d="M17 2.5l-1.5 1.5" />
                            </svg>
                        </div>
                        <h3>Core Values</h3>
                        <p>Dedication. Integrity. Team Work. Employee care and development.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Governor Section -->
        <section class="section governor bg-light-blue" id="governor">
            <div class="container fade-up">
                <div class="gov-grid">
                    <div class="gov-content">
                        <span class="gov-subtitle">SEN. UBA SANI</span>
                        <h2 class="gov-title">Governor of Kaduna State</h2>
                        <p class="gov-text">Senator Uba Sani is a Nigerian politician who is the Governor of Kaduna State whose tenure started in May 2023. He was previously the Senator representing Kaduna Central Senatorial District from 2019 to 2023. He had also served as a Senior Special Assistant to President Olusegun Obasanjo, a Special Adviser to the Minister of the FCT on Political Affairs, and a Special Adviser on Political Affairs and Intergovernmental Relations to Governor Nasir El-Rufai.</p>

                        <h3 class="gov-priorities-title">Priorities ...</h3>
                        <div class="gov-priorities-list">
                            <ul class="priority-col">
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Safety and Security</li>
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Strengthen Institutions</li>
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Trade and Investment</li>
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Infrastructure</li>
                            </ul>
                            <ul class="priority-col">
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Human Capital Development</li>
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Nurture Citizens Engagement</li>
                                <li><svg viewBox="0 0 24 24" fill="#FF5A1F"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Agriculture</li>
                            </ul>
                        </div>
                    </div>
                    <div class="gov-image">
                        <img src="{{ asset('assets/images/leadership/governor.jpg') }}" alt="Sen. Uba Sani - Governor of Kaduna State" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <!-- Commissioner Section -->
        <section class="section commissioner" id="commissioner">
            <div class="comm-bg-watermark">
                <img src="{{ asset('assets/images/logo/logo-kdsg-watermark.png') }}" alt="Watermark" class="watermark-logo">
            </div>
            <div class="container fade-up relative z-index-1">
                <div class="comm-grid">
                    <div class="comm-image-wrapper">
                        <img src="{{ asset('assets/images/leadership/commissioner.png') }}" alt="Hon. Mukhtar Ahmed Monrovia" class="comm-img" loading="lazy">
                    </div>
                    <div class="comm-content">
                        <div class="comm-text-wrapper">
                            <h2 class="comm-title">Building Tomorrow's<br>Kaduna Today</h2>
                            <p class="comm-text">Welcome to the official website of the Kaduna State Planning and Budget Commission (KSPBC). As the state's premier institution for economic planning and fiscal management, we are committed to driving sustainable development through effective policy formulation and budget implementation.</p>
                            <p class="comm-text">Our dedicated team works tirelessly to ensure optimal resource allocation for creating a lasting positive impact across all sectors of our economy. I invite you to explore our website and learn more about how we are working to create a vibrant economy and improve living standards for the people of Kaduna State.</p>
                            <div class="comm-signature">
                                <strong>Hon. Mukhtar Ahmed Monrovia</strong><br>
                                <em>Honourable Commissioner</em><br>
                                <span class="signature-light">Kaduna State Planning and Budget Commission</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PBC Services Section -->
        <section class="section pbc-services" id="pbc-services">
            <div class="pbc-services-bg">
                <img src="{{ asset('assets/images/backgrounds/bg-services.jpeg') }}" alt="PBC Services Background" loading="lazy">
                <div class="pbc-overlay"></div>
            </div>
            <div class="container fade-up relative z-index-1">
                <div class="pbc-header">
                    <span class="pbc-subtitle">PBC SERVICES</span>
                    <h2 class="pbc-title">Services offered by the<br>Commission</h2>
                </div>

                <div class="pbc-services-grid">
                    <!-- Left Column -->
                    <div class="pbc-col">
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            </div>
                            <div class="pbc-text">Facilitate development of State and local government plans.</div>
                        </div>
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21.21 15.89A10 10 0 1 1 8 2.83M22 12A10 10 0 0 0 12 2v10z"/></svg>
                            </div>
                            <div class="pbc-text">Prepare and implement annual State Budgets.</div>
                        </div>
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>
                            </div>
                            <div class="pbc-text">Coordinate development partners' support.</div>
                        </div>
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 12 10 9 13 12 17 8"/><line x1="17" y1="8" x2="17" y2="10"/><line x1="17" y1="8" x2="15" y2="8"/></svg>
                            </div>
                            <div class="pbc-text">Monitor and Evaluate Government Projects and Programmes.</div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="pbc-col">
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 8h12l4 5-10 10L2 13z"/><path d="M12 23l4-10"/><path d="M12 23L8 13"/><path d="M2 13h20"/><path d="M6 8l2 5"/><path d="M18 8l-2 5"/><path d="M12 1v3M9 2.5l1.5 2M15 2.5l-1.5 2"/></svg>
                            </div>
                            <div class="pbc-text">Support and Coordinate the implementation of the Sustainable Development Goals (SDGs)</div>
                        </div>
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><polyline points="3 14 6 10 12 14 18 6"/></svg>
                            </div>
                            <div class="pbc-text">Collect and Manage Data.</div>
                        </div>
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><circle cx="12" cy="14" r="2"/><path d="M12 16v3M9 22h6"/></svg>
                            </div>
                            <div class="pbc-text">Support the implementation of the Social Safety Programme.</div>
                        </div>
                        <div class="pbc-item">
                            <div class="pbc-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="16" rx="2" ry="2"/><line x1="16" y1="8" x2="16" y2="8"/><line x1="16" y1="12" x2="16" y2="12"/><line x1="16" y1="16" x2="16" y2="16"/><circle cx="9" cy="10" r="3"/><path d="M13 17a4 4 0 0 0-8 0"/></svg>
                            </div>
                            <div class="pbc-text">Register all residents in the State.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resources and Downloads Section -->
        <section class="section resources-section" id="resources">
            <div class="container fade-up">
                <div class="resources-grid">
                    <!-- Left Column -->
                    <div class="res-content">
                        <span class="res-subtitle">ACCESS OFFICIAL PLANNING AND BUDGET DOCUMENTS</span>
                        <h2 class="res-title">Resources and<br>Downloads</h2>
                        <p class="res-desc">Welcome to our comprehensive document repository where you can access essential planning and budget-related materials for Kaduna State. We've organized our documents into three main categories to help you find exactly what you need:</p>
                        <hr class="res-divider">
                        <p class="res-cta-text">Click below to access our download section</p>
                        <a href="#" class="btn res-btn">Downloads</a>
                    </div>

                    <!-- Right Column -->
                    <div class="res-card-wrapper">
                        <div class="res-card">
                            <ul class="res-list">
                                <li>
                                    <div class="res-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83M22 12A10 10 0 0 0 12 2v10z"/></svg>
                                    </div>
                                    <div class="res-text">
                                        <h4>Budget Documents</h4>
                                        <p>Explore our collection of state budgets, including annual appropriation bills, budget implementation reports, and citizens' budgets. These documents provide detailed insights into the state's financial planning and resource allocation.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="res-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 22 7 12 2"/><rect x="4" y="9" width="4" height="9"/><rect x="16" y="9" width="4" height="9"/><rect x="10" y="9" width="4" height="9"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                                    </div>
                                    <div class="res-text">
                                        <h4>Policy Documents</h4>
                                        <p>Access key policy frameworks, development plans, and strategic documents that guide our state's economic direction. This section includes medium-term sector strategies, economic blueprints, and planning guidelines.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="res-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                                    </div>
                                    <div class="res-text">
                                        <h4>Report and Publications</h4>
                                        <p>Find our periodic performance reports, economic reviews, statistical bulletins, and evaluation documents. These publications offer detailed analysis and updates on the state's economic progress and development initiatives.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="res-footer">
                                <p>Browse through our categories and download the documents you need. For any additional information or support, please contact our help desk.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News and Articles Section -->
        <section class="section news-articles-section" id="news">
            <div class="container fade-up">
                <div class="news-header">
                    <span class="news-subtitle" style="color: white;">UPDATES</span>
                    <h2 class="news-title" style="color: white;">News and Articles</h2>
                </div>

                                <div class="news-articles-grid">
                    @forelse($news as $article)
                        <article class="news-article-card">
                            <div class="na-img">
                                @if($article->featured_image)
                                    <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}" loading="lazy">
                                @else
                                    <div style="background: #e2e8f0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                        <svg style="color: #94a3b8; width: 48px; height: 48px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20a2 2 0 012 2v1m-2 8H4"></path></svg>
                                    </div>
                                @endif
                                <div class="na-avatar">
                                    <svg viewBox="0 0 24 24" fill="#ccc"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                                </div>
                            </div>
                            <div class="na-content">
                                <h3 style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; min-height: 4.5rem;">{{ $article->title }}</h3>
                                <p>{{ Str::limit($article->excerpt ?? strip_tags($article->content), 120) }}</p>
                                <a href="{{ route('news.show', $article->slug) }}" class="na-read-more">READ MORE &raquo;</a>
                            </div>
                            <div class="na-footer">
                                PBC Media &bull; {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('F j, Y') : $article->created_at->format('F j, Y') }} &bull; No Comments
                            </div>
                        </article>
                    @empty
                        <div style="grid-column: 1 / -1; text-align: center; padding: 4rem 0;">
                            <h3 style="font-size: 1.5rem; color: #475569;">No articles published yet.</h3>
                        </div>
                    @endforelse
                </div>

                <div class="news-button-wrap">
                    <a href="{{ route('news.index') }}" class="btn btn-discover-more">Discover More</a>
                </div>
            </div>
        </section>

        <!-- Social Media Section -->
        <section class="section social-media-section" id="social-media">
            <div class="container fade-up text-center">
                <span class="social-subtitle">FEEDS FROM THE</span>
                <h2 class="social-title">Social Media</h2>
                <p class="social-handle">Handle KADPBC</p>
                <div class="social-feed-placeholder">
                    <!-- Social feed widget goes here -->
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
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}" alt="Bill & Melinda Gates Foundation"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}" alt="The World Bank"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                        <!-- Set 2 for seamless scrolling -->
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}" alt="Bill & Melinda Gates Foundation"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}" alt="The World Bank"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection






