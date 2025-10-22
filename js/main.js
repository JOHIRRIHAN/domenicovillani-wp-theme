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

    // Filter button functionality (for dashboard, audio page, PDF page, etc.)
    const filterButtons = document.querySelectorAll('.nymia-filter-btn, .nymia-filter-tab');
    const sections = document.querySelectorAll('.nymia-section, .nymia-dashboard-section');
    const audioCards = document.querySelectorAll('.nymia-audio-card');
    const pdfCards = document.querySelectorAll('.nymia-pdf-card');

    // Debug logging
    console.log('Filter system initialized');
    console.log('Filter buttons:', filterButtons.length);
    console.log('PDF cards:', pdfCards.length);

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get the filter value
            const filterValue = this.getAttribute('data-filter');
            console.log('Filter clicked:', filterValue);
            
            // Show/hide sections based on filter (for dashboard)
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
            
            // Show/hide audio cards based on filter (for audio page)
            audioCards.forEach((card, index) => {
                const categories = card.getAttribute('data-category');
                
                if (!categories) return;
                
                const categoryList = categories.split(' ');
                
                if (filterValue === 'all') {
                    // Show all cards with animation
                    setTimeout(() => {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInCard 0.4s ease forwards';
                    }, index * 50);
                } else if (categoryList.includes(filterValue)) {
                    // Show matching card with animation
                    setTimeout(() => {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInCard 0.4s ease forwards';
                    }, index * 50);
                } else {
                    // Hide non-matching card
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
            
            // Show/hide PDF cards based on filter (for PDF page)
            if (pdfCards.length > 0) {
                console.log('Filtering PDF cards, filter value:', filterValue);
                
                // First, hide all cards immediately
                pdfCards.forEach((card) => {
                    card.style.opacity = '0';
                });
                
                // Then show matching cards with animation
                let visibleIndex = 0;
                pdfCards.forEach((card, index) => {
                    const categories = card.getAttribute('data-category');
                    console.log(`Card ${index} category:`, categories);
                    
                    if (!categories) {
                        card.style.display = 'none';
                        console.log(`Card ${index}: No category, hiding`);
                        return;
                    }
                    
                    const categoryList = categories.split(' ');
                    const shouldShow = filterValue === 'all' || categoryList.includes(filterValue);
                    console.log(`Card ${index}: Should show = ${shouldShow}`);
                    
                    if (shouldShow) {
                        // Show matching card with staggered animation
                        setTimeout(() => {
                            card.style.display = 'flex';
                            card.style.opacity = '1';
                            card.style.animation = 'fadeInCard 0.4s ease forwards';
                            console.log(`Card ${index}: Shown`);
                        }, visibleIndex * 50);
                        visibleIndex++;
                    } else {
                        // Hide non-matching card
                        setTimeout(() => {
                            card.style.display = 'none';
                            console.log(`Card ${index}: Hidden`);
                        }, 300);
                    }
                });
            } else {
                console.log('No PDF cards found on this page');
            }
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

    // Live Audio Stream Controls
    const volumeBtn = document.querySelector('.nymia-stream-controls .nymia-control-btn:nth-child(1)');
    const muteBtn = document.querySelector('.nymia-stream-controls .nymia-control-btn:nth-child(2)');
    const shareBtn = document.querySelector('.nymia-stream-controls .nymia-control-btn:nth-child(3)');
    const leaveBtn = document.querySelector('.nymia-stream-controls .nymia-control-leave');
    const audioButtons = document.querySelectorAll('.nymia-audio-btn');
    const fullscreenBtn = document.querySelector('.nymia-fullscreen-btn');

    // Volume toggle
    if (volumeBtn) {
        let volumeOn = true;
        volumeBtn.addEventListener('click', function() {
            volumeOn = !volumeOn;
            console.log('Volume:', volumeOn ? 'On' : 'Off');
            // You can add visual feedback here
        });
    }

    // Mute toggle
    if (muteBtn) {
        let isMuted = false;
        muteBtn.addEventListener('click', function() {
            isMuted = !isMuted;
            console.log('Muted:', isMuted);
            this.style.opacity = isMuted ? '0.5' : '1';
        });
    }

    // Share button
    if (shareBtn) {
        shareBtn.addEventListener('click', function() {
            console.log('Share stream');
            alert('Share link copied to clipboard!');
        });
    }

    // Leave stream
    if (leaveBtn) {
        leaveBtn.addEventListener('click', function() {
            if (confirm('Are you sure you want to leave this stream?')) {
                console.log('Leaving stream');
                window.location.href = '/';
            }
        });
    }

    // Audio buttons on thumbnails
    audioButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            console.log('Toggle audio for thumbnail');
            this.classList.toggle('muted');
        });
    });

    // Fullscreen button
    if (fullscreenBtn) {
        fullscreenBtn.addEventListener('click', function() {
            const videoArea = document.querySelector('.nymia-main-video');
            if (videoArea) {
                if (document.fullscreenElement) {
                    document.exitFullscreen();
                } else {
                    videoArea.requestFullscreen().catch(err => {
                        console.log('Fullscreen error:', err);
                    });
                }
            }
        });
    }

    // Live chat send message
    const chatInput = document.querySelector('.nymia-chat-input-field');
    const sendBtn = document.querySelector('.nymia-send-btn');
    const chatMessages = document.querySelector('.nymia-chat-messages');

    if (sendBtn && chatInput && chatMessages) {
        sendBtn.addEventListener('click', function() {
            const message = chatInput.value.trim();
            if (message) {
                console.log('Sending message:', message);
                // Add message to chat (you can implement this)
                chatInput.value = '';
            }
        });

        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendBtn.click();
            }
        });
    }
});
