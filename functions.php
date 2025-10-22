<?php
/**
 * Nymia Theme functions and definitions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function nymia_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'nymia'),
        'sidebar' => __('Sidebar Menu', 'nymia'),
    ));
    
    // Create dashboard page on theme activation
    nymia_create_dashboard_page();
}
add_action('after_setup_theme', 'nymia_theme_setup');

/**
 * Create dashboard page automatically
 */
function nymia_create_dashboard_page() {
    // Check if dashboard page already exists
    $dashboard_page = get_page_by_path('dashboard');
    
    if (!$dashboard_page) {
        // Create the dashboard page
        $page_data = array(
            'post_title'    => 'Dashboard',
            'post_content'  => 'Welcome to your Nymia Dashboard. This page contains all your audio content overview.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'dashboard',
            'post_author'   => 1,
        );
        
        $page_id = wp_insert_post($page_data);
        
        if ($page_id && !get_option('page_on_front')) {
            // Set as front page only if no front page is set
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_id);
        }
    }
    
    // Create Live Audio Streaming page
    $live_audio_page = get_page_by_path('live-audio');
    
    if (!$live_audio_page) {
        $live_audio_data = array(
            'post_title'    => 'Live Audio Streaming',
            'post_content'  => 'Live Audio Streaming page with interactive features.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'live-audio',
            'post_author'   => 1,
        );
        
        wp_insert_post($live_audio_data);
    }
    
    // Create Audio page
    $audio_page = get_page_by_path('audio');
    
    if (!$audio_page) {
        $audio_data = array(
            'post_title'    => 'Audio',
            'post_content'  => 'Browse and listen to audio posts.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'audio',
            'post_author'   => 1,
            'page_template' => 'page-audio.php',
        );
        
        $audio_id = wp_insert_post($audio_data);
        
        // Set the template for the audio page
        if ($audio_id) {
            update_post_meta($audio_id, '_wp_page_template', 'page-audio.php');
        }
    } else {
        // Update template if page exists but doesn't have template
        $template = get_post_meta($audio_page->ID, '_wp_page_template', true);
        if ($template !== 'page-audio.php') {
            update_post_meta($audio_page->ID, '_wp_page_template', 'page-audio.php');
        }
    }
    
    // Create PDF page
    $pdf_page = get_page_by_path('pdf');
    
    if (!$pdf_page) {
        $pdf_data = array(
            'post_title'    => 'PDF',
            'post_content'  => 'Browse and read premium PDF content.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'pdf',
            'post_author'   => 1,
            'page_template' => 'page-pdf.php',
        );
        
        $pdf_id = wp_insert_post($pdf_data);
        
        // Set the template for the PDF page
        if ($pdf_id) {
            update_post_meta($pdf_id, '_wp_page_template', 'page-pdf.php');
        }
    } else {
        // Update template if page exists but doesn't have template
        $template = get_post_meta($pdf_page->ID, '_wp_page_template', true);
        if ($template !== 'page-pdf.php') {
            update_post_meta($pdf_page->ID, '_wp_page_template', 'page-pdf.php');
        }
    }
    
    // Create Profile page
    $profile_page = get_page_by_path('profile');
    
    if (!$profile_page) {
        $profile_data = array(
            'post_title'    => 'Profile',
            'post_content'  => 'User profile page with personal information and statistics.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'profile',
            'post_author'   => 1,
            'page_template' => 'page-profile.php',
        );
        
        $profile_id = wp_insert_post($profile_data);
        
        // Set the template for the profile page
        if ($profile_id) {
            update_post_meta($profile_id, '_wp_page_template', 'page-profile.php');
        }
    } else {
        // Update template if page exists but doesn't have the template assigned
        $template = get_post_meta($profile_page->ID, '_wp_page_template', true);
        if (empty($template) || $template === 'default') {
            update_post_meta($profile_page->ID, '_wp_page_template', 'page-profile.php');
        }
    }
    
    // Create Policies page
    $policies_page = get_page_by_path('policies');
    
    if (!$policies_page) {
        $policies_data = array(
            'post_title'    => 'Policies',
            'post_content'  => 'Platform policies, terms of service, and community guidelines.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'policies',
            'post_author'   => 1,
            'page_template' => 'page-policies.php',
        );
        
        $policies_id = wp_insert_post($policies_data);
        
        // Set the template for the policies page
        if ($policies_id) {
            update_post_meta($policies_id, '_wp_page_template', 'page-policies.php');
        }
    } else {
        // Update template if page exists but doesn't have the template assigned
        $template = get_post_meta($policies_page->ID, '_wp_page_template', true);
        if (empty($template) || $template === 'default') {
            update_post_meta($policies_page->ID, '_wp_page_template', 'page-policies.php');
        }
    }
    
    // Create Earnings page
    $earnings_page = get_page_by_path('earnings');
    
    if (!$earnings_page) {
        $earnings_data = array(
            'post_title'    => 'Earnings',
            'post_content'  => 'Track your revenue, manage payouts, and view transaction history.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'earnings',
            'post_author'   => 1,
            'page_template' => 'page-earnings.php',
        );
        
        $earnings_id = wp_insert_post($earnings_data);
        
        // Set the template for the earnings page
        if ($earnings_id) {
            update_post_meta($earnings_id, '_wp_page_template', 'page-earnings.php');
        }
    } else {
        // Update template if page exists but doesn't have the template assigned
        $template = get_post_meta($earnings_page->ID, '_wp_page_template', true);
        if (empty($template) || $template === 'default') {
            update_post_meta($earnings_page->ID, '_wp_page_template', 'page-earnings.php');
        }
    }
    
    // Create Create page
    $create_page = get_page_by_path('create');
    
    if (!$create_page) {
        $create_data = array(
            'post_title'    => 'Create',
            'post_content'  => 'Create new content - Go Live, upload Audio, or create Text posts.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'create',
            'post_author'   => 1,
            'page_template' => 'page-create.php',
        );
        
        $create_id = wp_insert_post($create_data);
        
        // Set the template for the create page
        if ($create_id) {
            update_post_meta($create_id, '_wp_page_template', 'page-create.php');
        }
    } else {
        // Update template if page exists but doesn't have the template assigned
        $template = get_post_meta($create_page->ID, '_wp_page_template', true);
        if (empty($template) || $template === 'default') {
            update_post_meta($create_page->ID, '_wp_page_template', 'page-create.php');
        }
    }
}

/**
 * Enqueue scripts and styles
 */
function nymia_scripts() {
    wp_enqueue_style('nymia-style', get_stylesheet_uri(), array(), '2.2.0');
    
    // Add custom JavaScript for mobile menu toggle
    wp_enqueue_script('nymia-script', get_template_directory_uri() . '/js/main.js', array(), '2.2.0', true);
}
add_action('wp_enqueue_scripts', 'nymia_scripts');

/**
 * Register widget areas
 */
function nymia_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'nymia'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'nymia'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'nymia_widgets_init');

/**
 * Custom excerpt length
 */
function nymia_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'nymia_excerpt_length');

/**
 * Custom excerpt more
 */
function nymia_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'nymia_excerpt_more');

/**
 * Add custom body classes
 */
function nymia_body_classes($classes) {
    if (is_page('dashboard') || is_front_page()) {
        $classes[] = 'dashboard-page';
    }
    return $classes;
}
add_filter('body_class', 'nymia_body_classes');

/**
 * Dashboard data - static content
 */
function nymia_get_dashboard_data() {
    return array(
        'recent_content' => array(
            array(
                'id' => 1,
                'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&h=300&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Kimberly1',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
                'badge' => 'Read Book',
            ),
            array(
                'id' => 2,
                'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=500&h=300&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 3,
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500&h=300&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Emma',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
                'badge' => 'Live',
            ),
        ),
        'live_audio_streaming' => array(
            array(
                'id' => 1,
                'image' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&h=500&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Alex',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 2,
                'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=400&h=500&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Jessica',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 3,
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Michael',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 4,
                'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400&h=500&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Lisa',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 5,
                'image' => 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=400&h=500&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=David',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
        ),
        'audio_books' => array(
            array(
                'id' => 1,
                'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=500&h=300&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Anna',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
                'badge' => 'Read Book',
            ),
            array(
                'id' => 2,
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=500&h=300&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Sophie',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
                'badge' => 'Read Book',
            ),
            array(
                'id' => 3,
                'image' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=500&h=300&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Rachel',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
                'badge' => 'Read Book',
            ),
        ),
        'suggestions' => array(
            array(
                'id' => 1,
                'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=400&h=250&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Suggestion1',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 2,
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=250&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Suggestion2',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
            array(
                'id' => 3,
                'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400&h=250&fit=crop',
                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Suggestion3',
                'name' => 'Kimberly',
                'username' => '@c.a.glasser',
            ),
        ),
    );
}

/**
 * Theme activation hook
 */
function nymia_theme_activation() {
    nymia_create_dashboard_page();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'nymia_theme_activation');

/**
 * Debug function to check if theme is working
 */
function nymia_debug_info() {
    if (current_user_can('manage_options') && isset($_GET['nymia_debug'])) {
        echo '<div style="background: #000; color: #fff; padding: 20px; margin: 20px; border-radius: 5px;">';
        echo '<h3>Nymia Theme Debug Info</h3>';
        echo '<p>Theme is active: ' . (wp_get_theme()->get('Name') === 'Nymia Theme' ? 'Yes' : 'No') . '</p>';
        echo '<p>Dashboard page exists: ' . (get_page_by_path('dashboard') ? 'Yes' : 'No') . '</p>';
        echo '<p>Front page: ' . get_option('page_on_front') . '</p>';
        echo '<p>Show on front: ' . get_option('show_on_front') . '</p>';
        echo '</div>';
    }
}
add_action('wp_head', 'nymia_debug_info');
