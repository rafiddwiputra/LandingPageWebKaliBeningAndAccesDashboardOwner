import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", () => {

    /* ===============================
       COUNT-UP ANIMATION
    =============================== */
    const counters = document.querySelectorAll(".count");
    const section = document.querySelector(".stats-section");

    if (section && counters.length > 0) {
        let animated = false;

        const runCounter = () => {
            if (animated) return;
            animated = true;

            counters.forEach(counter => {
                const target = +counter.dataset.target;
                let current = 0;
                const increment = target / 40;

                const updateCount = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        };

        const counterObserver = new IntersectionObserver(
            entries => {
                if (entries[0].isIntersecting) {
                    runCounter();
                }
            },
            { threshold: 0.4 }
        );

        counterObserver.observe(section);
    }

    /* ===============================
       FADE UP ANIMATION
    =============================== */
    const items = document.querySelectorAll(".fade-up");

    if (items.length > 0) {
        const fadeObserver = new IntersectionObserver(
            entries => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add("show");
                        }, index * 150);
                    }
                });
            },
            { threshold: 0.3 }
        );

        items.forEach(item => fadeObserver.observe(item));
    }

});
