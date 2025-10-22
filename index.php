<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-content-wrapper">
            <div class="nymia-content">
                <?php
                // Check if we're on the dashboard page
                if (is_page('dashboard') || is_front_page()) {
                    get_template_part('template-parts/dashboard');
                } else {
                    // Regular page content
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content', get_post_type());
                        endwhile;
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                }
                ?>
            </div>
            
            <?php get_template_part('template-parts/sidebar-right'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
