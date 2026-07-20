document.addEventListener('DOMContentLoaded', () => {
    // Intersection Observer for Fade-Up Animations
    const fadeElements = document.querySelectorAll('.fade-up');
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { root: null, threshold: 0.15, rootMargin: "0px 0px -50px 0px" });
    fadeElements.forEach(element => fadeObserver.observe(element));
});
