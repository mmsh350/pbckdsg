<footer class="footer">
    <div class="container footer-container">
        <div class="footer-top">
            <div class="footer-col-about">
                <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Kaduna State Planning & Budget Commission" class="footer-logo-img">
                <p class="footer-desc">A world class and dynamic Planning and Budget Agency creating a vibrant economy for improvement of the living standards of the people of Kaduna State.</p>
                <div class="footer-socials">
                    <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" stroke="none" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                    <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" stroke="none" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
                    <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" stroke="none" fill="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                </div>
            </div>
            
            <div class="footer-col-links">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('departments') }}">Departments</a></li>
                    <li><a href="{{ url('bureau') }}">Bureau of Statistics</a></li>
                    <li><a href="{{ url('agency') }}">Residents Registration Agency</a></li>
                    <li><a href="{{ url('downloads') }}">Downloads</a></li>
                    <li><a href="{{ url('news') }}">News</a></li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            
            <livewire:frontend.newsletter />
        </div>
        
        <div class="footer-bottom">
            <p>Copyright&copy; <span id="currentYear">{{ date('Y') }}</span> Planning & Budget Commission, Kaduna State. All rights reserved.</p>
            <p class="dev-credit">Dev. by Powerline Technology</p>
        </div>
    </div>
</footer>
