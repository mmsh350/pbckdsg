// Intersection Observer for Fade-Up Animations
function initFadeAnimations() {
    const fadeElements = document.querySelectorAll('.fade-up:not(.visible)');
    if (fadeElements.length === 0) return;

    // Prevent jarring "page shake" animations if the user is using the Back/Forward button
    const isBackNavigation = (performance.getEntriesByType("navigation")[0]?.type === "back_forward") || 
                             (performance.navigation && performance.navigation.type === 2);

    if (isBackNavigation) {
        fadeElements.forEach(el => {
            el.style.transition = 'none';
            el.classList.add('visible');
        });
        return;
    }

    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { root: null, threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

    fadeElements.forEach(element => fadeObserver.observe(element));
}

// Run immediately since script is at the bottom of the body
initFadeAnimations();

// Run on BFCache restore (when user hits Back button)
window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
        // If restored from cache, make sure everything that should be visible is visible
        document.querySelectorAll('.fade-up').forEach(el => {
            el.classList.add('visible');
        });
    }
});
