<?php
/**
 * Template Name: Profile
 * Description: User profile page template with dummy data
 */

get_header();

// Dummy user data
$full_name = 'John Doe';
$user_login = 'johndoe';
$user_email = 'john.doe@example.com';
$user_phone = '+1 (555) 123-4567';
$user_location = 'San Francisco, CA';
$user_registered = 'January 15, 2024';
$user_roles = 'Administrator';
$user_avatar = get_template_directory_uri() . '/assets/images/profile.png';
$user_description = 'Creative designer and developer passionate about building beautiful user experiences. Love working with modern technologies and creating innovative solutions.';
$user_website = 'https://johndoe.com';
?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-profile-container">
            <!-- Profile Header -->
            <div class="nymia-profile-header">
                <div class="nymia-profile-cover"></div>
                <div class="nymia-profile-info-header">
                    <img src="<?php echo esc_url($user_avatar); ?>" 
                         alt="<?php esc_attr_e('Profile Picture', 'nymia'); ?>" 
                         class="nymia-profile-avatar" 
                         width="120" 
                         height="120" />
                    <div class="nymia-profile-name-section">
                        <h1><?php echo esc_html($full_name); ?></h1>
                        <p class="nymia-profile-username">@<?php echo esc_html($user_login); ?></p>
                    </div>
                    <button type="button" class="nymia-btn-gradient top-btn" id="openEditModal"><?php esc_html_e('Edit Profile', 'nymia'); ?></button>
                </div>
            </div>

            <!-- Profile Content -->
            <div class="nymia-profile-content">
                <!-- About Section -->
                <div class="nymia-profile-card">
                    <h2><?php esc_html_e('About', 'nymia'); ?></h2>
                    <div class="nymia-profile-about">
                        <p><?php echo esc_html($user_description); ?></p>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="nymia-profile-card">
                    <h2><?php esc_html_e('Personal Information', 'nymia'); ?></h2>
                    <div class="nymia-profile-details">
                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Full Name', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($full_name); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Username', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($user_login); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Email', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($user_email); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Phone', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($user_phone); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Location', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($user_location); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Joined', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($user_registered); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Role', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><?php echo esc_html($user_roles); ?></span>
                            </div>
                        </div>

                        <div class="nymia-profile-detail-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                            <div>
                                <span class="nymia-detail-label"><?php esc_html_e('Website', 'nymia'); ?></span>
                                <span class="nymia-detail-value"><a href="<?php echo esc_url($user_website); ?>" target="_blank"><?php echo esc_html($user_website); ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="nymia-profile-card">
                    <h2><?php esc_html_e('Statistics', 'nymia'); ?></h2>
                    <div class="nymia-profile-stats">
                        <div class="nymia-stat-item">
                            <div class="nymia-stat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="nymia-stat-content">
                                <span class="nymia-stat-value">1,234</span>
                                <span class="nymia-stat-label"><?php esc_html_e('Followers', 'nymia'); ?></span>
                            </div>
                        </div>

                        <div class="nymia-stat-item">
                            <div class="nymia-stat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="nymia-stat-content">
                                <span class="nymia-stat-value">567</span>
                                <span class="nymia-stat-label"><?php esc_html_e('Following', 'nymia'); ?></span>
                            </div>
                        </div>

                        <div class="nymia-stat-item">
                            <div class="nymia-stat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14,2 14,8 20,8"></polyline>
                                </svg>
                            </div>
                            <div class="nymia-stat-content">
                                <span class="nymia-stat-value">89</span>
                                <span class="nymia-stat-label"><?php esc_html_e('Posts', 'nymia'); ?></span>
                            </div>
                        </div>

                        <div class="nymia-stat-item">
                            <div class="nymia-stat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <div class="nymia-stat-content">
                                <span class="nymia-stat-value">342</span>
                                <span class="nymia-stat-label"><?php esc_html_e('Favorites', 'nymia'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="nymia-profile-card">
                    <h2><?php esc_html_e('Social Links', 'nymia'); ?></h2>
                    <div class="nymia-profile-social">
                        <a href="#" class="nymia-social-link">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <span>Facebook</span>
                        </a>
                        <a href="#" class="nymia-social-link">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                            <span>Twitter</span>
                        </a>
                        <a href="#" class="nymia-social-link">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            <span>LinkedIn</span>
                        </a>
                        <a href="#" class="nymia-social-link">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <span>GitHub</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div id="editProfileModal" class="nymia-modal">
    <div class="nymia-modal-content">
        <div class="nymia-modal-header">
            <h2><?php esc_html_e('Edit Profile', 'nymia'); ?></h2>
            <button type="button" class="nymia-modal-close" id="closeEditModal">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        
        <form id="editProfileForm" class="nymia-edit-profile-form">
            <div class="nymia-form-row">
                <div class="nymia-form-group">
                    <label for="edit_full_name"><?php esc_html_e('Full Name', 'nymia'); ?></label>
                    <input type="text" id="edit_full_name" name="full_name" value="<?php echo esc_attr($full_name); ?>" required />
                </div>
                
                <div class="nymia-form-group">
                    <label for="edit_username"><?php esc_html_e('Username', 'nymia'); ?></label>
                    <input type="text" id="edit_username" name="username" value="<?php echo esc_attr($user_login); ?>" required />
                </div>
            </div>
            
            <div class="nymia-form-row">
                <div class="nymia-form-group">
                    <label for="edit_email"><?php esc_html_e('Email', 'nymia'); ?></label>
                    <input type="email" id="edit_email" name="email" value="<?php echo esc_attr($user_email); ?>" required />
                </div>
                
                <div class="nymia-form-group">
                    <label for="edit_phone"><?php esc_html_e('Phone', 'nymia'); ?></label>
                    <input type="tel" id="edit_phone" name="phone" value="<?php echo esc_attr($user_phone); ?>" />
                </div>
            </div>
            
            <div class="nymia-form-row">
                <div class="nymia-form-group">
                    <label for="edit_location"><?php esc_html_e('Location', 'nymia'); ?></label>
                    <input type="text" id="edit_location" name="location" value="<?php echo esc_attr($user_location); ?>" />
                </div>
                
                <div class="nymia-form-group">
                    <label for="edit_website"><?php esc_html_e('Website', 'nymia'); ?></label>
                    <input type="url" id="edit_website" name="website" value="<?php echo esc_attr($user_website); ?>" />
                </div>
            </div>
            
            <div class="nymia-form-group">
                <label for="edit_bio"><?php esc_html_e('Bio', 'nymia'); ?></label>
                <textarea id="edit_bio" name="bio" rows="4"><?php echo esc_textarea($user_description); ?></textarea>
            </div>
            
            <div class="nymia-modal-footer">
                <button type="button" class="nymia-btn-outline" id="cancelEdit"><?php esc_html_e('Cancel', 'nymia'); ?></button>
                <button type="submit" class="nymia-btn-gradient"><?php esc_html_e('Save Changes', 'nymia'); ?></button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('editProfileModal');
    const openBtn = document.getElementById('openEditModal');
    const closeBtn = document.getElementById('closeEditModal');
    const cancelBtn = document.getElementById('cancelEdit');
    const form = document.getElementById('editProfileForm');
    
    // Open modal
    if (openBtn) {
        openBtn.addEventListener('click', function() {
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }
    
    // Close modal function
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Close button
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }
    
    // Cancel button
    if (cancelBtn) {
        cancelBtn.addEventListener('click', closeModal);
    }
    
    // Close on outside click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Handle form submission
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            // Show success message
            alert('Profile updated successfully!\n\nNote: This is a demo. Changes are not actually saved.');
            
            // Close modal
            closeModal();
            
            // In a real application, you would send this data to the server:
            // fetch('/wp-admin/admin-ajax.php', {
            //     method: 'POST',
            //     body: formData
            // }).then(response => response.json())
            //   .then(data => {
            //       // Update the page with new data
            //       location.reload();
            //   });
        });
    }
});
</script>

<?php get_footer(); ?>

