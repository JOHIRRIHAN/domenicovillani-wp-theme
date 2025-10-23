<?php
/**
 * Template Name: Single Audio
 * Template for displaying individual audio creator page
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
                        <?php 
                        $creator_image = $_GET['creator_image'] ?? '';
                        if ($creator_image && filter_var($creator_image, FILTER_VALIDATE_URL)): ?>
                            <img src="<?php echo esc_url($creator_image); ?>" alt="<?php echo esc_attr($_GET['creator_name'] ?? 'Creator'); ?>" />
                        <?php else: ?>
                            <div class="nymia-dummy-creator-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                        <?php endif; ?>
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
            
            <!-- Audio Player Controls -->
            <div class="nymia-audio-player-controls">
                <div class="nymia-player-main-controls">
                    <button class="nymia-player-btn nymia-prev-btn" id="prevBtn">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/>
                        </svg>
                    </button>
                    
                    <button class="nymia-player-btn nymia-main-play-btn" id="mainPlayBtn">
                        <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        <svg class="pause-icon" viewBox="0 0 24 24" fill="currentColor" style="display: none;">
                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                        </svg>
                    </button>
                    
                    <button class="nymia-player-btn nymia-next-btn" id="nextBtn">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/>
                        </svg>
                    </button>
                </div>
                
                <div class="nymia-player-progress-section">
                    <div class="nymia-current-track-info">
                        <div class="nymia-current-track-title">Select a track to play</div>
                        <div class="nymia-current-track-artist">Artist</div>
                    </div>
                    
                    <div class="nymia-player-progress-container">
                        <span class="nymia-current-time">0:00</span>
                        <div class="nymia-player-progress-bar" id="mainProgressBar">
                            <div class="nymia-player-progress-fill" id="mainProgressFill"></div>
                        </div>
                        <span class="nymia-total-time">0:00</span>
                    </div>
                </div>
                
                <div class="nymia-player-volume-section">
                    <button class="nymia-player-btn nymia-volume-btn" id="volumeBtn">
                        <svg class="volume-high" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
                        </svg>
                        <svg class="volume-mute" viewBox="0 0 24 24" fill="currentColor" style="display: none;">
                            <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
                        </svg>
                    </button>
                    
                    <div class="nymia-volume-slider-container">
                        <input type="range" class="nymia-volume-slider" id="volumeSlider" min="0" max="100" value="70">
                    </div>
                </div>
            </div>
            
            <!-- Track List -->
            <div class="nymia-audio-track-list">
                <?php 
                // Get creator name from URL
                $creator_name = $_GET['creator_name'] ?? 'Mick Gobline';
                
                // Creator-specific track data
                $creator_tracks = array(
                    'Kimberly' => array(
                        array('number' => 1, 'title' => 'Midnight Whispers', 'artist' => 'Kimberly', 'date' => 'Dec 15, 2023', 'duration' => '4:32'),
                        array('number' => 2, 'title' => 'Silent Dreams', 'artist' => 'Kimberly', 'date' => 'Dec 10, 2023', 'duration' => '3:45'),
                        array('number' => 3, 'title' => 'Velvet Touch', 'artist' => 'Kimberly', 'date' => 'Dec 5, 2023', 'duration' => '5:12'),
                        array('number' => 4, 'title' => 'Moonlight Serenade', 'artist' => 'Kimberly', 'date' => 'Nov 28, 2023', 'duration' => '4:08'),
                        array('number' => 5, 'title' => 'Soft Seduction', 'artist' => 'Kimberly', 'date' => 'Nov 20, 2023', 'duration' => '4:15'),
                        array('number' => 6, 'title' => 'Whispered Promises', 'artist' => 'Kimberly', 'date' => 'Nov 15, 2023', 'duration' => '3:58'),
                        array('number' => 7, 'title' => 'Tender Embrace', 'artist' => 'Kimberly', 'date' => 'Nov 10, 2023', 'duration' => '4:22'),
                        array('number' => 8, 'title' => 'Silent Pleasures', 'artist' => 'Kimberly', 'date' => 'Nov 5, 2023', 'duration' => '3:35'),
                        array('number' => 9, 'title' => 'Nighttime Desires', 'artist' => 'Kimberly', 'date' => 'Oct 30, 2023', 'duration' => '4:18'),
                        array('number' => 10, 'title' => 'Gentle Caress', 'artist' => 'Kimberly', 'date' => 'Oct 25, 2023', 'duration' => '3:52'),
                    ),
                    'Sophia' => array(
                        array('number' => 1, 'title' => 'Passionate Nights', 'artist' => 'Sophia', 'date' => 'Dec 12, 2023', 'duration' => '4:15'),
                        array('number' => 2, 'title' => 'Sweet Surrender', 'artist' => 'Sophia', 'date' => 'Dec 8, 2023', 'duration' => '3:58'),
                        array('number' => 3, 'title' => 'Tender Moments', 'artist' => 'Sophia', 'date' => 'Dec 3, 2023', 'duration' => '4:22'),
                        array('number' => 4, 'title' => 'Gentle Whispers', 'artist' => 'Sophia', 'date' => 'Nov 25, 2023', 'duration' => '3:35'),
                        array('number' => 5, 'title' => 'Intimate Conversations', 'artist' => 'Sophia', 'date' => 'Nov 18, 2023', 'duration' => '4:28'),
                        array('number' => 6, 'title' => 'Loving Touch', 'artist' => 'Sophia', 'date' => 'Nov 12, 2023', 'duration' => '3:47'),
                        array('number' => 7, 'title' => 'Romantic Interlude', 'artist' => 'Sophia', 'date' => 'Nov 8, 2023', 'duration' => '4:35'),
                        array('number' => 8, 'title' => 'Sensual Awakening', 'artist' => 'Sophia', 'date' => 'Nov 3, 2023', 'duration' => '3:41'),
                        array('number' => 9, 'title' => 'Passionate Embrace', 'artist' => 'Sophia', 'date' => 'Oct 28, 2023', 'duration' => '4:12'),
                        array('number' => 10, 'title' => 'Sweet Dreams', 'artist' => 'Sophia', 'date' => 'Oct 22, 2023', 'duration' => '3:55'),
                    ),
                    'Emma' => array(
                        array('number' => 1, 'title' => 'Sensual Stories', 'artist' => 'Emma', 'date' => 'Dec 14, 2023', 'duration' => '4:28'),
                        array('number' => 2, 'title' => 'Intimate Tales', 'artist' => 'Emma', 'date' => 'Dec 9, 2023', 'duration' => '3:52'),
                        array('number' => 3, 'title' => 'Romantic Dreams', 'artist' => 'Emma', 'date' => 'Dec 4, 2023', 'duration' => '4:18'),
                        array('number' => 4, 'title' => 'Loving Embrace', 'artist' => 'Emma', 'date' => 'Nov 30, 2023', 'duration' => '3:41'),
                        array('number' => 5, 'title' => 'Passionate Whispers', 'artist' => 'Emma', 'date' => 'Nov 22, 2023', 'duration' => '4:15'),
                        array('number' => 6, 'title' => 'Tender Seduction', 'artist' => 'Emma', 'date' => 'Nov 16, 2023', 'duration' => '3:58'),
                        array('number' => 7, 'title' => 'Silent Desires', 'artist' => 'Emma', 'date' => 'Nov 11, 2023', 'duration' => '4:22'),
                        array('number' => 8, 'title' => 'Gentle Pleasures', 'artist' => 'Emma', 'date' => 'Nov 6, 2023', 'duration' => '3:35'),
                        array('number' => 9, 'title' => 'Intimate Moments', 'artist' => 'Emma', 'date' => 'Oct 31, 2023', 'duration' => '4:18'),
                        array('number' => 10, 'title' => 'Romantic Nights', 'artist' => 'Emma', 'date' => 'Oct 26, 2023', 'duration' => '3:52'),
                    ),
                    'Isabella' => array(
                        array('number' => 1, 'title' => 'Erotic Fantasies', 'artist' => 'Isabella', 'date' => 'Dec 13, 2023', 'duration' => '4:35'),
                        array('number' => 2, 'title' => 'Forbidden Desires', 'artist' => 'Isabella', 'date' => 'Dec 7, 2023', 'duration' => '3:47'),
                        array('number' => 3, 'title' => 'Passionate Love', 'artist' => 'Isabella', 'date' => 'Dec 2, 2023', 'duration' => '4:25'),
                        array('number' => 4, 'title' => 'Intimate Secrets', 'artist' => 'Isabella', 'date' => 'Nov 27, 2023', 'duration' => '3:55'),
                        array('number' => 5, 'title' => 'Seductive Whispers', 'artist' => 'Isabella', 'date' => 'Nov 19, 2023', 'duration' => '4:12'),
                        array('number' => 6, 'title' => 'Tender Seduction', 'artist' => 'Isabella', 'date' => 'Nov 14, 2023', 'duration' => '3:48'),
                        array('number' => 7, 'title' => 'Passionate Nights', 'artist' => 'Isabella', 'date' => 'Nov 9, 2023', 'duration' => '4:30'),
                        array('number' => 8, 'title' => 'Intimate Desires', 'artist' => 'Isabella', 'date' => 'Nov 4, 2023', 'duration' => '3:42'),
                        array('number' => 9, 'title' => 'Romantic Seduction', 'artist' => 'Isabella', 'date' => 'Oct 29, 2023', 'duration' => '4:20'),
                        array('number' => 10, 'title' => 'Sweet Temptation', 'artist' => 'Isabella', 'date' => 'Oct 24, 2023', 'duration' => '3:58'),
                    ),
                );
                
                // Default tracks if creator not found (5 English Songs)
                $audio_tracks = $creator_tracks[$creator_name] ?? array(
                    array('number' => 1, 'title' => 'Summer Dreams', 'artist' => 'Alex Johnson', 'date' => 'Dec 20, 2023', 'duration' => '3:45'),
                    array('number' => 2, 'title' => 'Midnight City', 'artist' => 'Sarah Williams', 'date' => 'Dec 18, 2023', 'duration' => '4:12'),
                    array('number' => 3, 'title' => 'Electric Love', 'artist' => 'Mike Chen', 'date' => 'Dec 15, 2023', 'duration' => '3:58'),
                    array('number' => 4, 'title' => 'Golden Hour', 'artist' => 'Emma Davis', 'date' => 'Dec 12, 2023', 'duration' => '4:25'),
                    array('number' => 5, 'title' => 'Neon Lights', 'artist' => 'David Park', 'date' => 'Dec 10, 2023', 'duration' => '3:32'),
                );
                
                foreach ($audio_tracks as $track): ?>
                <div class="nymia-audio-track-item" data-track="<?php echo esc_attr($track['number']); ?>" data-title="<?php echo esc_attr($track['title']); ?>" data-artist="<?php echo esc_attr($track['artist']); ?>" data-duration="<?php echo esc_attr($track['duration']); ?>">
                    <div class="nymia-track-number"><?php echo esc_html($track['number']); ?></div>
                    
                    <div class="nymia-track-thumbnail">
                        <div class="nymia-dummy-track-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="nymia-track-info">
                        <h4 class="nymia-track-title"><?php echo esc_html($track['title']); ?></h4>
                        <p class="nymia-track-artist"><?php echo esc_html($track['artist']); ?></p>
                    </div>
                    
                    <div class="nymia-track-date"><?php echo esc_html($track['date']); ?></div>
                    
                    <div class="nymia-track-controls">
                        <div class="nymia-clock-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
                            </svg>
                        </div>
                        
                        <div class="nymia-progress-time">0:00</div>
                        
                        <div class="nymia-track-progress">
                            <div class="nymia-progress-bar">
                                <div class="nymia-progress-fill"></div>
                            </div>
                        </div>
                        
                        <button class="nymia-play-btn" data-track="<?php echo esc_attr($track['number']); ?>">
                            <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            <svg class="pause-icon" viewBox="0 0 24 24" fill="currentColor" style="display: none;">
                                <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                            </svg>
                        </button>
                        
                        <div class="nymia-track-duration"><?php echo esc_html($track['duration']); ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Hidden Audio Elements for Real Playback -->
<audio id="audioPlayer" preload="none">
    <source src="" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<!-- Sample Audio Files (using free audio from freesound.org) -->
<audio id="track1" preload="none">
    <source src="https://www.soundjay.com/misc/sounds/bell-ringing-05.wav" type="audio/wav">
</audio>
<audio id="track2" preload="none">
    <source src="https://www.soundjay.com/misc/sounds/bell-ringing-05.wav" type="audio/wav">
</audio>
<audio id="track3" preload="none">
    <source src="https://www.soundjay.com/misc/sounds/bell-ringing-05.wav" type="audio/wav">
</audio>
<audio id="track4" preload="none">
    <source src="https://www.soundjay.com/misc/sounds/bell-ringing-05.wav" type="audio/wav">
</audio>
<audio id="track5" preload="none">
    <source src="https://www.soundjay.com/misc/sounds/bell-ringing-05.wav" type="audio/wav">
</audio>

<?php get_footer(); ?>
