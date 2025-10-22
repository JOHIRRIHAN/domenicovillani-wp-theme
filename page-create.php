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

                            <!-- File Upload Area -->
                            <div class="nymia-upload-area" id="audioUploadArea">
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
                        // Dummy recent audio posts
                        $recent_audio = array(
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

                        foreach ($recent_audio as $audio) :
                        ?>
                            <div class="nymia-audio-post-card">
                                <div class="nymia-audio-header">
                                    <span class="nymia-audio-badge">
                                        <span class="nymia-audio-dot"></span>
                                        <?php esc_html_e('Audio', 'nymia'); ?>
                                    </span>
                                    <button type="button" class="nymia-play-btn">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                        <?php esc_html_e('Play', 'nymia'); ?>
                                    </button>
                                </div>
                                
                                <div class="nymia-audio-info">
                                    <h4><?php echo esc_html($audio['title']); ?></h4>
                                    <p class="nymia-audio-author"><?php echo esc_html('by ' . $audio['author']); ?></p>
                                    
                                    <div class="nymia-audio-stats">
                                        <span class="nymia-stat-item">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <?php echo esc_html($audio['viewers']); ?>
                                        </span>
                                        <span class="nymia-stat-item">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            <?php echo esc_html($audio['tips']); ?>
                                        </span>
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
    
    // File upload area
    const uploadArea = document.getElementById('audioUploadArea');
    const fileInput = document.getElementById('audioFileInput');
    
    if (uploadArea && fileInput) {
        // Click to browse
        uploadArea.addEventListener('click', function() {
            fileInput.click();
        });
        
        // Drag and drop
        uploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('drag-over');
        });
        
        uploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('drag-over');
        });
        
        uploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('drag-over');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                handleFileSelect(files[0]);
            }
        });
        
        // File input change
        fileInput.addEventListener('change', function(e) {
            if (this.files.length > 0) {
                handleFileSelect(this.files[0]);
            }
        });
        
        function handleFileSelect(file) {
            const uploadContent = uploadArea.querySelector('.nymia-upload-content');
            uploadContent.innerHTML = `
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 18V5l12-2v13"></path>
                    <circle cx="6" cy="18" r="3"></circle>
                    <circle cx="18" cy="16" r="3"></circle>
                </svg>
                <p class="nymia-upload-text">${file.name}</p>
                <p class="nymia-upload-formats">File selected • ${(file.size / 1024 / 1024).toFixed(2)} MB</p>
            `;
        }
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
            const paidAccess = formData.get('audio_paid_access') ? 'Yes' : 'No';
            const price = formData.get('audio_price');
            const file = formData.get('audio_file');
            
            if (!file.name) {
                alert('Please select an audio file to upload.');
                return;
            }
            
            alert('Audio Upload:\n\nTitle: ' + audioTitle + '\nFile: ' + file.name + '\nPaid Access: ' + paidAccess + '\nPrice: $' + price + '\n\nUploading...');
        });
    }
    
    // Join stream buttons
    const joinButtons = document.querySelectorAll('.nymia-join-btn');
    joinButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            alert('Joining live stream...');
        });
    });
    
    // Play audio buttons
    const playButtons = document.querySelectorAll('.nymia-play-btn');
    playButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            alert('Playing audio...');
        });
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

