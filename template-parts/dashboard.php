<?php
/**
 * Template part for displaying the dashboard
 */

$dashboard_data = nymia_get_dashboard_data();
$filter_buttons = array('All', 'Live Audio', 'PDF', 'Erotic Audio Creator');
?>

<div class="nymia-dashboard">
    <!-- Filter Pills -->
    <div class="nymia-filters">
        <?php foreach ($filter_buttons as $filter): ?>
            <button class="nymia-filter-btn <?php echo $filter === 'All' ? 'active' : ''; ?>" data-filter="<?php echo esc_attr(strtolower(str_replace(' ', '-', $filter))); ?>">
                <?php echo esc_html($filter); ?>
            </button>
        <?php endforeach; ?>
    </div>
    
    <!-- Recents Section -->
    <section class="nymia-section" data-category="all">
        <h3>Recents</h3>
        <div class="nymia-grid nymia-grid-3">
            <?php foreach ($dashboard_data['recent_content'] as $content): ?>
                <div class="nymia-content-card">
                    <div class="nymia-card-image aspect-video">
                        <img src="<?php echo esc_url($content['image']); ?>" alt="<?php echo esc_attr($content['name']); ?>" />
                        <?php if (isset($content['badge'])): ?>
                            <span class="nymia-card-badge <?php echo esc_attr(strtolower(str_replace(' ', '-', $content['badge']))); ?>">
                                <?php echo esc_html($content['badge']); ?>
                            </span>
                        <?php endif; ?>
                        <div class="nymia-card-overlay"></div>
                    </div>
                    
                    <div class="nymia-card-info">
                        <img src="<?php echo esc_url($content['avatar']); ?>" alt="<?php echo esc_attr($content['name']); ?>" class="nymia-avatar" />
                        <div>
                            <h4><?php echo esc_html($content['name']); ?></h4>
                            <p><?php echo esc_html($content['username']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <!-- Live Audio Streaming -->
    <section class="nymia-section" data-category="live-audio">
        <h3>Live Audio Streaming</h3>
        <div class="nymia-grid nymia-grid-5">
            <?php foreach ($dashboard_data['live_audio_streaming'] as $content): ?>
                <div class="nymia-content-card">
                    <div class="nymia-card-image aspect-portrait">
                        <img src="<?php echo esc_url($content['image']); ?>" alt="<?php echo esc_attr($content['name']); ?>" />
                        <div class="nymia-card-overlay"></div>
                    </div>
                    
                    <div class="nymia-card-info">
                        <img src="<?php echo esc_url($content['avatar']); ?>" alt="<?php echo esc_attr($content['name']); ?>" class="nymia-avatar" />
                        <div>
                            <h4><?php echo esc_html($content['name']); ?></h4>
                            <p><?php echo esc_html($content['username']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <!-- Read Audio Book -->
    <section class="nymia-section" data-category="pdf">
        <h3>Read Audio Book</h3>
        <div class="nymia-grid nymia-grid-3">
            <?php foreach ($dashboard_data['audio_books'] as $content): ?>
                <div class="nymia-content-card">
                    <div class="nymia-card-image aspect-video">
                        <img src="<?php echo esc_url($content['image']); ?>" alt="<?php echo esc_attr($content['name']); ?>" />
                        <?php if (isset($content['badge'])): ?>
                            <span class="nymia-card-badge <?php echo esc_attr(strtolower(str_replace(' ', '-', $content['badge']))); ?>">
                                <?php echo esc_html($content['badge']); ?>
                            </span>
                        <?php endif; ?>
                        <div class="nymia-card-overlay"></div>
                    </div>
                    
                    <div class="nymia-card-info">
                        <img src="<?php echo esc_url($content['avatar']); ?>" alt="<?php echo esc_attr($content['name']); ?>" class="nymia-avatar" />
                        <div>
                            <h4><?php echo esc_html($content['name']); ?></h4>
                            <p><?php echo esc_html($content['username']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <!-- Erotic Audio Creator -->
    <section class="nymia-section" data-category="erotic-audio-creator">
        <div class="nymia-section-header">
            <h3>Erotic Audio Creator</h3>
            <p class="nymia-section-subtitle">Discover premium adult audio content from talented creators</p>
        </div>
        <div class="nymia-grid nymia-grid-4">
            <?php 
            // Dummy data for erotic audio creators
            $erotic_creators = array(
                array('name' => 'Kimberly', 'avatar' => 'https://i.pravatar.cc/150?img=1', 'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&h=800&fit=crop', 'views' => '1.2k'),
                array('name' => 'Sophia', 'avatar' => 'https://i.pravatar.cc/150?img=5', 'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=600&h=800&fit=crop', 'views' => '2.5k'),
                array('name' => 'Emma', 'avatar' => 'https://i.pravatar.cc/150?img=9', 'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&h=800&fit=crop', 'views' => '1.8k'),
                array('name' => 'Isabella', 'avatar' => 'https://i.pravatar.cc/150?img=10', 'image' => 'https://images.unsplash.com/photo-1488716820095-cbe80883c496?w=600&h=800&fit=crop', 'views' => '3.1k'),
                array('name' => 'Olivia', 'avatar' => 'https://i.pravatar.cc/150?img=16', 'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=600&h=800&fit=crop', 'views' => '950'),
                array('name' => 'Ava', 'avatar' => 'https://i.pravatar.cc/150?img=20', 'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600&h=800&fit=crop', 'views' => '2.2k'),
                array('name' => 'Mia', 'avatar' => 'https://i.pravatar.cc/150?img=24', 'image' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&h=800&fit=crop', 'views' => '1.6k'),
                array('name' => 'Charlotte', 'avatar' => 'https://i.pravatar.cc/150?img=27', 'image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=600&h=800&fit=crop', 'views' => '2.9k'),
                array('name' => 'Amelia', 'avatar' => 'https://i.pravatar.cc/150?img=32', 'image' => 'https://images.unsplash.com/photo-1524502397800-2eeaad7c3fe5?w=600&h=800&fit=crop', 'views' => '1.4k'),
                array('name' => 'Harper', 'avatar' => 'https://i.pravatar.cc/150?img=36', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=800&fit=crop', 'views' => '3.5k'),
                array('name' => 'Evelyn', 'avatar' => 'https://i.pravatar.cc/150?img=38', 'image' => 'https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?w=600&h=800&fit=crop', 'views' => '1.9k'),
                array('name' => 'Abigail', 'avatar' => 'https://i.pravatar.cc/150?img=41', 'image' => 'https://images.unsplash.com/photo-1503185912284-5271ff81b9a8?w=600&h=800&fit=crop', 'views' => '2.7k'),
            );
            foreach ($erotic_creators as $creator): ?>
                <div class="nymia-content-card nymia-creator-card">
                    <div class="nymia-card-image aspect-portrait">
                        <img src="<?php echo esc_url($creator['image']); ?>" alt="<?php echo esc_attr($creator['name']); ?>" />
                        <div class="nymia-card-overlay nymia-creator-overlay">
                            <div class="nymia-creator-info">
                                <img src="<?php echo esc_url($creator['avatar']); ?>" alt="<?php echo esc_attr($creator['name']); ?>" class="nymia-creator-avatar" />
                                <span class="nymia-creator-name"><?php echo esc_html($creator['name']); ?></span>
                            </div>
                            <div class="nymia-creator-views">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                <span><?php echo esc_html($creator['views']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
