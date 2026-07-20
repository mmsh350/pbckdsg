// Hero Background Slider
function initSlider() {
    const slides = document.querySelectorAll('.hero-slider .slide');
    if (slides.length > 1) {
        let currentSlide = 0;
        
        // Clear any existing interval attached to the window to prevent double-speed on bfcache restore
        if (window.heroSliderInterval) {
            clearInterval(window.heroSliderInterval);
        }

        window.heroSliderInterval = setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000);
    } else if (slides.length === 1) {
        slides[0].classList.add('active');
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
