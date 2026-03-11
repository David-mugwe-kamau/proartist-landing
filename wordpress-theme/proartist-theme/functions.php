<?php
/**
 * ProArtist Africa Theme Functions
 *
 * @package ProArtist
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function proartist_setup() {
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
        'primary' => __('Primary Menu', 'proartist'),
        'footer' => __('Footer Menu', 'proartist'),
    ));
}
add_action('after_setup_theme', 'proartist_setup');

/**
 * Enqueue Scripts and Styles
 */
function proartist_scripts() {
    // Montserrat Font
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Main Stylesheet
    wp_enqueue_style('proartist-style', get_stylesheet_uri(), array('montserrat-font'), '1.0.0');
    wp_enqueue_style('proartist-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    
    // JavaScript
    wp_enqueue_script('proartist-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'proartist_scripts');

/**
 * Add html class on front page for home slides scroll-snap
 */
add_action('wp_head', function() {
    if (is_front_page()) {
        echo '<script>document.documentElement.classList.add("home-slides-root");</script>';
    }
}, 1);

/**
 * Register Custom Post Types
 */
function proartist_register_post_types() {
    // Brands Post Type
    register_post_type('brand', array(
        'labels' => array(
            'name' => __('Brands', 'proartist'),
            'singular_name' => __('Brand', 'proartist'),
            'add_new' => __('Add New Brand', 'proartist'),
            'add_new_item' => __('Add New Brand', 'proartist'),
            'edit_item' => __('Edit Brand', 'proartist'),
            'new_item' => __('New Brand', 'proartist'),
            'view_item' => __('View Brand', 'proartist'),
            'search_items' => __('Search Brands', 'proartist'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-store',
        'rewrite' => array('slug' => 'brands'),
    ));
    
    // Jobs Post Type
    register_post_type('job', array(
        'labels' => array(
            'name' => __('Jobs', 'proartist'),
            'singular_name' => __('Job', 'proartist'),
            'add_new' => __('Add New Job', 'proartist'),
            'add_new_item' => __('Add New Job', 'proartist'),
            'edit_item' => __('Edit Job', 'proartist'),
            'new_item' => __('New Job', 'proartist'),
            'view_item' => __('View Job', 'proartist'),
            'search_items' => __('Search Jobs', 'proartist'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'jobs'),
    ));
}
add_action('init', 'proartist_register_post_types');

/**
 * Add Custom Meta Boxes for Brands
 */
function proartist_add_brand_meta_boxes() {
    add_meta_box(
        'brand_stats',
        __('Brand Statistics', 'proartist'),
        'proartist_brand_stats_callback',
        'brand',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'proartist_add_brand_meta_boxes');

function proartist_brand_stats_callback($post) {
    wp_nonce_field('proartist_save_brand_stats', 'proartist_brand_stats_nonce');
    
    $locations = get_post_meta($post->ID, '_brand_locations', true);
    $customers = get_post_meta($post->ID, '_brand_customers', true);
    $revenue = get_post_meta($post->ID, '_brand_revenue', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="brand_locations">Locations</label></th>';
    echo '<td><input type="text" id="brand_locations" name="brand_locations" value="' . esc_attr($locations) . '" /></td></tr>';
    echo '<tr><th><label for="brand_customers">Customers</label></th>';
    echo '<td><input type="text" id="brand_customers" name="brand_customers" value="' . esc_attr($customers) . '" /></td></tr>';
    echo '<tr><th><label for="brand_revenue">Revenue</label></th>';
    echo '<td><input type="text" id="brand_revenue" name="brand_revenue" value="' . esc_attr($revenue) . '" /></td></tr>';
    echo '</table>';
}

function proartist_save_brand_stats($post_id) {
    if (!isset($_POST['proartist_brand_stats_nonce']) || 
        !wp_verify_nonce($_POST['proartist_brand_stats_nonce'], 'proartist_save_brand_stats')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['brand_locations'])) {
        update_post_meta($post_id, '_brand_locations', sanitize_text_field($_POST['brand_locations']));
    }
    if (isset($_POST['brand_customers'])) {
        update_post_meta($post_id, '_brand_customers', sanitize_text_field($_POST['brand_customers']));
    }
    if (isset($_POST['brand_revenue'])) {
        update_post_meta($post_id, '_brand_revenue', sanitize_text_field($_POST['brand_revenue']));
    }
}
add_action('save_post', 'proartist_save_brand_stats');

/**
 * Contact Form Handler
 */
function proartist_handle_contact_form() {
    if (!isset($_POST['proartist_contact_nonce']) || 
        !wp_verify_nonce($_POST['proartist_contact_nonce'], 'proartist_contact_form')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $phone = sanitize_text_field($_POST['contact_phone']);
    $message = sanitize_textarea_field($_POST['contact_message']);
    $form_type = sanitize_text_field($_POST['form_type']); // 'invest' or 'apply'
    $job_title = isset($_POST['job_title']) ? sanitize_text_field($_POST['job_title']) : '';
    
    $to = get_option('admin_email');
    $subject = $form_type === 'invest' ? 'New Investment Inquiry - ProArtist Africa' : 'New Job Application - ProArtist Africa';
    
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    if ($job_title) {
        $email_message .= "Position Applied For: $job_title\n";
    }
    $email_message .= "Message:\n$message\n";
    $email_message .= "\n---\nSubmitted from: " . home_url() . "\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8', "From: $name <$email>", "Reply-To: $email");
    
    wp_mail($to, $subject, $email_message, $headers);
    
    wp_redirect(add_query_arg('sent', '1', wp_get_referer()));
    exit;
}
add_action('admin_post_proartist_contact', 'proartist_handle_contact_form');
add_action('admin_post_nopriv_proartist_contact', 'proartist_handle_contact_form');

