<?php
/**
 * Demo Audio Page - Direct Access
 * This is a standalone demo page that can be accessed directly
 */

// Include WordPress
require_once('../../../wp-load.php');

get_header(); ?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-single-audio-page">
            <!-- Audio Player Header -->
            <div class="nymia-audio-player-header">
                <div class="nymia-audio-player-bg"></div>
                
                <div class="nymia-audio-player-content">
                    <!-- Creator Profile Image -->
                    <div class="nymia-audio-creator-image">
                        <div class="nymia-dummy-creator-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Creator Info -->
                    <div class="nymia-audio-creator-info">
                        <h1 class="nymia-audio-title">Enjoy the Night</h1>
                        <p class="nymia-audio-creator-name">Mick Gobline</p>
                        <button class="nymia-follow-btn">Follow</button>
                    </div>
                    
                    <!-- Engagement Stats -->
                    <div class="nymia-audio-stats">
                        <div class="nymia-stats-number">1.2M</div>
                        <div class="nymia-stats-label">People Enjoy this</div>
                    </div>
                </div>
            </div>
            
            <!-- Track List -->
            <div class="nymia-audio-track-list">
                <!-- Track 1 -->
                <div class="nymia-audio-track-item">
                    <div class="nymia-track-number">1</div>
                    <div class="nymia-track-thumbnail">
                        <div class="nymia-dummy-track-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="nymia-track-info">
                        <h4 class="nymia-track-title">Without Me</h4>
                        <p class="nymia-track-artist">Eminem</p>
                    </div>
                    <div class="nymia-track-date">May 15, 2002</div>
                    <div class="nymia-track-controls">
                        <div class="nymia-track-progress">
                            <div class="nymia-progress-bar"></div>
                            <div class="nymia-progress-time">0:00</div>
                        </div>
                        <button class="nymia-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                        <div class="nymia-track-duration">0:06</div>
                    </div>
                </div>
                
                <!-- Track 2 -->
                <div class="nymia-audio-track-item">
                    <div class="nymia-track-number">2</div>
                    <div class="nymia-track-thumbnail">
                        <div class="nymia-dummy-track-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="nymia-track-info">
                        <h4 class="nymia-track-title">Without Me</h4>
                        <p class="nymia-track-artist">Eminem</p>
                    </div>
                    <div class="nymia-track-date">May 15, 2002</div>
                    <div class="nymia-track-controls">
                        <div class="nymia-track-progress">
                            <div class="nymia-progress-bar"></div>
                            <div class="nymia-progress-time">0:00</div>
                        </div>
                        <button class="nymia-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                        <div class="nymia-track-duration">0:02</div>
                    </div>
                </div>
                
                <!-- Track 3 -->
                <div class="nymia-audio-track-item">
                    <div class="nymia-track-number">3</div>
                    <div class="nymia-track-thumbnail">
                        <div class="nymia-dummy-track-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="nymia-track-info">
                        <h4 class="nymia-track-title">Without Me</h4>
                        <p class="nymia-track-artist">Eminem</p>
                    </div>
                    <div class="nymia-track-date">May 15, 2002</div>
                    <div class="nymia-track-controls">
                        <div class="nymia-track-progress">
                            <div class="nymia-progress-bar"></div>
                            <div class="nymia-progress-time">0:00</div>
                        </div>
                        <button class="nymia-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                        <div class="nymia-track-duration">0:06</div>
                    </div>
                </div>
                
                <!-- Track 4 -->
                <div class="nymia-audio-track-item">
                    <div class="nymia-track-number">4</div>
                    <div class="nymia-track-thumbnail">
                        <div class="nymia-dummy-track-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="nymia-track-info">
                        <h4 class="nymia-track-title">Without Me</h4>
                        <p class="nymia-track-artist">Eminem</p>
                    </div>
                    <div class="nymia-track-date">May 15, 2002</div>
                    <div class="nymia-track-controls">
                        <div class="nymia-track-progress">
                            <div class="nymia-progress-bar"></div>
                            <div class="nymia-progress-time">0:00</div>
                        </div>
                        <button class="nymia-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                        <div class="nymia-track-duration">0:06</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
