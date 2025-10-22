/**
 * Nymia Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.nymia-mobile-menu-toggle');
    const sidebar = document.querySelector('.nymia-sidebar');
    const body = document.body;

    // Create mobile menu toggle button if it doesn't exist
    if (!mobileMenuToggle && sidebar) {
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'nymia-mobile-menu-toggle';
        toggleBtn.setAttribute('aria-label', 'Toggle Menu');
        toggleBtn.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        `;
        body.appendChild(toggleBtn);
        
        // Add click event to toggle button
        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('open');
            body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
        });
    } else if (mobileMenuToggle && sidebar) {
        mobileMenuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('open');
            body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
        });
    }

    // Close sidebar when clicking outside (on overlay)
    if (sidebar) {
        sidebar.addEventListener('click', function (e) {
            if (e.target === sidebar && sidebar.classList.contains('open')) {
                sidebar.classList.remove('open');
                body.style.overflow = '';
            }
        });
        
        // Close sidebar when clicking on the overlay (::before pseudo-element)
        document.addEventListener('click', function (e) {
            if (sidebar.classList.contains('open') && !sidebar.contains(e.target) && !e.target.closest('.nymia-mobile-menu-toggle')) {
                sidebar.classList.remove('open');
                body.style.overflow = '';
            }
        });
        
        // Close sidebar on navigation
        const navLinks = sidebar.querySelectorAll('.nymia-nav-item:not(.nymia-nav-item-toggle)');
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('open');
                    body.style.overflow = '';
                }
            });
        });
    }

    // Submenu toggle functionality
    const submenuToggles = document.querySelectorAll('.nymia-nav-item-toggle');
    
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const submenuId = this.getAttribute('data-submenu');
            const submenu = document.getElementById('submenu-' + submenuId);
            
            // Toggle active class on button
            this.classList.toggle('active');
            
            // Toggle active class on submenu
            if (submenu) {
                submenu.classList.toggle('active');
            }
            
            // Close other submenus
            submenuToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    const otherSubmenuId = otherToggle.getAttribute('data-submenu');
                    const otherSubmenu = document.getElementById('submenu-' + otherSubmenuId);
                    otherToggle.classList.remove('active');
                    if (otherSubmenu) {
                        otherSubmenu.classList.remove('active');
                    }
                }
            });
        });
    });

    // Filter button functionality (for both old and new dashboard)
    const filterButtons = document.querySelectorAll('.nymia-filter-btn, .nymia-filter-tab');
    const sections = document.querySelectorAll('.nymia-section, .nymia-dashboard-section');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get the filter value
            const filterValue = this.getAttribute('data-filter');
            
            // Show/hide sections based on filter
            sections.forEach(section => {
                const categories = section.getAttribute('data-category');
                
                if (!categories) return;
                
                const categoryList = categories.split(' ');
                
                if (filterValue === 'all') {
                    // Show sections that include 'all' in their categories
                    if (categoryList.includes('all')) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                } else if (categoryList.includes(filterValue)) {
                    // Show matching section
                    section.style.display = 'block';
                } else {
                    // Hide non-matching sections
                    section.style.display = 'none';
                }
            });
        });
    });

    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add loading animation to content cards
    const contentCards = document.querySelectorAll('.nymia-content-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    contentCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});
