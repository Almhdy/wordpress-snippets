<?php
/**
 * Example: Register a "Books" custom post type.
 */

add_action('init', 'wps_register_books_cpt');
function wps_register_books_cpt()
{
      $labels = [
        'name' => __('Books', 'text-domain'),
        'singular_name' => __('Book', 'text-domain'),
        'add_new' => __('Add New Book', 'text-domain'),
        'add_new_item' => __('Add New Book', 'text-domain'),
        'edit_item' => __('Edit Book', 'text-domain'),
        'new_item' => __('New Book', 'text-domain'),
        'view_item' => __('View Book', 'text-domain'),
        'search_items' => __('Search Books', 'text-domain'),
        'not_found' => __('No books found', 'text-domain'),
        'not_found_in_trash' => __('No books found in Trash', 'text-domain'),
        'all_items' => __('All Books', 'text-domain'),
        'menu_name' => __('MV Books', 'text-domain'),
        'name_admin_bar' => __('Book', 'text-domain'),
      ];
      $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'show_in_admin_bar' => true,
        'show_in_rest' => true, // Enable Gutenberg editor
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_position' => 20,
        'menu_icon' => 'dashicons-book-alt',
      ];
      register_post_type('mv_books', $args);
}

