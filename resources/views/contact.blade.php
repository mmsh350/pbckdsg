@extends('layouts.frontend')

@section('title', 'Contact Us | Planning & Budget Commission')

@section('content')

<style>
    :root {
        --ct-primary: #041F56;
        --ct-primary-light: #0B3485;
        --ct-accent: #FF5A1F;
        --ct-accent-hover: #E04810;
        --ct-text-dark: #0F172A;
        --ct-text-muted: #64748B;
        --ct-bg-light: #F8FAFC;
        --ct-border: #E2E8F0;
        --ct-radius: 16px;
    }

    /* Hero Section */
    .ct-hero {
        position: relative;
        background: linear-gradient(135deg, #021235 0%, #041F56 50%, #0B3485 100%);
        color: #FFFFFF;
        padding: 9rem 0 5rem;
        overflow: hidden;
    }

    .ct-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .ct-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0.18;
        filter: blur(3px);
    }

    .ct-hero-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 20%, rgba(255, 90, 31, 0.15) 0%, transparent 60%);
    }

    .ct-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ct-breadcrumb {
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

    .ct-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .ct-breadcrumb a:hover {
        color: var(--ct-accent);
    }

    .ct-breadcrumb-sep {
        color: var(--ct-accent);
    }

    .ct-title {
        color: #FFFFFF;
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        .ct-title { font-size: 3.5rem; }
    }

    .ct-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 650px;
        line-height: 1.6;
        margin: 0;
    }

    /* Contact Content Section */
    .ct-main-section {
        background-color: var(--ct-bg-light);
        padding: 5rem 0 7rem;
    }

    .ct-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .ct-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
        margin-bottom: 4rem;
    }

    @media (min-width: 992px) {
        .ct-grid {
            grid-template-columns: 1fr 1.2fr;
            gap: 3.5rem;
        }
    }

    /* Contact Info Box */
    .ct-info-card {
        background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%);
        color: #FFFFFF;
        border-radius: var(--ct-radius);
        padding: 3rem 2.5rem;
        box-shadow: 0 20px 40px -10px rgba(4, 31, 86, 0.3);
        position: relative;
        overflow: hidden;
    }

    .ct-info-card::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: rgba(255, 90, 31, 0.15);
        pointer-events: none;
    }

    .ct-info-header {
        font-size: 1.75rem;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 1rem;
    }

    .ct-info-desc {
        font-size: 0.9375rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 2.5rem;
    }

    .ct-info-item {
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        margin-bottom: 2rem;
    }

    .ct-info-item:last-child {
        margin-bottom: 0;
    }

    .ct-info-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: var(--ct-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ct-info-details h4 {
        font-size: 1rem;
        font-weight: 700;
        color: #FFFFFF;
        margin-bottom: 0.35rem;
    }

    .ct-info-details p {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0;
    }

    /* Form Box */
    .ct-form-card {
        background: #FFFFFF;
        border: 1px solid var(--ct-border);
        border-radius: var(--ct-radius);
        padding: 3rem 2.5rem;
        box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.05);
    }

    .ct-form-title {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--ct-text-dark);
        margin-bottom: 0.5rem;
    }

    .ct-form-sub {
        font-size: 0.9375rem;
        color: var(--ct-text-muted);
        margin-bottom: 2rem;
    }

    .ct-field-group {
        margin-bottom: 1.5rem;
    }

    .ct-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 700;
        color: var(--ct-text-dark);
        margin-bottom: 0.5rem;
    }

    .ct-input, .ct-textarea {
        width: 100%;
        padding: 0.85rem 1.125rem;
        font-size: 0.9375rem;
        border: 1px solid var(--ct-border);
        border-radius: 10px;
        background-color: var(--ct-bg-light);
        color: var(--ct-text-dark);
        outline: none;
        transition: border-color 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
    }

    .ct-input:focus, .ct-textarea:focus {
        border-color: var(--ct-primary-light);
        background-color: #FFFFFF;
        box-shadow: 0 0 0 4px rgba(11, 52, 133, 0.1);
    }

    .ct-textarea {
        min-height: 140px;
        resize: vertical;
    }

    .ct-submit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
        width: 100%;
        padding: 1rem 1.75rem;
        background-color: var(--ct-accent);
        color: #FFFFFF;
        font-size: 0.9375rem;
        font-weight: 700;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .ct-submit-btn:hover {
        background-color: var(--ct-accent-hover);
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(255, 90, 31, 0.3);
    }

    /* Map Box */
    .ct-map-card {
        background: #FFFFFF;
        border: 1px solid var(--ct-border);
        border-radius: var(--ct-radius);
        overflow: hidden;
        height: 420px;
        box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.05);
    }

    .ct-map-card iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
</style>

<!-- Hero Section -->
<section class="ct-hero">
    <div class="ct-hero-bg">
        <img src="{{ asset('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg') }}" alt="Contact Us Banner Background">
    </div>
    <div class="ct-hero-overlay"></div>

    <div class="ct-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb">
            <div class="ct-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="ct-breadcrumb-sep">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </span>
                <span style="color: #FFFFFF;">Contact Us</span>
            </div>
        </nav>

        <h1 class="ct-title">Get in Touch</h1>
        <p class="ct-subtitle">Have questions or inquiries regarding strategic planning, state budget framework, or partner coordination? We are here to assist you.</p>
    </div>
</section>

<!-- Main Contact Section -->
<section class="ct-main-section">
    <div class="ct-container">
        <div class="ct-grid">
            
            <!-- Contact Info Box -->
            <div class="ct-info-card">
                <h2 class="ct-info-header">Contact Information</h2>
                <p class="ct-info-desc">Reach out to our administrative team or visit the Planning and Budget Commission head office during working hours.</p>

                <div class="ct-info-item">
                    <div class="ct-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="ct-info-details">
                        <h4>Head Office Address</h4>
                        <p>Planning & Budget Commission<br>State Secretariat, Independence Way<br>Kaduna, Kaduna State, Nigeria</p>
                    </div>
                </div>

                <div class="ct-info-item">
                    <div class="ct-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <div class="ct-info-details">
                        <h4>Phone Lines</h4>
                        <p>+234 (0) 800 000 0000<br>+234 (0) 900 000 0000</p>
                    </div>
                </div>

                <div class="ct-info-item">
                    <div class="ct-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div class="ct-info-details">
                        <h4>Email Addresses</h4>
                        <p>info@pbc.kdsg.gov.ng<br>support@pbc.kdsg.gov.ng</p>
                    </div>
                </div>

                <div class="ct-info-item">
                    <div class="ct-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <div class="ct-info-details">
                        <h4>Working Hours</h4>
                        <p>Monday - Friday: 8:00 AM - 4:00 PM<br>Saturday & Sunday: Closed</p>
                    </div>
                </div>
            </div>

            <!-- Form Box -->
            <div class="ct-form-card">
                <h3 class="ct-form-title">Send us a Message</h3>
                <p class="ct-form-sub">Fill out your details below and our team will get back to you promptly.</p>

                <form action="#" method="POST">
                    @csrf
                    <div class="ct-field-group">
                        <label for="name" class="ct-label">Full Name</label>
                        <input type="text" id="name" name="name" class="ct-input" placeholder="e.g. Amina Bello" required>
                    </div>

                    <div class="ct-field-group">
                        <label for="email" class="ct-label">Email Address</label>
                        <input type="email" id="email" name="email" class="ct-input" placeholder="name@example.com" required>
                    </div>

                    <div class="ct-field-group">
                        <label for="subject" class="ct-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="ct-input" placeholder="How can we assist you?" required>
                    </div>

                    <div class="ct-field-group">
                        <label for="message" class="ct-label">Message</label>
                        <textarea id="message" name="message" class="ct-textarea" placeholder="Type your message here..." required></textarea>
                    </div>

                    <button type="submit" class="ct-submit-btn">
                        <span>Send Message</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </form>
            </div>

        </div>

        <!-- Google Map Section -->
        <div class="ct-map-card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100000!2d7.35!3d10.55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d355099b244d3%3A0x7d0a6ab593a183d2!2sKaduna%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1714490000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Commission Location Map"></iframe>
        </div>
    </div>
</section>

@endsection
