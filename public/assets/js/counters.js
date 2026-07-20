// Counter Animation
function initCounters() {
    const statsSection = document.getElementById('statistics');
    const counters = document.querySelectorAll('.stat-number');
    let hasAnimated = false;

    if (!statsSection || counters.length === 0) return;

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

    const statsObserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !hasAnimated) {
            animateCounters();
            hasAnimated = true;
        }
    }, { threshold: 0.5 });

    statsObserver.observe(statsSection);
}

// Run immediately
initCounters();

// Handle BFCache restore
window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
        // Just set them to their target immediately to avoid seeing 0s
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            counter.innerText = target + (target > 1000 ? '+' : '');
        });
    }
});
