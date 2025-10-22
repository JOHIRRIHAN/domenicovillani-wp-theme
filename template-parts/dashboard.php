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
</div>
