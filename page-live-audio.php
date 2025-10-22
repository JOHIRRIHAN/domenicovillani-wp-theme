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
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&h=150&fit=crop&crop=faces" alt="Host Avatar" />
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
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&h=150&fit=crop&crop=faces" alt="User 1" />
                        </div>
                        <div class="nymia-participant-avatar">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=150&h=150&fit=crop&crop=faces" alt="User 2" />
                        </div>
                        <div class="nymia-participant-avatar">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=faces" alt="User 3" />
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
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=1200&h=675&fit=crop&crop=faces" alt="Live stream" />
                        
                        <!-- Center Avatar Overlay -->
                        <div class="nymia-center-avatar">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=faces" alt="Host" />
                        </div>

                        <!-- Fullscreen Button -->
                        <button class="nymia-fullscreen-btn">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                            </svg>
                        </button>

                        <!-- Stream Controls -->
                        <div class="nymia-stream-controls">
                            <button class="nymia-control-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
                                </svg>
                                <span>Volume</span>
                            </button>
                            
                            <button class="nymia-control-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"/>
                                </svg>
                                <span>Mute</span>
                            </button>
                            
                            <button class="nymia-control-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                                </svg>
                                <span>Share</span>
                            </button>
                            
                            <button class="nymia-control-btn nymia-control-leave">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                                </svg>
                                <span>Leave</span>
                            </button>
                        </div>
                    </div>

                    <!-- Thumbnail Streams -->
                    <div class="nymia-thumbnail-streams">
                        <div class="nymia-thumbnail-stream">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=225&fit=crop&crop=faces" alt="Stream 1" />
                            
                            <!-- Audio Icon -->
                            <button class="nymia-audio-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                </svg>
                            </button>
                            
                            <!-- User Label -->
                            <div class="nymia-stream-label">
                                <div class="nymia-stream-indicator"></div>
                                <span>Jimi Jams</span>
                            </div>
                        </div>
                        
                        <div class="nymia-thumbnail-stream">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=225&fit=crop&crop=faces" alt="Stream 2" />
                            
                            <!-- Audio Icon -->
                            <button class="nymia-audio-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                </svg>
                            </button>
                            
                            <!-- User Label -->
                            <div class="nymia-stream-label">
                                <div class="nymia-stream-indicator"></div>
                                <span>Sarah Miller</span>
                            </div>
                        </div>
                        
                        <div class="nymia-thumbnail-stream">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=225&fit=crop&crop=faces" alt="Stream 3" />
                            
                            <!-- Audio Icon -->
                            <button class="nymia-audio-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                </svg>
                            </button>
                            
                            <!-- User Label -->
                            <div class="nymia-stream-label">
                                <div class="nymia-stream-indicator"></div>
                                <span>Emma Rose</span>
                            </div>
                        </div>
                        
                        <div class="nymia-thumbnail-stream">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=225&fit=crop&crop=faces" alt="Stream 4" />
                            
                            <!-- Audio Icon -->
                            <button class="nymia-audio-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                </svg>
                            </button>
                            
                            <!-- User Label -->
                            <div class="nymia-stream-label">
                                <div class="nymia-stream-indicator"></div>
                                <span>Olivia Davis</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Chat -->
                <div class="nymia-live-chat">
                    <!-- Chat Header -->
                    <div class="nymia-chat-header">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <h2 class="nymia-chat-title">Live Chat</h2>
                        <span class="nymia-message-count">6 messages</span>
                    </div>

                    <!-- Messages -->
                    <div class="nymia-chat-messages">
                        <div class="nymia-chat-message">
                            <div class="nymia-message-avatar">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=faces" alt="User" />
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

                        <div class="nymia-chat-message">
                            <div class="nymia-message-avatar">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&h=150&fit=crop&crop=faces" alt="User" />
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
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&h=150&fit=crop&crop=faces" alt="User" />
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
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=150&h=150&fit=crop&crop=faces" alt="User" />
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

                        <div class="nymia-chat-message">
                            <div class="nymia-message-avatar">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=faces" alt="User" />
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
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&h=150&fit=crop&crop=faces" alt="User" />
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
        </div>
    </div>
</div>

<?php get_footer(); ?>
