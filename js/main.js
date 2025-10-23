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

    // Audio card click functionality
    const audioCards = document.querySelectorAll('.nymia-audio-card, .nymia-creator-card');
    audioCards.forEach(card => {
        card.addEventListener('click', function() {
            // Get creator data from the card
            const creatorName = this.querySelector('.nymia-creator-name')?.textContent || 'Creator';
            const creatorImage = this.querySelector('.nymia-card-image img')?.src || '';
            const views = this.querySelector('.nymia-creator-views span')?.textContent || '1.2k';
            
            // Create URL with parameters
            const params = new URLSearchParams({
                'creator_name': creatorName,
                'creator_image': creatorImage,
                'views': views,
                'audio_title': creatorName + "'s Audio Collection"
            });
            
            // Redirect to single audio page
            window.location.href = '/domenicovillani/single-audio/?' + params.toString();
        });
    });

    // Audio Player Functionality
    let currentTrack = null;
    let currentTime = 0;
    let isPlaying = false;
    let progressInterval = null;

    // Play/Pause functionality
    const playButtons = document.querySelectorAll('.nymia-play-btn');
    playButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const trackNumber = this.getAttribute('data-track');
            const trackItem = this.closest('.nymia-audio-track-item');
            
            // If clicking the same track, toggle play/pause
            if (currentTrack === trackNumber) {
                togglePlayPause();
            } else {
                // Stop current track and play new one
                stopCurrentTrack();
                playTrack(trackNumber, trackItem);
            }
        });
    });

    function playTrack(trackNumber, trackItem) {
        currentTrack = trackNumber;
        isPlaying = true;
        
        // Update UI
        trackItem.classList.add('playing');
        updatePlayButton(trackItem, true);
        
        // Start progress simulation
        startProgress(trackItem);
        
        console.log('Playing track:', trackNumber);
    }

    function togglePlayPause() {
        if (isPlaying) {
            pauseTrack();
        } else {
            resumeTrack();
        }
    }

    function pauseTrack() {
        isPlaying = false;
        const currentTrackItem = document.querySelector(`[data-track="${currentTrack}"]`);
        if (currentTrackItem) {
            updatePlayButton(currentTrackItem, false);
            stopProgress();
        }
        console.log('Paused track:', currentTrack);
    }

    function resumeTrack() {
        isPlaying = true;
        const currentTrackItem = document.querySelector(`[data-track="${currentTrack}"]`);
        if (currentTrackItem) {
            updatePlayButton(currentTrackItem, true);
            startProgress(currentTrackItem);
        }
        console.log('Resumed track:', currentTrack);
    }

    function stopCurrentTrack() {
        if (currentTrack) {
            const currentTrackItem = document.querySelector(`[data-track="${currentTrack}"]`);
            if (currentTrackItem) {
                currentTrackItem.classList.remove('playing');
                updatePlayButton(currentTrackItem, false);
                resetProgress(currentTrackItem);
            }
        }
        stopProgress();
        currentTime = 0;
    }

    function updatePlayButton(trackItem, isPlaying) {
        const playBtn = trackItem.querySelector('.nymia-play-btn');
        const playIcon = playBtn.querySelector('.play-icon');
        const pauseIcon = playBtn.querySelector('.pause-icon');
        
        if (isPlaying) {
            playIcon.style.display = 'none';
            pauseIcon.style.display = 'block';
        } else {
            playIcon.style.display = 'block';
            pauseIcon.style.display = 'none';
        }
    }

    function startProgress(trackItem) {
        const duration = trackItem.getAttribute('data-duration');
        const durationSeconds = parseDuration(duration);
        
        progressInterval = setInterval(() => {
            if (isPlaying) {
                currentTime += 0.1;
                const progressPercent = (currentTime / durationSeconds) * 100;
                
                updateProgressBar(trackItem, progressPercent);
                updateTimeDisplay(trackItem, currentTime);
                
                // Auto-stop when track ends
                if (currentTime >= durationSeconds) {
                    stopCurrentTrack();
                    // Auto-play next track
                    playNextTrack();
                }
            }
        }, 100);
    }

    function stopProgress() {
        if (progressInterval) {
            clearInterval(progressInterval);
            progressInterval = null;
        }
    }

    function resetProgress(trackItem) {
        updateProgressBar(trackItem, 0);
        updateTimeDisplay(trackItem, 0);
    }

    function updateProgressBar(trackItem, percent) {
        const progressFill = trackItem.querySelector('.nymia-progress-fill');
        if (progressFill) {
            progressFill.style.width = Math.min(percent, 100) + '%';
        }
    }

    function updateTimeDisplay(trackItem, seconds) {
        const timeDisplay = trackItem.querySelector('.nymia-progress-time');
        if (timeDisplay) {
            timeDisplay.textContent = formatTime(seconds);
        }
    }

    function parseDuration(duration) {
        const parts = duration.split(':');
        return parseInt(parts[0]) * 60 + parseInt(parts[1]);
    }

    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${mins}:${secs.toString().padStart(2, '0')}`;
    }

    function playNextTrack() {
        if (currentTrack) {
            const nextTrackNumber = parseInt(currentTrack) + 1;
            const nextTrackItem = document.querySelector(`[data-track="${nextTrackNumber}"]`);
            if (nextTrackItem) {
                playTrack(nextTrackNumber, nextTrackItem);
            }
        }
    }

    // Enhanced Audio Player Functionality
    let audioPlayer = {
        currentTrack: null,
        currentTime: 0,
        duration: 0,
        isPlaying: false,
        volume: 0.7,
        progressInterval: null,
        
        init() {
            this.setupEventListeners();
            this.updateVolumeDisplay();
        },
        
        setupEventListeners() {
            // Main play button
            const mainPlayBtn = document.getElementById('mainPlayBtn');
            if (mainPlayBtn) {
                mainPlayBtn.addEventListener('click', () => this.toggleMainPlay());
            }
            
            // Previous/Next buttons
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            if (prevBtn) prevBtn.addEventListener('click', () => this.previousTrack());
            if (nextBtn) nextBtn.addEventListener('click', () => this.nextTrack());
            
            // Volume controls
            const volumeBtn = document.getElementById('volumeBtn');
            const volumeSlider = document.getElementById('volumeSlider');
            if (volumeBtn) volumeBtn.addEventListener('click', () => this.toggleMute());
            if (volumeSlider) {
                volumeSlider.addEventListener('input', (e) => this.setVolume(e.target.value / 100));
            }
            
            // Progress bar
            const progressBar = document.getElementById('mainProgressBar');
            if (progressBar) {
                progressBar.addEventListener('click', (e) => this.seekTo(e));
            }
        },
        
        toggleMainPlay() {
            if (this.isPlaying) {
                this.pause();
            } else {
                if (this.currentTrack) {
                    this.play();
                } else {
                    // Play first track if none selected
                    const firstTrack = document.querySelector('[data-track="1"]');
                    if (firstTrack) {
                        const trackNumber = firstTrack.getAttribute('data-track');
                        playTrack(trackNumber, firstTrack);
                    }
                }
            }
        },
        
        play() {
            this.isPlaying = true;
            this.updateMainPlayButton(true);
            this.startProgress();
        },
        
        pause() {
            this.isPlaying = false;
            this.updateMainPlayButton(false);
            this.stopProgress();
        },
        
        updateMainPlayButton(isPlaying) {
            const mainPlayBtn = document.getElementById('mainPlayBtn');
            if (mainPlayBtn) {
                const playIcon = mainPlayBtn.querySelector('.play-icon');
                const pauseIcon = mainPlayBtn.querySelector('.pause-icon');
                
                if (isPlaying) {
                    playIcon.style.display = 'none';
                    pauseIcon.style.display = 'block';
                } else {
                    playIcon.style.display = 'block';
                    pauseIcon.style.display = 'none';
                }
            }
        },
        
        setCurrentTrack(trackNumber, trackItem) {
            this.currentTrack = trackNumber;
            this.duration = this.parseDuration(trackItem.getAttribute('data-duration'));
            this.currentTime = 0;
            
            // Update current track info
            const title = trackItem.getAttribute('data-title');
            const artist = trackItem.getAttribute('data-artist');
            this.updateCurrentTrackInfo(title, artist);
            this.updateTotalTime();
        },
        
        updateCurrentTrackInfo(title, artist) {
            const titleEl = document.querySelector('.nymia-current-track-title');
            const artistEl = document.querySelector('.nymia-current-track-artist');
            
            if (titleEl) titleEl.textContent = title;
            if (artistEl) artistEl.textContent = artist;
        },
        
        startProgress() {
            this.progressInterval = setInterval(() => {
                if (this.isPlaying) {
                    this.currentTime += 0.1;
                    const progressPercent = (this.currentTime / this.duration) * 100;
                    
                    this.updateMainProgress(progressPercent);
                    this.updateCurrentTime();
                    
                    // Auto-stop when track ends
                    if (this.currentTime >= this.duration) {
                        this.pause();
                        this.nextTrack();
                    }
                }
            }, 100);
        },
        
        stopProgress() {
            if (this.progressInterval) {
                clearInterval(this.progressInterval);
                this.progressInterval = null;
            }
        },
        
        updateMainProgress(percent) {
            const progressFill = document.getElementById('mainProgressFill');
            if (progressFill) {
                progressFill.style.width = Math.min(percent, 100) + '%';
            }
        },
        
        updateCurrentTime() {
            const currentTimeEl = document.querySelector('.nymia-current-time');
            if (currentTimeEl) {
                currentTimeEl.textContent = this.formatTime(this.currentTime);
            }
        },
        
        updateTotalTime() {
            const totalTimeEl = document.querySelector('.nymia-total-time');
            if (totalTimeEl) {
                totalTimeEl.textContent = this.formatTime(this.duration);
            }
        },
        
        seekTo(event) {
            const progressBar = event.currentTarget;
            const rect = progressBar.getBoundingClientRect();
            const clickX = event.clientX - rect.left;
            const width = rect.width;
            const percentage = clickX / width;
            
            this.currentTime = this.duration * percentage;
            const progressPercent = (this.currentTime / this.duration) * 100;
            this.updateMainProgress(progressPercent);
            this.updateCurrentTime();
        },
        
        setVolume(volume) {
            this.volume = volume;
            this.updateVolumeDisplay();
        },
        
        toggleMute() {
            if (this.volume > 0) {
                this.lastVolume = this.volume;
                this.setVolume(0);
            } else {
                this.setVolume(this.lastVolume || 0.7);
            }
        },
        
        updateVolumeDisplay() {
            const volumeBtn = document.getElementById('volumeBtn');
            const volumeHigh = volumeBtn?.querySelector('.volume-high');
            const volumeMute = volumeBtn?.querySelector('.volume-mute');
            
            if (this.volume === 0) {
                if (volumeHigh) volumeHigh.style.display = 'none';
                if (volumeMute) volumeMute.style.display = 'block';
            } else {
                if (volumeHigh) volumeHigh.style.display = 'block';
                if (volumeMute) volumeMute.style.display = 'none';
            }
            
            const volumeSlider = document.getElementById('volumeSlider');
            if (volumeSlider) {
                volumeSlider.value = this.volume * 100;
            }
        },
        
        previousTrack() {
            if (this.currentTrack) {
                const prevTrackNumber = parseInt(this.currentTrack) - 1;
                const prevTrackItem = document.querySelector(`[data-track="${prevTrackNumber}"]`);
                if (prevTrackItem) {
                    playTrack(prevTrackNumber, prevTrackItem);
                }
            }
        },
        
        nextTrack() {
            if (this.currentTrack) {
                const nextTrackNumber = parseInt(this.currentTrack) + 1;
                const nextTrackItem = document.querySelector(`[data-track="${nextTrackNumber}"]`);
                if (nextTrackItem) {
                    playTrack(nextTrackNumber, nextTrackItem);
                }
            }
        },
        
        parseDuration(duration) {
            const parts = duration.split(':');
            return parseInt(parts[0]) * 60 + parseInt(parts[1]);
        },
        
        formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins}:${secs.toString().padStart(2, '0')}`;
        }
    };
    
    // Initialize audio player when DOM is loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => audioPlayer.init());
    } else {
        audioPlayer.init();
    }
    
    // Real Audio Functionality
    let currentAudio = null;
    let audioElements = {};
    
    // Initialize audio elements
    function initAudioElements() {
        for (let i = 1; i <= 5; i++) {
            const audio = document.getElementById(`track${i}`);
            if (audio) {
                audioElements[i] = audio;
                
                // Add event listeners for audio events
                audio.addEventListener('loadeddata', () => {
                    console.log(`Track ${i} loaded`);
                });
                
                audio.addEventListener('ended', () => {
                    console.log(`Track ${i} ended`);
                    stopCurrentTrack();
                    playNextTrack();
                });
                
                audio.addEventListener('error', (e) => {
                    console.log(`Error loading track ${i}:`, e);
                });
            }
        }
    }
    
    // Update the existing playTrack function to work with real audio
    const originalPlayTrack = playTrack;
    playTrack = function(trackNumber, trackItem) {
        // Stop current track
        stopCurrentTrack();
        
        // Set up new track
        currentTrack = trackNumber;
        isPlaying = true;
        
        // Update UI
        trackItem.classList.add('playing');
        updatePlayButton(trackItem, true);
        
        // Set up audio player
        audioPlayer.setCurrentTrack(trackNumber, trackItem);
        audioPlayer.play();
        
        // Play real audio
        playRealAudio(trackNumber);
        
        // Start progress simulation
        startProgress(trackItem);
        
        console.log('Playing track:', trackNumber);
    };
    
    function playRealAudio(trackNumber) {
        // Stop any currently playing audio
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        
        // Get the audio element for this track
        const audio = audioElements[trackNumber];
        if (audio) {
            currentAudio = audio;
            
            // Try to play the audio
            audio.play().then(() => {
                console.log(`Playing real audio for track ${trackNumber}`);
            }).catch((error) => {
                console.log(`Could not play audio for track ${trackNumber}:`, error);
                // Fallback: create a simple beep sound
                createBeepSound();
            });
        } else {
            console.log(`No audio element found for track ${trackNumber}`);
            // Fallback: create a simple beep sound
            createBeepSound();
        }
    }
    
    function createBeepSound() {
        // Create a simple beep sound using Web Audio API
        try {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.setValueAtTime(440, audioContext.currentTime); // A4 note
            oscillator.type = 'sine';
            
            gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.5);
            
            console.log('Playing beep sound');
        } catch (error) {
            console.log('Could not create beep sound:', error);
        }
    }
    
    function stopRealAudio() {
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
            currentAudio = null;
        }
    }
    
    // Update the stopCurrentTrack function to stop real audio
    const originalStopCurrentTrack = stopCurrentTrack;
    stopCurrentTrack = function() {
        originalStopCurrentTrack();
        stopRealAudio();
    };
    
    // Initialize audio elements when DOM is loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAudioElements);
    } else {
        initAudioElements();
    }

    // Filter button functionality (for dashboard, audio page, PDF page, etc.)
    const filterButtons = document.querySelectorAll('.nymia-filter-btn, .nymia-filter-tab');
    const sections = document.querySelectorAll('.nymia-section, .nymia-dashboard-section');
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
                    // Show all sections when "All" is selected
                    section.style.display = 'block';
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
