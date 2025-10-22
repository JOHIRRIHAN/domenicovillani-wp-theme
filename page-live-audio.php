<?php
/**
 * Template for displaying Live Audio Streaming page
 */

get_header(); ?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-live-audio-wrapper">
            <!-- Stream Header -->
            <div class="nymia-stream-header">
                <!-- Left - Host Info -->
                <div class="nymia-host-info">
                    <div class="nymia-host-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/host-avatar.jpg" alt="Host Avatar" />
                    </div>
                    <div class="nymia-host-details">
                        <p class="nymia-host-label">Hosted by</p>
                        <h2 class="nymia-host-name">Jenny Brag</h2>
                    </div>
                    <button class="nymia-btn-gradient">Follow</button>
                </div>

                <!-- Right - Participants -->
                <div class="nymia-participants">
                    <div class="nymia-participant-avatars">
                        <div class="nymia-participant-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/user-avatar-1.jpg" alt="User 1" />
                        </div>
                        <div class="nymia-participant-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/user-avatar-1.jpg" alt="User 2" />
                        </div>
                        <div class="nymia-participant-count">
                            <span>24+</span>
                        </div>
                    </div>
                    <button class="nymia-btn-outline">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <line x1="18" x2="18" y1="4" y2="6"></line>
                            <line x1="20" x2="16" y1="5" y2="5"></line>
                        </svg>
                        Add User
                    </button>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="nymia-live-content">
                <!-- Video Display Area -->
                <div class="nymia-video-area">
                    <h1 class="nymia-stream-title">Lets Enjoy this Night</h1>

                    <!-- Main Video Area -->
                    <div class="nymia-main-video">
                        <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/host-main.jpg" alt="Live stream" />
                        
                        <!-- Center Avatar Overlay -->
                        <div class="nymia-center-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/host-avatar.jpg" alt="Host" />
                        </div>

                        <!-- Fullscreen Button -->
                        <button class="nymia-fullscreen-btn">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Thumbnail Streams -->
                    <div class="nymia-thumbnail-streams">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                        <div class="nymia-thumbnail-stream">
                            <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/stream-thumb.jpg" alt="Stream <?php echo $i; ?>" />
                            
                            <!-- User Label -->
                            <div class="nymia-stream-label">
                                <div class="nymia-stream-indicator"></div>
                                <span>Jimi Jams</span>
                            </div>

                            <!-- Audio Icon -->
                            <button class="nymia-audio-btn">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                </svg>
                            </button>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Live Chat -->
                <div class="nymia-live-chat">
                    <!-- Chat Header -->
                    <div class="nymia-chat-header">
                        <div class="nymia-live-indicator"></div>
                        <h2 class="nymia-chat-title">Live Chat</h2>
                        <span class="nymia-message-count">6 messages</span>
                    </div>

                    <!-- Messages -->
                    <div class="nymia-chat-messages">
                        <div class="nymia-chat-message">
                            <div class="nymia-message-avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/user-avatar-1.jpg" alt="User" />
                            </div>
                            <div class="nymia-message-content">
                                <div class="nymia-message-header">
                                    <span class="nymia-message-user">Aber</span>
                                    <span class="nymia-message-time">3min</span>
                                </div>
                                <div class="nymia-message-bubble">
                                    <p>I love you</p>
                                </div>
                            </div>
                        </div>

                        <div class="nymia-chat-message nymia-message-current">
                            <div class="nymia-message-avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/user-avatar-1.jpg" alt="User" />
                            </div>
                            <div class="nymia-message-content">
                                <div class="nymia-message-header">
                                    <span class="nymia-message-user">Aber</span>
                                    <span class="nymia-message-time">3min</span>
                                </div>
                                <div class="nymia-message-bubble nymia-message-bubble-current">
                                    <p>I love you 2 guys</p>
                                </div>
                            </div>
                        </div>

                        <div class="nymia-chat-message">
                            <div class="nymia-message-avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/user-avatar-1.jpg" alt="User" />
                            </div>
                            <div class="nymia-message-content">
                                <div class="nymia-message-header">
                                    <span class="nymia-message-user">Aber</span>
                                    <span class="nymia-message-time">3min</span>
                                </div>
                                <div class="nymia-message-bubble">
                                    <p>I love you</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Input -->
                    <div class="nymia-chat-input">
                        <div class="nymia-input-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/nightglow-layout-main/src/assets/user-avatar-1.jpg" alt="User" />
                        </div>
                        <div class="nymia-input-wrapper">
                            <input type="text" placeholder="Write message here..." class="nymia-chat-input-field" />
                            <button class="nymia-send-btn">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m22 2-7 20-4-9-9-4Z"></path>
                                    <path d="M22 2 11 13"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stream Controls -->
            <div class="nymia-stream-controls">
                <button class="nymia-control-btn" title="Volume">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                        <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                    </svg>
                </button>
                
                <button class="nymia-control-btn" title="Mute">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3Z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" x2="12" y1="19" y2="22"></line>
                    </svg>
                </button>
                
                <button class="nymia-control-btn" title="Share">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="18" cy="5" r="3"></circle>
                        <circle cx="6" cy="12" r="3"></circle>
                        <circle cx="18" cy="19" r="3"></circle>
                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                    </svg>
                </button>
                
                <button class="nymia-control-btn nymia-control-leave" title="Leave">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16,17 21,12 16,7"></polyline>
                        <line x1="21" x2="9" y1="12" y2="12"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
