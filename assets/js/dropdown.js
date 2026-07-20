document.addEventListener('DOMContentLoaded', () => {
    // Mobile Dropdown Toggle
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                const parentItem = toggle.parentElement;
                const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                    if (item !== parentItem) {
                        item.classList.remove('active');
                        item.querySelector('.dropdown-toggle')?.setAttribute('aria-expanded', 'false');
                    }
                });
                parentItem.classList.toggle('active');
                toggle.setAttribute('aria-expanded', !isExpanded);
            }
        });
    });

    // Submenu Toggle for Mobile
    const submenuToggles = document.querySelectorAll('.dropdown-submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                const parentItem = toggle.parentElement;
                
                // Close other submenus
                document.querySelectorAll('.dropdown-submenu').forEach(item => {
                    if (item !== parentItem) {
                        item.classList.remove('active');
                    }
                });
                
                parentItem.classList.toggle('active');
            }
        });
    });
});
