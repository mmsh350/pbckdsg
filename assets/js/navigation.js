document.addEventListener('DOMContentLoaded', () => {
    // Inject overlay
    const overlay = document.createElement('div');
    overlay.className = 'mobile-overlay';
    document.body.appendChild(overlay);

    // Sticky Header
    const header = document.getElementById('header');
    const handleScroll = () => {
        if (window.scrollY > 50) header.classList.add('scrolled');
        else header.classList.remove('scrolled');
    };
    window.addEventListener('scroll', handleScroll);
    handleScroll();

    // Mobile Navigation Toggle
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('nav');
    
    const closeMenu = () => {
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.classList.remove('active');
        nav.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
        hamburger.innerHTML = '<span class="hamburger-line"></span><span class="hamburger-line"></span><span class="hamburger-line"></span>';
    };

    if (hamburger && nav) {
        hamburger.addEventListener('click', () => {
            const isExpanded = hamburger.getAttribute('aria-expanded') === 'true';
            if (isExpanded) {
                closeMenu();
            } else {
                hamburger.setAttribute('aria-expanded', 'true');
                hamburger.classList.add('active');
                nav.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
                hamburger.innerHTML = '<span class="hamburger-line" style="transform: rotate(45deg) translate(5px, 5px);"></span><span class="hamburger-line" style="opacity: 0;"></span><span class="hamburger-line" style="transform: rotate(-45deg) translate(5px, -5px);"></span>';
            }
        });
    }

    overlay.addEventListener('click', closeMenu);

    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                if (nav.classList.contains('active')) closeMenu();
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
            }
        });
    });
});
