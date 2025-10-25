<?php
/**
 * Template Name: Create
 * Description: Create new content - Go Live, Audio, or Text
 */

get_header();
?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-create-container">
            <div class="nymia-create-main">
                <!-- Content Type Tabs -->
                <div class="nymia-create-tabs">
                    <button type="button" class="nymia-create-tab active" data-tab="live">
                        <?php esc_html_e('Go Live', 'nymia'); ?>
                    </button>
                    <button type="button" class="nymia-create-tab" data-tab="audio">
                        <?php esc_html_e('Audio', 'nymia'); ?>
                    </button>
                    <button type="button" class="nymia-create-tab" data-tab="text">
                        <?php esc_html_e('Text', 'nymia'); ?>
                    </button>
                </div>

                <!-- Go Live Content -->
                <div class="nymia-create-content active" id="content-live">
                    <div class="nymia-create-header">
                        <h1><?php esc_html_e('Live Audio Streaming', 'nymia'); ?></h1>
                        <p class="nymia-create-subtitle"><?php esc_html_e('Start your live audio session and connect with your followers', 'nymia'); ?></p>
                    </div>

                    <!-- Stream Control -->
                    <div class="nymia-stream-control">
                        <h2><?php esc_html_e('Stream Control', 'nymia'); ?></h2>
                        
                        <form id="streamSetupForm" class="nymia-stream-form">
                            <div class="nymia-form-group">
                                <label for="stream_title"><?php esc_html_e('Stream Title', 'nymia'); ?></label>
                                <input type="text" id="stream_title" name="stream_title" placeholder="<?php esc_attr_e('Enter Stream Title', 'nymia'); ?>" required />
                            </div>

                            <div class="nymia-stream-options">
                                <div class="nymia-paid-access">
                                    <label class="nymia-toggle-wrapper">
                                        <input type="checkbox" id="paid_access" name="paid_access" />
                                        <span class="nymia-toggle-slider"></span>
                                    </label>
                                    <span class="nymia-toggle-label"><?php esc_html_e('Paid Access', 'nymia'); ?></span>
                                    <div class="nymia-price-input">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        <input type="number" id="stream_price" name="stream_price" value="0.00" step="0.01" min="0" disabled />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="nymia-btn-continue">
                                <?php esc_html_e('Continue', 'nymia'); ?>
                            </button>
                        </form>
                    </div>

                    <!-- Discover Live Streams -->
                    <div class="nymia-discover-streams">
                        <h2><?php esc_html_e('Discover Live Streams', 'nymia'); ?></h2>
                        
                        <div class="nymia-live-streams-grid">
                            <?php
                            // Dummy live streams data
                            $live_streams = array(
                                array(
                                    'title' => 'Morning Motivation Session',
                                    'author' => 'Sarah Johnson',
                                    'viewers' => 123,
                                    'tips' => 50,
                                ),
                                array(
                                    'title' => 'Morning Motivation Session',
                                    'author' => 'Sarah Johnson',
                                    'viewers' => 123,
                                    'tips' => 50,
                                ),
                                array(
                                    'title' => 'Morning Motivation Session',
                                    'author' => 'Sarah Johnson',
                                    'viewers' => 123,
                                    'tips' => 50,
                                ),
                            );

                            foreach ($live_streams as $stream) :
                            ?>
                                <div class="nymia-live-stream-card">
                                    <div class="nymia-live-badge">
                                        <span class="nymia-live-dot"></span>
                                        <?php esc_html_e('Live', 'nymia'); ?>
                                    </div>
                                    <button type="button" class="nymia-join-btn">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"></path>
                                        </svg>
                                        <?php esc_html_e('Join', 'nymia'); ?>
                                    </button>
                                    
                                    <div class="nymia-stream-info">
                                        <h3><?php echo esc_html($stream['title']); ?></h3>
                                        <p class="nymia-stream-author"><?php echo esc_html('by ' . $stream['author']); ?></p>
                                        
                                        <div class="nymia-stream-stats">
                                            <span class="nymia-stat-item">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                <?php echo esc_html($stream['viewers']); ?>
                                            </span>
                                            <span class="nymia-stat-item">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                                </svg>
                                                <?php echo esc_html($stream['tips']); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Audio Content -->
                <div class="nymia-create-content" id="content-audio">
                    <div class="nymia-create-header">
                        <h1><?php esc_html_e('Upload Audio Post', 'nymia'); ?></h1>
                        <p class="nymia-create-subtitle"><?php esc_html_e('Share your audio with your audience.', 'nymia'); ?></p>
                    </div>

                    <!-- Stream Control -->
                    <div class="nymia-stream-control">
                        <h2><?php esc_html_e('Stream Control', 'nymia'); ?></h2>
                        
                        <form id="audioUploadForm" class="nymia-stream-form">
                            <div class="nymia-form-group">
                                <label for="audio_title"><?php esc_html_e('Stream Title', 'nymia'); ?></label>
                                <input type="text" id="audio_title" name="audio_title" placeholder="<?php esc_attr_e('Enter Stream Title', 'nymia'); ?>" required />
                            </div>

                            <div class="nymia-stream-options">
                                <div class="nymia-paid-access">
                                    <label class="nymia-toggle-wrapper">
                                        <input type="checkbox" id="audio_paid_access" name="audio_paid_access" />
                                        <span class="nymia-toggle-slider"></span>
                                    </label>
                                    <span class="nymia-toggle-label"><?php esc_html_e('Paid Access', 'nymia'); ?></span>
                                    <div class="nymia-price-input">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        <input type="number" id="audio_price" name="audio_price" value="0.00" step="0.01" min="0" disabled />
                                    </div>
                                </div>
                            </div>

                            <!-- Audio Upload Mode Tabs -->
                            <div class="nymia-upload-mode-tabs">
                                <button type="button" class="nymia-upload-mode-btn active" data-mode="upload">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" y1="3" x2="12" y2="15"></line>
                                    </svg>
                                    <span><?php esc_html_e('Upload File', 'nymia'); ?></span>
                                </button>
                                <button type="button" class="nymia-upload-mode-btn" data-mode="record">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span><?php esc_html_e('Record Audio', 'nymia'); ?></span>
                                </button>
                            </div>
                            
                            <!-- File Upload Area -->
                            <div class="nymia-upload-area active" id="audioUploadArea">
                                <input type="file" id="audioFileInput" name="audio_file" accept="audio/*" hidden />
                                <div class="nymia-upload-content">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" y1="3" x2="12" y2="15"></line>
                                    </svg>
                                    <p class="nymia-upload-text"><?php esc_html_e('Drop file here or click to browse', 'nymia'); ?></p>
                                    <p class="nymia-upload-formats"><?php esc_html_e('Supported formats: MP3, WAV, OGG, M4A, and more', 'nymia'); ?></p>
                                </div>
                                <div class="nymia-upload-progress" style="display: none;">
                                    <div class="nymia-progress-bar">
                                        <div class="nymia-progress-fill"></div>
                                    </div>
                                    <span class="nymia-progress-text">0%</span>
                                </div>
                            </div>
                            
                            <!-- Audio Recording Area -->
                            <div class="nymia-recording-area" id="audioRecordingArea" style="display: none;">
                                <div class="nymia-recording-controls">
                                    <button type="button" class="nymia-btn-record" id="recordBtn">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span><?php esc_html_e('Start Recording', 'nymia'); ?></span>
                                    </button>
                                    
                                    <button type="button" class="nymia-btn-stop" id="stopBtn" style="display: none;">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <rect x="6" y="6" width="12" height="12"></rect>
                                        </svg>
                                        <span><?php esc_html_e('Stop Recording', 'nymia'); ?></span>
                                    </button>
                                    
                                    <button type="button" class="nymia-btn-pause" id="pauseBtn" style="display: none;">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <rect x="6" y="4" width="4" height="16"></rect>
                                            <rect x="14" y="4" width="4" height="16"></rect>
                                        </svg>
                                        <span><?php esc_html_e('Pause', 'nymia'); ?></span>
                                    </button>
                                </div>
                                
                                <div class="nymia-recording-status">
                                    <div class="nymia-recording-indicator" id="recordingIndicator" style="display: none;">
                                        <span class="nymia-recording-dot"></span>
                                        <span><?php esc_html_e('Recording...', 'nymia'); ?></span>
                                    </div>
                                    <div class="nymia-recording-timer" id="recordingTimer">00:00</div>
                                </div>
                                
                                <div class="nymia-recording-visualizer">
                                    <canvas id="audioVisualizer" width="400" height="100"></canvas>
                                </div>
                                
                                <div class="nymia-recording-preview" id="recordingPreview" style="display: none;">
                                    <audio id="recordedAudio" controls></audio>
                                    <button type="button" class="nymia-btn-re-record"><?php esc_html_e('Record Again', 'nymia'); ?></button>
                                </div>
                            </div>

                            <button type="submit" class="nymia-btn-continue">
                                <?php esc_html_e('Continue', 'nymia'); ?>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="nymia-create-content" id="content-text">
                    <div class="nymia-create-header">
                        <h1><?php esc_html_e('Create Post', 'nymia'); ?></h1>
                        <p class="nymia-create-subtitle"><?php esc_html_e('Share your thoughts with your community', 'nymia'); ?></p>
                    </div>
                    <div class="nymia-upload-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <p><?php esc_html_e('Text post feature coming soon', 'nymia'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Dynamic Content -->
            <aside class="nymia-create-sidebar">
                <!-- Live Chat (for Go Live tab) -->
                <div class="nymia-sidebar-content live-chat-content active">
                    <div class="nymia-live-chat-header">
                        <h3><?php esc_html_e('Live Chat', 'nymia'); ?></h3>
                    </div>
                    
                    <div class="nymia-live-chat-body">
                        <div class="nymia-chat-empty-state">
                            <div class="nymia-waveform-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <div class="nymia-waveform-bars">
                                    <span class="bar bar1"></span>
                                    <span class="bar bar2"></span>
                                    <span class="bar bar3"></span>
                                </div>
                            </div>
                            <p><?php esc_html_e('Start streaming to see live stats', 'nymia'); ?></p>
                        </div>
                    </div>

                    <div class="nymia-live-chat-input">
                        <div class="nymia-chat-user-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.png" alt="<?php esc_attr_e('Your avatar', 'nymia'); ?>" />
                        </div>
                        <input type="text" placeholder="<?php esc_attr_e('Write message here', 'nymia'); ?>" />
                        <button type="button" class="nymia-chat-send-btn">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Recent Audio Posts (for Audio tab) -->
                <div class="nymia-sidebar-content audio-posts-content">
                    <div class="nymia-sidebar-header">
                        <h3><?php esc_html_e('Recent Audio Posts', 'nymia'); ?></h3>
                    </div>
                    
                    <div class="nymia-recent-audio-list">
                        <?php
                        // Get user's uploaded audio posts
                        $user_audio_posts = nymia_get_user_audio_posts();
                        
                        // If no user uploads, show demo data
                        if (empty($user_audio_posts)) {
                            $recent_audio = array(
                                array(
                                    'title' => 'Morning Motivation Session',
                                    'author' => 'Sarah Johnson',
                                    'duration' => '12:34',
                                    'category' => 'Lifestyle',
                                    'views' => 123,
                                    'rating' => 4.5,
                                    'url' => '',
                                ),
                                array(
                                    'title' => 'Fitness Routine Guide',
                                    'author' => 'Mike Davis',
                                    'duration' => '15:20',
                                    'category' => 'Sports',
                                    'views' => 89,
                                    'rating' => 4.2,
                                    'url' => '',
                                ),
                                array(
                                    'title' => 'Meditation for Beginners',
                                    'author' => 'Emma Wilson',
                                    'duration' => '20:45',
                                    'category' => 'Lifestyle',
                                    'views' => 156,
                                    'rating' => 4.8,
                                    'url' => '',
                                ),
                            );
                        } else {
                            $recent_audio = $user_audio_posts;
                        }

                        foreach ($recent_audio as $audio) :
                        ?>
                            <div class="nymia-audio-post-card-compact" data-audio-url="<?php echo esc_attr($audio['url']); ?>">
                                <div class="nymia-compact-audio-cover">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 18V5l12-2v13"></path>
                                        <circle cx="6" cy="18" r="3"></circle>
                                        <circle cx="18" cy="16" r="3"></circle>
                                    </svg>
                                    <button class="nymia-compact-play-btn">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="nymia-compact-audio-info">
                                    <h4 class="nymia-compact-title"><?php echo esc_html($audio['title']); ?></h4>
                                    <p class="nymia-compact-author"><?php echo esc_html($audio['author']); ?></p>
                                    
                                    <div class="nymia-compact-meta">
                                        <span class="nymia-compact-duration">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <?php echo esc_html($audio['duration']); ?>
                                        </span>
                                        <span class="nymia-compact-category"><?php echo esc_html($audio['category']); ?></span>
                                    </div>
                                    
                                    <div class="nymia-compact-stats">
                                        <div class="nymia-compact-rating">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <svg class="nymia-star <?php echo $i <= floor($audio['rating']) ? 'filled' : ''; ?>" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            <?php endfor; ?>
                                            <span class="nymia-rating-num"><?php echo $audio['rating']; ?></span>
                                        </div>
                                        <div class="nymia-compact-views">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                            </svg>
                                            <?php echo esc_html($audio['views']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <button type="button" class="nymia-view-all-btn">
                        <?php esc_html_e('View All', 'nymia'); ?>
                    </button>
                </div>

                <!-- Text Posts (for Text tab) -->
                <div class="nymia-sidebar-content text-posts-content">
                    <div class="nymia-sidebar-header">
                        <h3><?php esc_html_e('Recent Posts', 'nymia'); ?></h3>
                    </div>
                    <div class="nymia-chat-empty">
                        <div class="nymia-chat-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                            </svg>
                        </div>
                        <p><?php esc_html_e('Your recent posts will appear here', 'nymia'); ?></p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Define nymiaAjax if not already defined
    if (typeof nymiaAjax === 'undefined') {
        var nymiaAjax = {
            ajaxurl: '<?php echo admin_url('admin-ajax.php'); ?>',
            nonce: '<?php echo wp_create_nonce('nymia_audio_upload'); ?>'
        };
    }
    
    // Tab switching
    const tabs = document.querySelectorAll('.nymia-create-tab');
    const contents = document.querySelectorAll('.nymia-create-content');
    const sidebarContents = document.querySelectorAll('.nymia-sidebar-content');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));
            sidebarContents.forEach(s => s.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById('content-' + targetTab).classList.add('active');
            
            // Show corresponding sidebar content
            if (targetTab === 'live') {
                document.querySelector('.live-chat-content').classList.add('active');
            } else if (targetTab === 'audio') {
                document.querySelector('.audio-posts-content').classList.add('active');
            } else if (targetTab === 'text') {
                document.querySelector('.text-posts-content').classList.add('active');
            }
        });
    });
    
    // Paid access toggle for live stream
    const paidAccessToggle = document.getElementById('paid_access');
    const priceInput = document.getElementById('stream_price');
    
    if (paidAccessToggle && priceInput) {
        paidAccessToggle.addEventListener('change', function() {
            priceInput.disabled = !this.checked;
            if (!this.checked) {
                priceInput.value = '0.00';
            }
        });
    }
    
    // Paid access toggle for audio upload
    const audioPaidAccessToggle = document.getElementById('audio_paid_access');
    const audioPriceInput = document.getElementById('audio_price');
    
    if (audioPaidAccessToggle && audioPriceInput) {
        audioPaidAccessToggle.addEventListener('change', function() {
            audioPriceInput.disabled = !this.checked;
            if (!this.checked) {
                audioPriceInput.value = '0.00';
            }
        });
    }
    
    
    // Upload mode switching
    const uploadModeBtns = document.querySelectorAll('.nymia-upload-mode-btn');
    const uploadArea = document.getElementById('audioUploadArea');
    const recordingArea = document.getElementById('audioRecordingArea');
    
    uploadModeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const mode = this.getAttribute('data-mode');
            
            // Remove active class from all mode buttons
            uploadModeBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Show/hide appropriate areas
            if (mode === 'upload') {
                uploadArea.style.display = 'block';
                recordingArea.style.display = 'none';
            } else if (mode === 'record') {
                uploadArea.style.display = 'none';
                recordingArea.style.display = 'block';
            }
        });
    });
    
    // File upload functionality
    const fileInput = document.getElementById('audioFileInput');
    const progressBar = document.querySelector('.nymia-upload-progress');
    const progressFill = document.querySelector('.nymia-progress-fill');
    const progressText = document.querySelector('.nymia-progress-text');
    
    // Drag and drop functionality
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.classList.add('nymia-drag-over');
    });
    
    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.classList.remove('nymia-drag-over');
    });
    
    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.classList.remove('nymia-drag-over');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            handleFileSelect(files[0]);
        }
    });
    
    // Click to upload
    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });
    
    fileInput.addEventListener('change', function() {
        if (this.files.length > 0) {
            handleFileSelect(this.files[0]);
        }
    });
    
    function handleFileSelect(file) {
        // Validate file type
        if (!file.type.startsWith('audio/')) {
            alert('Please select an audio file.');
            return;
        }
        
        // Simulate upload progress
        progressBar.style.display = 'block';
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 10;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
                progressBar.style.display = 'none';
                alert('File uploaded successfully!');
            }
            progressFill.style.width = progress + '%';
            progressText.textContent = Math.round(progress) + '%';
        }, 200);
    }
    
    // Audio recording functionality
    let mediaRecorder;
    let audioChunks = [];
    let recordingTimer;
    let recordingStartTime;
    let isRecording = false;
    let isPaused = false;
    let recordedAudioFile = null; // Store recorded audio file
    
    const recordBtn = document.getElementById('recordBtn');
    const stopBtn = document.getElementById('stopBtn');
    const pauseBtn = document.getElementById('pauseBtn');
    const recordingIndicator = document.getElementById('recordingIndicator');
    const recordingTimerDisplay = document.getElementById('recordingTimer');
    const recordedAudio = document.getElementById('recordedAudio');
    const recordingPreview = document.getElementById('recordingPreview');
    const reRecordBtn = document.querySelector('.nymia-btn-re-record');
    
    if (recordBtn) {
        recordBtn.addEventListener('click', startRecording);
    }
    
    if (stopBtn) {
        stopBtn.addEventListener('click', stopRecording);
    }
    
    if (pauseBtn) {
        pauseBtn.addEventListener('click', togglePause);
    }
    
    if (reRecordBtn) {
        reRecordBtn.addEventListener('click', function() {
            recordingPreview.style.display = 'none';
            recordBtn.style.display = 'inline-flex';
            stopBtn.style.display = 'none';
            pauseBtn.style.display = 'none';
            recordedAudio.src = '';
            audioChunks = [];
            recordedAudioFile = null; // Clear recorded file
            
            // Clear file input
            const fileInput = document.getElementById('audioFileInput');
            if (fileInput) {
                fileInput.value = '';
            }
        });
    }
    
    async function startRecording() {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);
            
            mediaRecorder.ondataavailable = function(event) {
                audioChunks.push(event.data);
            };
            
            mediaRecorder.onstop = function() {
                const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                const audioURL = URL.createObjectURL(audioBlob);
                recordedAudio.src = audioURL;
                recordingPreview.style.display = 'block';
                
                // Store recorded audio file for submission
                recordedAudioFile = new File([audioBlob], 'recorded-audio.wav', { type: 'audio/wav' });
                
                // Set the recorded file to the hidden input
                const fileInput = document.getElementById('audioFileInput');
                if (fileInput) {
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(recordedAudioFile);
                    fileInput.files = dataTransfer.files;
                }
            };
            
            mediaRecorder.start();
            isRecording = true;
            recordingStartTime = Date.now();
            
            // Update UI
            recordBtn.style.display = 'none';
            stopBtn.style.display = 'inline-flex';
            pauseBtn.style.display = 'inline-flex';
            recordingIndicator.style.display = 'flex';
            
            // Start timer
            recordingTimer = setInterval(updateTimer, 1000);
            
        } catch (error) {
            console.error('Error accessing microphone:', error);
            alert('Error accessing microphone. Please check your permissions.');
        }
    }
    
    function stopRecording() {
        if (mediaRecorder && isRecording) {
            mediaRecorder.stop();
            mediaRecorder.stream.getTracks().forEach(track => track.stop());
            
            isRecording = false;
            isPaused = false;
            
            // Update UI
            stopBtn.style.display = 'none';
            pauseBtn.style.display = 'none';
            recordingIndicator.style.display = 'none';
            
            clearInterval(recordingTimer);
        }
    }
    
    function togglePause() {
        if (isPaused) {
            mediaRecorder.resume();
            isPaused = false;
            pauseBtn.innerHTML = `
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <rect x="6" y="4" width="4" height="16"></rect>
                    <rect x="14" y="4" width="4" height="16"></rect>
                </svg>
                <span>Pause</span>
            `;
            recordingTimer = setInterval(updateTimer, 1000);
        } else {
            mediaRecorder.pause();
            isPaused = true;
            pauseBtn.innerHTML = `
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span>Resume</span>
            `;
            clearInterval(recordingTimer);
        }
    }
    
    function updateTimer() {
        const elapsed = Date.now() - recordingStartTime;
        const minutes = Math.floor(elapsed / 60000);
        const seconds = Math.floor((elapsed % 60000) / 1000);
        recordingTimerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }
    
    // Audio visualizer
    const canvas = document.getElementById('audioVisualizer');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        
        function drawVisualizer() {
            if (isRecording) {
                // Simple visualizer animation
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.fillStyle = '#ff6b6b';
                
                for (let i = 0; i < 20; i++) {
                    const height = Math.random() * canvas.height;
                    const x = i * (canvas.width / 20);
                    const barWidth = canvas.width / 20 - 2;
                    ctx.fillRect(x, canvas.height - height, barWidth, height);
                }
                
                requestAnimationFrame(drawVisualizer);
            }
        }
        
        // Start visualizer when recording starts
        const originalStartRecording = startRecording;
        startRecording = function() {
            originalStartRecording();
            drawVisualizer();
        };
    }
    
    // Stream setup form
    const streamForm = document.getElementById('streamSetupForm');
    if (streamForm) {
        streamForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(streamForm);
            const streamTitle = formData.get('stream_title');
            const paidAccess = formData.get('paid_access') ? 'Yes' : 'No';
            const price = formData.get('stream_price');
            
            alert('Stream Setup:\n\nTitle: ' + streamTitle + '\nPaid Access: ' + paidAccess + '\nPrice: $' + price + '\n\nReady to go live!');
        });
    }
    
    // Audio upload form
    const audioForm = document.getElementById('audioUploadForm');
    if (audioForm) {
        audioForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(audioForm);
            const audioTitle = formData.get('audio_title');
            let file = formData.get('audio_file');
            
            // Check if audio is uploaded or recorded
            if (!file || !file.name) {
                // Check if we have a recorded audio file
                if (recordedAudioFile) {
                    file = recordedAudioFile;
                } else {
                    alert('Please upload or record an audio file before submitting.');
                    return;
                }
            }
            
            if (!audioTitle.trim()) {
                alert('Please enter an audio title.');
                return;
            }
            
            // Show loading state
            const submitBtn = audioForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Uploading...';
            
            // Show progress bar
            const progressBar = document.querySelector('.nymia-upload-progress');
            const progressFill = document.querySelector('.nymia-progress-fill');
            const progressText = document.querySelector('.nymia-progress-text');
            const uploadContent = document.querySelector('.nymia-upload-content');
            
            if (progressBar && uploadContent) {
                uploadContent.style.display = 'none';
                progressBar.style.display = 'flex';
                progressFill.style.width = '0%';
                progressText.textContent = '0%';
            }
            
            // Prepare FormData for AJAX
            const uploadFormData = new FormData();
            uploadFormData.append('action', 'nymia_upload_audio');
            uploadFormData.append('nonce', nymiaAjax.nonce);
            uploadFormData.append('audio_title', audioTitle);
            uploadFormData.append('audio_file', file, file.name);
            uploadFormData.append('audio_paid_access', formData.get('audio_paid_access') ? 'yes' : 'no');
            uploadFormData.append('audio_price', formData.get('audio_price') || '0.00');
            
            // Create XMLHttpRequest for upload progress
            const xhr = new XMLHttpRequest();
            
            // Upload progress
            xhr.upload.addEventListener('progress', function(e) {
                if (e.lengthComputable) {
                    const percentComplete = (e.loaded / e.total) * 100;
                    if (progressFill) {
                        progressFill.style.width = percentComplete + '%';
                    }
                    if (progressText) {
                        progressText.textContent = Math.round(percentComplete) + '%';
                    }
                }
            });
            
            // Handle response
            xhr.addEventListener('load', function() {
                if (xhr.status === 200) {
                    try {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success) {
                            alert('Audio uploaded successfully!');
                            
                            // Reload page to show new upload
                            window.location.reload();
                        } else {
                            alert('Upload failed: ' + (data.data.message || 'Unknown error'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalBtnText;
                            if (progressBar && uploadContent) {
                                progressBar.style.display = 'none';
                                uploadContent.style.display = 'flex';
                            }
                            // Reset recording state
                            recordedAudioFile = null;
                        }
                    } catch (e) {
                        console.error('Response parse error:', e);
                        alert('Upload failed. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalBtnText;
                        if (progressBar && uploadContent) {
                            progressBar.style.display = 'none';
                            uploadContent.style.display = 'flex';
                        }
                        // Reset recording state
                        recordedAudioFile = null;
                    }
                } else {
                    alert('Upload failed. Server error.');
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalBtnText;
                    if (progressBar && uploadContent) {
                        progressBar.style.display = 'none';
                        uploadContent.style.display = 'flex';
                    }
                    // Reset recording state
                    recordedAudioFile = null;
                }
            });
            
            xhr.addEventListener('error', function() {
                console.error('Upload error');
                alert('Upload failed. Please try again.');
                submitBtn.disabled = false;
                submitBtn.textContent = originalBtnText;
                if (progressBar && uploadContent) {
                    progressBar.style.display = 'none';
                    uploadContent.style.display = 'flex';
                }
                // Reset recording state
                recordedAudioFile = null;
            });
            
            // Send request
            xhr.open('POST', nymiaAjax.ajaxurl);
            xhr.send(uploadFormData);
        });
    }
    
    // Join stream buttons
    const joinButtons = document.querySelectorAll('.nymia-join-btn');
    joinButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            alert('Joining live stream...');
        });
    });
    
    // Global audio player
    let currentAudio = null;
    let currentlyPlayingBtn = null;
    
    // Play audio buttons
    const playButtons = document.querySelectorAll('.nymia-play-btn');
    playButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            alert('Playing audio...');
        });
    });
    
    // Compact play buttons - Play audio functionality
    document.addEventListener('click', function(e) {
        const playBtn = e.target.closest('.nymia-compact-play-btn');
        if (!playBtn) return;
        
        const audioCard = playBtn.closest('.nymia-audio-post-card-compact');
        if (!audioCard) return;
        
        // Check if there's an associated audio file
        const cardData = audioCard.dataset.audioUrl;
        
        if (cardData) {
            // Check if this is the currently playing audio
            if (currentlyPlayingBtn === playBtn && currentAudio && !currentAudio.paused) {
                // Pause current audio
                currentAudio.pause();
                playBtn.innerHTML = `
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                `;
                return;
            }
            
            // Stop current audio if playing different audio
            if (currentAudio && currentlyPlayingBtn !== playBtn) {
                currentAudio.pause();
                
                // Reset previous button icon
                if (currentlyPlayingBtn) {
                    currentlyPlayingBtn.innerHTML = `
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    `;
                }
            }
            
            // Resume paused audio or create new audio
            if (currentAudio && currentlyPlayingBtn === playBtn && currentAudio.paused) {
                currentAudio.play();
            } else {
                // Create and play new audio
                currentAudio = new Audio(cardData);
                currentAudio.play();
            }
            
            // Update button to show pause icon
            playBtn.innerHTML = `
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <rect x="6" y="4" width="4" height="16"></rect>
                    <rect x="14" y="4" width="4" height="16"></rect>
                </svg>
            `;
            
            currentlyPlayingBtn = playBtn;
            
            // When audio ends, reset button
            currentAudio.addEventListener('ended', function() {
                playBtn.innerHTML = `
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                `;
                currentAudio = null;
                currentlyPlayingBtn = null;
            });
        } else {
            // For demo purposes, show alert
            alert('Audio playback will be available when audio files are properly uploaded to the server.');
        }
    });
    
    // View All button
    const viewAllBtn = document.querySelector('.nymia-view-all-btn');
    if (viewAllBtn) {
        viewAllBtn.addEventListener('click', function() {
            alert('Viewing all audio posts...');
        });
    }
});
</script>

<?php get_footer(); ?>

