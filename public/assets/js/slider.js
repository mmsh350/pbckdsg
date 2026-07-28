// Hero Background Slider & Dynamic Text Sync
function initSlider() {
    const slides = document.querySelectorAll('.hero-slider .slide');
    const heroTitle = document.getElementById('heroTitle');
    const heroSubtitle = document.getElementById('heroSubtitle');

    function updateText(slide) {
        if (!slide) return;
        const title = slide.getAttribute('data-title');
        const subtitle = slide.getAttribute('data-subtitle');

        if (heroTitle && title && title.trim() !== '') {
            heroTitle.style.opacity = '0';
            setTimeout(() => {
                heroTitle.textContent = title;
                heroTitle.style.opacity = '1';
            }, 300);
        }

        if (heroSubtitle && subtitle && subtitle.trim() !== '') {
            heroSubtitle.style.opacity = '0';
            setTimeout(() => {
                heroSubtitle.textContent = subtitle;
                heroSubtitle.style.opacity = '1';
            }, 300);
        }
    }

    if (slides.length > 1) {
        let currentSlide = 0;
        
        // Clear any existing interval attached to the window to prevent double-speed on bfcache restore
        if (window.heroSliderInterval) {
            clearInterval(window.heroSliderInterval);
        }

        // Initialize first slide text
        updateText(slides[0]);

        window.heroSliderInterval = setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
            updateText(slides[currentSlide]);
        }, 5000);
    } else if (slides.length === 1) {
        slides[0].classList.add('active');
        updateText(slides[0]);
    }
}

// Run immediately
initSlider();

// Handle BFCache restore
window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
        initSlider();
    }
});
