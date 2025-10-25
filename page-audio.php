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
                <div class="nymia-grid nymia-grid-4">
            <?php 
            // Enhanced data for creators with categories, ratings, and audio files
            $creators_data = array(
                array(
                    'name' => 'Kimberly', 
                    'avatar' => 'https://i.pravatar.cc/150?img=1', 
                    'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&h=800&fit=crop', 
                    'views' => '1.2k',
                    'rating' => 4.2,
                    'category' => 'Cooking',
                    'subcategory' => 'Quick Recipes',
                    'audio_files' => array(
                        array('title' => '5-Minute Breakfast', 'duration' => '8:30', 'rating' => 4.5),
                        array('title' => 'Healthy Smoothies', 'duration' => '12:15', 'rating' => 4.1),
                        array('title' => 'Weekend Baking', 'duration' => '15:45', 'rating' => 4.3)
                    )
                ),
                array(
                    'name' => 'Sophia', 
                    'avatar' => 'https://i.pravatar.cc/150?img=5', 
                    'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=600&h=800&fit=crop', 
                    'views' => '2.5k',
                    'rating' => 4.7,
                    'category' => 'Gardening',
                    'subcategory' => 'Indoor Plants',
                    'audio_files' => array(
                        array('title' => 'Plant Care Basics', 'duration' => '20:30', 'rating' => 4.8),
                        array('title' => 'Seasonal Gardening', 'duration' => '18:20', 'rating' => 4.6),
                        array('title' => 'Hydroponic Setup', 'duration' => '25:10', 'rating' => 4.4)
                    )
                ),
                array(
                    'name' => 'Emma', 
                    'avatar' => 'https://i.pravatar.cc/150?img=9', 
                    'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&h=800&fit=crop', 
                    'views' => '1.8k',
                    'rating' => 4.3,
                    'category' => 'Sports',
                    'subcategory' => 'Fitness',
                    'audio_files' => array(
                        array('title' => 'Morning Workout', 'duration' => '30:00', 'rating' => 4.2),
                        array('title' => 'Yoga Flow', 'duration' => '45:15', 'rating' => 4.4),
                        array('title' => 'Strength Training', 'duration' => '35:30', 'rating' => 4.1)
                    )
                ),
                array(
                    'name' => 'Isabella', 
                    'avatar' => 'https://i.pravatar.cc/150?img=10', 
                    'image' => 'https://images.unsplash.com/photo-1488716820095-cbe80883c496?w=600&h=800&fit=crop', 
                    'views' => '3.1k',
                    'rating' => 4.8,
                    'category' => 'Music',
                    'subcategory' => 'Piano Lessons',
                    'audio_files' => array(
                        array('title' => 'Beginner Scales', 'duration' => '15:20', 'rating' => 4.9),
                        array('title' => 'Classical Pieces', 'duration' => '22:45', 'rating' => 4.7),
                        array('title' => 'Improvisation', 'duration' => '18:30', 'rating' => 4.6)
                    )
                ),
                array(
                    'name' => 'Olivia', 
                    'avatar' => 'https://i.pravatar.cc/150?img=16', 
                    'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=600&h=800&fit=crop', 
                    'views' => '950',
                    'rating' => 4.0,
                    'category' => 'Art',
                    'subcategory' => 'Painting',
                    'audio_files' => array(
                        array('title' => 'Watercolor Basics', 'duration' => '25:15', 'rating' => 4.1),
                        array('title' => 'Color Theory', 'duration' => '20:00', 'rating' => 3.9),
                        array('title' => 'Portrait Techniques', 'duration' => '35:20', 'rating' => 4.2)
                    )
                ),
                array(
                    'name' => 'Ava', 
                    'avatar' => 'https://i.pravatar.cc/150?img=20', 
                    'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600&h=800&fit=crop', 
                    'views' => '2.2k',
                    'rating' => 4.5,
                    'category' => 'Technology',
                    'subcategory' => 'Programming',
                    'audio_files' => array(
                        array('title' => 'JavaScript Basics', 'duration' => '40:30', 'rating' => 4.6),
                        array('title' => 'React Tutorial', 'duration' => '55:15', 'rating' => 4.4),
                        array('title' => 'API Development', 'duration' => '32:45', 'rating' => 4.5)
                    )
                ),
                array(
                    'name' => 'Mia', 
                    'avatar' => 'https://i.pravatar.cc/150?img=24', 
                    'image' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&h=800&fit=crop', 
                    'views' => '1.6k',
                    'rating' => 4.1,
                    'category' => 'Lifestyle',
                    'subcategory' => 'Meditation',
                    'audio_files' => array(
                        array('title' => 'Morning Meditation', 'duration' => '10:00', 'rating' => 4.3),
                        array('title' => 'Stress Relief', 'duration' => '15:30', 'rating' => 4.0),
                        array('title' => 'Sleep Stories', 'duration' => '20:00', 'rating' => 4.2)
                    )
                ),
                array(
                    'name' => 'Charlotte', 
                    'avatar' => 'https://i.pravatar.cc/150?img=27', 
                    'image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=600&h=800&fit=crop', 
                    'views' => '2.9k',
                    'rating' => 4.6,
                    'category' => 'Education',
                    'subcategory' => 'Language Learning',
                    'audio_files' => array(
                        array('title' => 'Spanish Basics', 'duration' => '30:15', 'rating' => 4.7),
                        array('title' => 'French Pronunciation', 'duration' => '25:45', 'rating' => 4.5),
                        array('title' => 'German Grammar', 'duration' => '35:20', 'rating' => 4.4)
                    )
                )
            );
            
            foreach ($creators_data as $creator): ?>
                <div class="nymia-content-card nymia-creator-card">
                    <div class="nymia-card-image aspect-portrait">
                        <img src="<?php echo esc_url($creator['image']); ?>" alt="<?php echo esc_attr($creator['name']); ?>" />
                        <div class="nymia-card-overlay nymia-creator-overlay">
                            <div class="nymia-creator-info">
                                <img src="<?php echo esc_url($creator['avatar']); ?>" alt="<?php echo esc_attr($creator['name']); ?>" class="nymia-creator-avatar" />
                                <div class="nymia-creator-details">
                                    <span class="nymia-creator-name"><?php echo esc_html($creator['name']); ?></span>
                                    <div class="nymia-creator-rating">
                                        <div class="nymia-star-rating">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <svg class="nymia-star <?php echo $i <= floor($creator['rating']) ? 'filled' : ''; ?>" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            <?php endfor; ?>
                                        </div>
                                        <span class="nymia-rating-score">(<?php echo $creator['rating']; ?>)</span>
                                    </div>
                                    <div class="nymia-creator-category">
                                        <span class="nymia-category-tag"><?php echo esc_html($creator['category']); ?></span>
                                        <span class="nymia-subcategory-tag"><?php echo esc_html($creator['subcategory']); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="nymia-creator-views">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                <span><?php echo esc_html($creator['views']); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Audio Files Section -->
                    <div class="nymia-audio-files">
                        <h4 class="nymia-audio-files-title">Audio Files</h4>
                        <?php foreach ($creator['audio_files'] as $audio): ?>
                            <div class="nymia-audio-file-card">
                                <div class="nymia-audio-cover">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 18V5l12-2v13"></path>
                                        <circle cx="6" cy="18" r="3"></circle>
                                        <circle cx="18" cy="16" r="3"></circle>
                                    </svg>
                                    <button class="nymia-play-button">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="nymia-audio-info">
                                    <h5 class="nymia-audio-title"><?php echo esc_html($audio['title']); ?></h5>
                                    <div class="nymia-audio-rating">
                                        <div class="nymia-star-rating">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <svg class="nymia-star <?php echo $i <= floor($audio['rating']) ? 'filled' : ''; ?>" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            <?php endfor; ?>
                                        </div>
                                        <span class="nymia-rating-score">(<?php echo $audio['rating']; ?>)</span>
                                    </div>
                                    <div class="nymia-audio-meta">
                                        <span class="nymia-audio-duration"><?php echo esc_html($audio['duration']); ?></span>
                                        <span class="nymia-audio-category"><?php echo esc_html($creator['category']); ?> - <?php echo esc_html($creator['subcategory']); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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

