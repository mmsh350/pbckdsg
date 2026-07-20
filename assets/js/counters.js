document.addEventListener('DOMContentLoaded', () => {
    // Counter Animation
    const statsSection = document.getElementById('statistics');
    const counters = document.querySelectorAll('.stat-number');
    let hasAnimated = false;
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.innerText = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target + (target > 1000 ? '+' : '');
                }
            };
            updateCounter();
        });
    };
    if (statsSection) {
        const statsObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !hasAnimated) {
                animateCounters();
                hasAnimated = true;
            }
        }, { threshold: 0.5 });
        statsObserver.observe(statsSection);
    }
});
