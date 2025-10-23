<?php
/**
 * Demo Single Audio Page
 * Direct access demo page matching the exact design
 */

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
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&h=800&fit=crop" alt="Creator" />
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
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBmaWxsPSIjRkYwMDAwIi8+Cjx0ZXh0IHg9IjMwIiB5PSIxNSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEwIiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+RU1JTkVNPC90ZXh0Pgo8cGF0aCBkPSJNMTAgMzBMMjAgMjBMMzAgMzBMMjAgNDBMMTAgMzBaIiBmaWxsPSIjMDAwMDAwIi8+CjxwYXRoIGQ9Ik0zMCAzMEw0MCAyMEw1MCAzMEw0MCA0MEwzMCAzMFoiIGZpbGw9IiMwMDAwMDAiLz4KPC9zdmc+" alt="EMINEM" />
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
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBmaWxsPSIjRkYwMDAwIi8+Cjx0ZXh0IHg9IjMwIiB5PSIxNSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEwIiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+RU1JTkVNPC90ZXh0Pgo8cGF0aCBkPSJNMTAgMzBMMjAgMjBMMzAgMzBMMjAgNDBMMTAgMzBaIiBmaWxsPSIjMDAwMDAwIi8+CjxwYXRoIGQ9Ik0zMCAzMEw0MCAyMEw1MCAzMEw0MCA0MEwzMCAzMFoiIGZpbGw9IiMwMDAwMDAiLz4KPC9zdmc+" alt="EMINEM" />
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
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBmaWxsPSIjRkYwMDAwIi8+Cjx0ZXh0IHg9IjMwIiB5PSIxNSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEwIiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+RU1JTkVNPC90ZXh0Pgo8cGF0aCBkPSJNMTAgMzBMMjAgMjBMMzAgMzBMMjAgNDBMMTAgMzBaIiBmaWxsPSIjMDAwMDAwIi8+CjxwYXRoIGQ9Ik0zMCAzMEw0MCAyMEw1MCAzMEw0MCA0MEwzMCAzMFoiIGZpbGw9IiMwMDAwMDAiLz4KPC9zdmc+" alt="EMINEM" />
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
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBmaWxsPSIjRkYwMDAwIi8+Cjx0ZXh0IHg9IjMwIiB5PSIxNSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEwIiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+RU1JTkVNPC90ZXh0Pgo8cGF0aCBkPSJNMTAgMzBMMjAgMjBMMzAgMzBMMjAgNDBMMTAgMzBaIiBmaWxsPSIjMDAwMDAwIi8+CjxwYXRoIGQ9Ik0zMCAzMEw0MCAyMEw1MCAzMEw0MCA0MEwzMCAzMFoiIGZpbGw9IiMwMDAwMDAiLz4KPC9zdmc+" alt="EMINEM" />
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
