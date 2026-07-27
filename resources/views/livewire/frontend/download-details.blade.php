<div>
    @section('title', $document->title . ' | Planning & Budget Commission')

    @php
        $ext = strtoupper($document->file_type ?: pathinfo($document->file_path, PATHINFO_EXTENSION));
        if (!$ext || $ext === '-') {
            $ext = 'DOC';
        }

        $sizeBytes = $document->file_size ?? 0;
        $sizeFormatted = $sizeBytes > 1048576
            ? number_format($sizeBytes / 1048576, 2) . ' MB'
            : number_format($sizeBytes / 1024, 2) . ' KB';

        $publishedDate = $document->published_at ? $document->published_at : $document->created_at;
    @endphp

    <style>
        :root {
            --dd-primary: #041F56;
            --dd-primary-light: #0B3485;
            --dd-accent: #FF5A1F;
            --dd-accent-hover: #E04810;
            --dd-text-dark: #0F172A;
            --dd-text-muted: #64748B;
            --dd-bg-light: #F8FAFC;
            --dd-border: #E2E8F0;
            --dd-radius: 16px;
        }

        /* Hero Section */
        .dd-hero {
            position: relative;
            background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
            color: #FFFFFF;
            padding: 9rem 0 5rem;
            overflow: hidden;
        }

        .dd-hero-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .dd-hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            opacity: 0.18;
            filter: blur(4px);
        }

        .dd-hero-overlay {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 30% 20%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
        }

        .dd-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .dd-breadcrumb {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            margin-bottom: 2rem;
        }

        .dd-breadcrumb a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .dd-breadcrumb a:hover {
            color: var(--dd-accent);
        }

        .dd-breadcrumb-sep {
            color: var(--dd-accent);
        }

        .dd-title {
            color: #FFFFFF;
            font-size: 2.25rem;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.02em;
            margin-bottom: 1.5rem;
            max-width: 900px;
        }

        @media (min-width: 768px) {
            .dd-title { font-size: 3rem; }
        }

        .dd-meta-bar {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.85);
            padding-top: 1.25rem;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            max-width: 900px;
        }

        .dd-meta-item {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }

        .dd-meta-item svg {
            color: var(--dd-accent);
        }

        /* Main Body Layout */
        .dd-main-section {
            background-color: #FFFFFF;
            padding: 4rem 0 6rem;
        }

        .dd-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .dd-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        @media (min-width: 992px) {
            .dd-grid {
                grid-template-columns: 340px 1fr;
                gap: 3.5rem;
            }
        }

        /* Sidebar Specs Card */
        .dd-specs-card {
            background: var(--dd-bg-light);
            border: 1px solid var(--dd-border);
            border-radius: var(--dd-radius);
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
            margin-bottom: 2rem;
        }

        .dd-specs-header {
            background: var(--dd-primary);
            color: #FFFFFF;
            padding: 1.25rem 1.5rem;
            font-weight: 700;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .dd-spec-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--dd-border);
            font-size: 0.90625rem;
        }

        .dd-spec-row:last-child {
            border-bottom: none;
        }

        .dd-spec-label {
            color: var(--dd-text-muted);
            font-weight: 500;
        }

        .dd-spec-val {
            font-weight: 700;
            color: var(--dd-text-dark);
        }

        .dd-badge-pill {
            background: rgba(4, 31, 86, 0.08);
            color: var(--dd-primary);
            padding: 0.2rem 0.6rem;
            border-radius: 6px;
            font-size: 0.8125rem;
            font-weight: 700;
        }

        /* Attached File Box */
        .dd-file-box {
            background: linear-gradient(135deg, #021235 0%, #041F56 100%);
            color: #FFFFFF;
            border-radius: var(--dd-radius);
            padding: 2.25rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 25px -5px rgba(4, 31, 86, 0.25);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .dd-file-info {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .dd-file-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: rgba(255, 90, 31, 0.15);
            border: 1px solid rgba(255, 90, 31, 0.3);
            color: var(--dd-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 0.9375rem;
            flex-shrink: 0;
        }

        .dd-file-name {
            font-size: 1.125rem;
            font-weight: 700;
            color: #FFFFFF;
            margin-bottom: 0.25rem;
        }

        .dd-file-size {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.75);
        }

        .dd-download-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            background: var(--dd-accent);
            color: #FFFFFF;
            font-weight: 700;
            font-size: 0.9375rem;
            padding: 0.9rem 2rem;
            border-radius: 10px;
            text-decoration: none;
            transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 6px 16px rgba(255, 90, 31, 0.3);
        }

        .dd-download-btn:hover {
            background-color: var(--dd-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 90, 31, 0.4);
        }

        /* Description Content */
        .dd-desc-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--dd-text-dark);
            margin-bottom: 1.25rem;
        }

        .dd-desc-body {
            font-size: 1.0625rem;
            line-height: 1.8;
            color: #334155;
            margin-bottom: 3rem;
        }

        /* Share Section */
        .dd-share-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
            background-color: var(--dd-bg-light);
            border: 1px solid var(--dd-border);
            border-radius: 12px;
            padding: 1.5rem 2rem;
            margin-top: 2rem;
        }

        .dd-share-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 700;
            color: var(--dd-text-dark);
            font-size: 0.9375rem;
        }

        .dd-share-links {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .dd-share-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            color: #FFFFFF;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
            border: none;
            cursor: pointer;
        }

        .dd-share-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            opacity: 0.9;
        }

        .dd-share-facebook { background-color: #1877F2; }
        .dd-share-twitter { background-color: #000000; }
        .dd-share-whatsapp { background-color: #25D366; }
        .dd-share-copy { background-color: var(--dd-primary); }

        /* Toast */
        .dd-toast {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--dd-primary);
            color: #FFFFFF;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            pointer-events: none;
            z-index: 9999;
        }

        .dd-toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .dd-back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            padding: 0.85rem 1.25rem;
            background-color: #FFFFFF;
            color: var(--dd-primary);
            border: 1px solid var(--dd-border);
            font-weight: 700;
            font-size: 0.875rem;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .dd-back-btn:hover {
            background-color: var(--dd-primary);
            color: #FFFFFF;
            border-color: var(--dd-primary);
        }
    </style>

    <!-- Hero Section -->
    <section class="dd-hero">
        <div class="dd-hero-bg">
            <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Document Details Banner Background">
        </div>
        <div class="dd-hero-overlay"></div>

        <div class="dd-hero-content">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="Breadcrumb">
                <div class="dd-breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span class="dd-breadcrumb-sep">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </span>
                    <a href="{{ url('downloads') }}">Downloads Repository</a>
                    <span class="dd-breadcrumb-sep">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </span>
                    <span style="color: #FFFFFF;">Document Details</span>
                </div>
            </nav>

            <h1 class="dd-title">{{ $document->title }}</h1>

            <div class="dd-meta-bar">
                <div class="dd-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>Published {{ $publishedDate->format('M d, Y') }}</span>
                </div>
                <div class="dd-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>{{ $document->download_count ?? 0 }} Total Downloads</span>
                </div>
                <div class="dd-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                    <span>Format: {{ $ext }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="dd-main-section">
        <div class="dd-container">
            <div class="dd-grid">
                
                <!-- Left Sidebar Specifications Card -->
                <aside>
                    <div class="dd-specs-card">
                        <div class="dd-specs-header">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                            <span>Document Specifications</span>
                        </div>
                        <div class="dd-spec-row">
                            <span class="dd-spec-label">Total Downloads</span>
                            <span class="dd-badge-pill">{{ $document->download_count }}</span>
                        </div>
                        <div class="dd-spec-row">
                            <span class="dd-spec-label">File Size</span>
                            <span class="dd-spec-val">{{ $sizeFormatted }}</span>
                        </div>
                        <div class="dd-spec-row">
                            <span class="dd-spec-label">Format Extension</span>
                            <span class="dd-badge-pill">{{ $ext }}</span>
                        </div>
                        <div class="dd-spec-row">
                            <span class="dd-spec-label">Created Date</span>
                            <span class="dd-spec-val">{{ $document->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="dd-spec-row">
                            <span class="dd-spec-label">Last Updated</span>
                            <span class="dd-spec-val">{{ $document->updated_at->format('M d, Y') }}</span>
                        </div>
                    </div>

                    <a href="{{ url('downloads') }}" class="dd-back-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        <span>Back to All Downloads</span>
                    </a>
                </aside>

                <!-- Right Column: Download Card & Summary -->
                <div>
                    <!-- Attached File Download Box -->
                    <div class="dd-file-box">
                        <div class="dd-file-info">
                            <div class="dd-file-icon">
                                {{ $ext }}
                            </div>
                            <div>
                                <div class="dd-file-name">{{ basename($document->file_path) }}</div>
                                <div class="dd-file-size">1 Attached File &bull; {{ $sizeFormatted }}</div>
                            </div>
                        </div>
                        <a href="{{ route('documents.download', $document) }}" class="dd-download-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Download File</span>
                        </a>
                    </div>

                    <!-- Description -->
                    <h2 class="dd-desc-title">Document Summary & Notes</h2>
                    <div class="dd-desc-body">
                        @if ($document->description)
                            {!! nl2br(e($document->description)) !!}
                        @else
                            <p style="color: var(--dd-text-muted); font-style: italic;">No additional overview notes provided for this publication.</p>
                        @endif
                    </div>

                    <!-- Share Section -->
                    <div class="dd-share-box">
                        <div class="dd-share-title">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                            <span>Share this document page</span>
                        </div>
                        <div class="dd-share-links">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="dd-share-btn dd-share-facebook" aria-label="Share on Facebook" title="Facebook">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" /></svg>
                            </a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($document->title) }}" target="_blank" rel="noopener noreferrer" class="dd-share-btn dd-share-twitter" aria-label="Share on Twitter" title="X (Twitter)">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <!-- WhatsApp -->
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($document->title . ' ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="dd-share-btn dd-share-whatsapp" aria-label="Share on WhatsApp" title="WhatsApp">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                            </a>
                            <!-- Copy Link Button -->
                            <button type="button" class="dd-share-btn dd-share-copy" id="copyDocBtn" aria-label="Copy Document Link" title="Copy Link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Copy Toast -->
    <div class="dd-toast" id="docToast">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        <span>Document link copied to clipboard!</span>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyBtn = document.getElementById('copyDocBtn');
            const toast = document.getElementById('docToast');

            if (copyBtn && toast) {
                copyBtn.addEventListener('click', function() {
                    navigator.clipboard.writeText(window.location.href).then(function() {
                        toast.classList.add('show');
                        setTimeout(function() {
                            toast.classList.remove('show');
                        }, 3000);
                    });
                });
            }
        });
    </script>
    @endpush
</div>
