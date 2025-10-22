<?php
/**
 * Template part for displaying the header
 */
?>

<header class="nymia-header">
    <!-- Page Title -->
    <h2 class="nymia-page-title"><?php echo esc_html(is_front_page() || is_page('dashboard') ? 'Home' : get_the_title()); ?></h2>
    
    <!-- Search -->
    <form role="search" method="get" class="nymia-header-search" action="<?php echo esc_url(home_url('/')); ?>">
        <label for="nymia-header-search" class="screen-reader-text"><?php esc_html_e('Search', 'nymia'); ?></label>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
        </svg>
        <input type="search" id="nymia-header-search" name="s" placeholder="<?php esc_attr_e('Search', 'nymia'); ?>" value="<?php echo get_search_query(); ?>" />
    </form>
    
    <!-- Right Actions -->
    <div class="nymia-header-actions">
        <!-- Create Button -->
        <a href="<?php echo esc_url(home_url('/create')); ?>" class="nymia-btn-gradient" aria-label="<?php esc_attr_e('Create new content', 'nymia'); ?>">
            <?php esc_html_e('Create', 'nymia'); ?>
        </a>
        
        <!-- Notifications -->
        <button type="button" class="nymia-notification-btn" aria-label="<?php esc_attr_e('Notifications', 'nymia'); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
            </svg>
        </button>
        
        <!-- Profile -->
        <a href="<?php echo esc_url(home_url('/profile')); ?>" class="nymia-profile-btn" aria-label="<?php esc_attr_e('View Profile', 'nymia'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.png" alt="<?php esc_attr_e('Profile', 'nymia'); ?>" class="nymia-profile-avatar" />
        </a>
    </div>
</header>
