<?php
/**
 * Template part for displaying the right sidebar with suggestions
 */

$dashboard_data = nymia_get_dashboard_data();
?>

<aside class="nymia-sidebar-right">
    <h3>Suggestions</h3>
    
    <?php foreach ($dashboard_data['suggestions'] as $suggestion): ?>
        <div class="nymia-suggestion-card">
            <div class="nymia-suggestion-image">
                <img src="<?php echo esc_url($suggestion['image']); ?>" alt="<?php echo esc_attr($suggestion['name']); ?>" />
                <div class="nymia-suggestion-overlay"></div>
            </div>
            
            <div class="nymia-suggestion-content">
                <div class="nymia-suggestion-info">
                    <img src="<?php echo esc_url($suggestion['avatar']); ?>" alt="<?php echo esc_attr($suggestion['name']); ?>" class="nymia-avatar" />
                    <div>
                        <h4><?php echo esc_html($suggestion['name']); ?></h4>
                        <p><?php echo esc_html($suggestion['username']); ?></p>
                    </div>
                </div>
                <button class="nymia-suggestion-btn">Follow</button>
            </div>
        </div>
    <?php endforeach; ?>
</aside>
