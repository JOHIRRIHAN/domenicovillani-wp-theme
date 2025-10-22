<?php
/**
 * Template Name: Audio
 * Template for displaying Audio page
 */

get_header(); ?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-audio-page">
            <!-- Header Section -->
            <div class="nymia-audio-header">
                <div class="nymia-audio-header-content">
                    <h1 class="nymia-audio-main-title">
                        <span class="nymia-title-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18V5l12-2v13"></path>
                                <circle cx="6" cy="18" r="3"></circle>
                                <circle cx="18" cy="16" r="3"></circle>
                            </svg>
                        </span>
                        Audio Library
                    </h1>
                    <p class="nymia-audio-subtitle">Discover and enjoy premium audio content</p>
                </div>
                
                <!-- Filter Tabs -->
                <div class="nymia-filter-tabs">
                    <button class="nymia-filter-tab active" data-filter="all">
                        <span>All</span>
                    </button>
                    <button class="nymia-filter-tab" data-filter="trending">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg>
                        <span>Trending</span>
                    </button>
                    <button class="nymia-filter-tab" data-filter="new">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>New Releases</span>
                    </button>
                    <button class="nymia-filter-tab" data-filter="popular">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <span>Most Popular</span>
                    </button>
                </div>
            </div>

            <!-- Content Layout -->
            <div class="nymia-audio-layout">
                <!-- Main Grid Content -->
                <div class="nymia-audio-grid">
                    <?php 
                    // Dummy data for audio posts
                    $audio_posts = array(
                        array('name' => 'Kimberly', 'views' => '1.2k', 'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop', 'category' => 'trending'),
                        array('name' => 'Sarah Johnson', 'views' => '2.5k', 'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop', 'category' => 'trending'),
                        array('name' => 'Emily Chen', 'views' => '856', 'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100&h=100&fit=crop', 'category' => 'new'),
                        array('name' => 'Jessica Miller', 'views' => '3.1k', 'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=100&h=100&fit=crop', 'category' => 'popular'),
                        array('name' => 'Amanda Davis', 'views' => '1.8k', 'image' => 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=100&h=100&fit=crop', 'category' => 'trending'),
                        array('name' => 'Rachel Green', 'views' => '945', 'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=100&h=100&fit=crop', 'category' => 'new'),
                        array('name' => 'Lisa Anderson', 'views' => '2.2k', 'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop', 'category' => 'popular'),
                        array('name' => 'Monica Taylor', 'views' => '1.5k', 'image' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=100&h=100&fit=crop', 'category' => 'trending'),
                        array('name' => 'Sophie Brown', 'views' => '678', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop', 'category' => 'new'),
                        array('name' => 'Emma Wilson', 'views' => '3.4k', 'image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=100&h=100&fit=crop', 'category' => 'popular'),
                        array('name' => 'Olivia Moore', 'views' => '1.9k', 'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop', 'category' => 'trending'),
                        array('name' => 'Isabella Martin', 'views' => '2.7k', 'image' => 'https://images.unsplash.com/photo-1502685104226-ee32379fefbe?w=400&h=500&fit=crop', 'profile_image' => 'https://images.unsplash.com/photo-1502685104226-ee32379fefbe?w=100&h=100&fit=crop', 'category' => 'new'),
                    );
                    
                    foreach ($audio_posts as $audio): ?>
                    <div class="nymia-audio-card" data-category="<?php echo esc_attr($audio['category']); ?>">
                        
                        <div class="nymia-audio-thumbnail">
                            <img src="<?php echo esc_url($audio['image']); ?>" alt="<?php echo esc_attr($audio['name']); ?>" />
                            
                            <!-- User Info Overlay -->
                            <div class="nymia-audio-user">
                                <div class="nymia-audio-avatar">
                                    <img src="<?php echo esc_url($audio['profile_image']); ?>" alt="<?php echo esc_attr($audio['name']); ?>" />
                                </div>
                                <span class="nymia-audio-name"><?php echo esc_html($audio['name']); ?></span>
                            </div>

                            <!-- Views Counter -->
                            <div class="nymia-audio-views">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span><?php echo esc_html($audio['views']); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Trending Sidebar -->
                <aside class="nymia-trending-sidebar">
                    <h2 class="nymia-trending-title">Trending Now</h2>
                    
                    <div class="nymia-trending-list">
                        <?php 
                        $trending_posts = array(
                            array('title' => 'Midnight Dreams', 'artist' => 'Sarah Johnson', 'plays' => '12.5k', 'image' => 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=80&h=80&fit=crop'),
                            array('title' => 'Whispers in the Dark', 'artist' => 'Emily Chen', 'plays' => '8.7k', 'image' => 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=80&h=80&fit=crop'),
                            array('title' => 'Sensual Stories', 'artist' => 'Jessica Miller', 'plays' => '25.3k', 'image' => 'https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=80&h=80&fit=crop'),
                            array('title' => 'Moonlight Serenade', 'artist' => 'Amanda Davis', 'plays' => '15.2k', 'image' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=80&h=80&fit=crop'),
                            array('title' => 'Velvet Nights', 'artist' => 'Rachel Green', 'plays' => '9.8k', 'image' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=80&h=80&fit=crop'),
                        );
                        
                        $rank = 1;
                        foreach ($trending_posts as $trending): ?>
                        <div class="nymia-trending-item">
                            <span class="nymia-trending-rank"><?php echo $rank++; ?></span>
                            
                            <div class="nymia-trending-cover">
                                <img src="<?php echo esc_url($trending['image']); ?>" alt="<?php echo esc_attr($trending['title']); ?>" />
                                <button class="nymia-trending-play">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="nymia-trending-info">
                                <h4 class="nymia-trending-song"><?php echo esc_html($trending['title']); ?></h4>
                                <p class="nymia-trending-artist"><?php echo esc_html($trending['artist']); ?></p>
                                <span class="nymia-trending-plays"><?php echo esc_html($trending['plays']); ?> plays</span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

