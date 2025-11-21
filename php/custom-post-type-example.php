<?php
/**
 * Example: Register a "Books" custom post type.
 */
function wps_register_books_cpt() {
    register_post_type('books', array(
        'label' => 'Books',
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-book',
    ));
}
add_action('init', 'wps_register_books_cpt');
