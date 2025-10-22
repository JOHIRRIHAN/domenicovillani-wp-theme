<?php
/**
 * Template Name: Single PDF
 * 
 * Single PDF Reader Page
 */

get_header(); 
get_sidebar();

// Get PDF data from URL parameters or use dummy data
$pdf_id = isset($_GET['pdf']) ? sanitize_text_field($_GET['pdf']) : 1;

// Dummy PDF data (in real scenario, this would come from database)
$pdfs = array(
    1 => array('title' => 'Digital Marketing Guide 2024', 'author' => 'Sarah Johnson', 'pages' => '156', 'size' => '12 MB', 'image' => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=800&h=1000&fit=crop', 'description' => 'A comprehensive guide to digital marketing strategies for 2024, covering SEO, social media, content marketing, and analytics.'),
    2 => array('title' => 'Photography Masterclass', 'author' => 'Mike Peterson', 'pages' => '243', 'size' => '28 MB', 'image' => 'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=800&h=1000&fit=crop', 'description' => 'Learn professional photography techniques, composition rules, lighting setups, and post-processing workflows.'),
    3 => array('title' => 'Business Strategy Handbook', 'author' => 'Emily Chen', 'pages' => '198', 'size' => '15 MB', 'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=800&h=1000&fit=crop', 'description' => 'Strategic planning and execution guide for modern businesses, including case studies and frameworks.'),
    4 => array('title' => 'Modern Web Design', 'author' => 'David Brown', 'pages' => '312', 'size' => '42 MB', 'image' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=800&h=1000&fit=crop', 'description' => 'Complete guide to modern web design principles, UX/UI best practices, and responsive design techniques.'),
);

$pdf = isset($pdfs[$pdf_id]) ? $pdfs[$pdf_id] : $pdfs[1];
?>

<div class="nymia-container">
    <main class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-single-pdf-page">
            <!-- PDF Reader Header -->
            <div class="nymia-pdf-reader-header">
                <a href="<?php echo home_url('/pdf'); ?>" class="nymia-back-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    <span>Back to Library</span>
                </a>
                
                <div class="nymia-pdf-actions">
                    <button class="nymia-pdf-action-btn" onclick="alert('Download feature coming soon!')">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download</span>
                    </button>
                    <button class="nymia-pdf-action-btn" onclick="alert('Share feature coming soon!')">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                        <span>Share</span>
                    </button>
                    <button class="nymia-pdf-action-btn" onclick="alert('Bookmark added!')">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Bookmark</span>
                    </button>
                </div>
            </div>

            <!-- PDF Content Layout -->
            <div class="nymia-pdf-reader-layout">
                <!-- PDF Viewer -->
                <div class="nymia-pdf-viewer">
                    <div class="nymia-pdf-preview">
                        <img src="<?php echo esc_url($pdf['image']); ?>" alt="<?php echo esc_attr($pdf['title']); ?>">
                        <div class="nymia-pdf-overlay">
                            <button class="nymia-read-fullscreen-btn" onclick="alert('Fullscreen reader coming soon!')">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                <span>Open Reader</span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- PDF Controls -->
                    <div class="nymia-pdf-controls">
                        <button class="nymia-control-btn" onclick="alert('Previous page')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>
                        <div class="nymia-page-info">
                            <span class="nymia-current-page">1</span>
                            <span class="nymia-page-separator">/</span>
                            <span class="nymia-total-pages"><?php echo esc_html($pdf['pages']); ?></span>
                        </div>
                        <button class="nymia-control-btn" onclick="alert('Next page')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
                        <button class="nymia-control-btn" onclick="alert('Zoom in')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <line x1="11" y1="8" x2="11" y2="14"></line>
                                <line x1="8" y1="11" x2="14" y2="11"></line>
                            </svg>
                        </button>
                        <button class="nymia-control-btn" onclick="alert('Zoom out')">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <line x1="8" y1="11" x2="14" y2="11"></line>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- PDF Information Sidebar -->
                <aside class="nymia-pdf-info-sidebar">
                    <div class="nymia-pdf-details-card">
                        <h1 class="nymia-pdf-main-title"><?php echo esc_html($pdf['title']); ?></h1>
                        <p class="nymia-pdf-author-name">by <?php echo esc_html($pdf['author']); ?></p>
                        
                        <div class="nymia-pdf-meta">
                            <div class="nymia-meta-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <span><?php echo esc_html($pdf['pages']); ?> pages</span>
                            </div>
                            <div class="nymia-meta-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                                <span><?php echo esc_html($pdf['size']); ?></span>
                            </div>
                            <div class="nymia-meta-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <span>4.8/5.0</span>
                            </div>
                        </div>

                        <div class="nymia-pdf-description">
                            <h3>About this PDF</h3>
                            <p><?php echo esc_html($pdf['description']); ?></p>
                        </div>

                        <button class="nymia-premium-btn">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span>Unlock Full Access</span>
                        </button>
                    </div>

                    <!-- Related PDFs -->
                    <div class="nymia-related-pdfs">
                        <h3>Related PDFs</h3>
                        <div class="nymia-related-list">
                            <?php 
                            $related = array_slice($pdfs, 0, 3, true);
                            foreach ($related as $id => $related_pdf): 
                                if ($id == $pdf_id) continue;
                            ?>
                            <a href="<?php echo home_url('/single-pdf/?pdf=' . $id); ?>" class="nymia-related-item">
                                <img src="<?php echo esc_url($related_pdf['image']); ?>" alt="<?php echo esc_attr($related_pdf['title']); ?>">
                                <div class="nymia-related-info">
                                    <h4><?php echo esc_html($related_pdf['title']); ?></h4>
                                    <p><?php echo esc_html($related_pdf['author']); ?></p>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>

