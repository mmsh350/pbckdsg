@extends('layouts.frontend')

@section('title', 'Contact | Planning & Budget Commission')

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
                    <span style="color: white;">CONTACT US</span>
                </div>
                <h1
                    style="font-size: 3.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    Get in Touch</h1>
                <p style="margin-top: 1rem; font-size: 1.1rem; color: rgba(255,255,255,0.9); max-width: 600px;">
                    We are always ready to hear from you. Reach out to us for inquiries, feedback, or support regarding our programs and policies.
                </p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="section" style="background-color: #f8fafc; padding: 6rem 0;">
            <div class="container">
                <div class="contact-container">
                    
                    <!-- Contact Info -->
                    <div class="contact-info-wrapper fade-up">
                        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 1.5rem; color: white; line-height: 1.2;">Contact Information</h2>
                        <p style="color: rgba(255,255,255,0.8); margin-bottom: 3rem; line-height: 1.6;">
                            Our doors are always open. Whether you have a question about our budget processes or need assistance with state planning data, our team is ready to assist you.
                        </p>

                        <!-- Address -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div class="contact-details">
                                <h4>Head Office Address</h4>
                                <p>Planning & Budget Commission<br>State Secretariat, Independence Way<br>Kaduna, Kaduna State, Nigeria</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div class="contact-details">
                                <h4>Call Us</h4>
                                <p>+234 (0) 800 000 0000<br>+234 (0) 900 000 0000</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="contact-details">
                                <h4>Email Address</h4>
                                <p>info@pbc.kdsg.gov.ng<br>support@pbc.kdsg.gov.ng</p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div class="contact-details">
                                <h4>Working Hours</h4>
                                <p>Monday - Friday: 8:00 AM - 4:00 PM<br>Saturday - Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form-wrapper fade-up" style="animation-delay: 0.2s;">
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: #041f56; margin-bottom: 0.5rem;">Send us a Message</h3>
                        <p style="color: var(--gray-500); margin-bottom: 2rem; font-size: 0.95rem;">Fill out the form below and our team will get back to you within 24 hours.</p>
                        
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="How can we help?" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Write your message here..." required></textarea>
                            </div>
                            
                            <button type="submit" class="submit-btn">
                                Send Message
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                            </button>
                        </form>
                    </div>

                </div>

                <!-- Google Map placeholder for Kaduna -->
                <div class="map-wrapper fade-up" style="animation-delay: 0.4s;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100000!2d7.35!3d10.55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d355099b244d3%3A0x7d0a6ab593a183d2!2sKaduna%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1714490000000!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
@endsection
