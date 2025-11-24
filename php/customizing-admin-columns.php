<?php
/**
 * Customizing admin columns
 * change {$post_type} to your post type
 * example: {$post_type} = 'MV_Slider'
 */

// Custom columns   
add_filter('manage_{$post_type}_posts_columns', 'custom_{$post_type}_posts_columns');
function custom_{$post_type}_posts_columns($columns) {
  unset($columns['date']); // Remove the date column
  $columns['{$post_type}_author'] = __('Author', 'text-domain'); 
  $columns['{$post_type}_categories'] = __('Categories', 'text-domain');
  $columns['{$post_type}_tags'] = __('Tags', 'text-domain'); 
  $columns['{$post_type}_image'] = __('Image', 'text-domain'); 
  return $columns;
}

// Custom column content
add_action('manage_{$post_type}_posts_custom_column', 'custom_{$post_type}_posts_custom_column', 10, 2);
function custom_{$post_type}_posts_custom_column($column, $post_id) {
  switch ($column) {
    case  '{$post_type}_author':
      if (get_the_author($post_id)) echo get_the_author('', $post_id); else echo 'N/A';
      break;
    case '{$post_type}_categories':
      if (get_the_category($post_id)) echo get_the_category_list(', ', '', $post_id); else echo 'N/A';
      break;
    case '{$post_type}_tags':
      if (get_the_tags($post_id)) echo get_the_tag_list(', ', '', $post_id); else echo 'N/A';
      break;
    case '{$post_type}_image':
      if (has_post_thumbnail($post_id)) the_post_thumbnail([75, 50]); else echo 'N/A';
      break;
  }

  // Sort Custom columns
  add_filter('manage_edit-{$post_type}_sortable_columns', 'custom_{$post_type}_sortable_columns');
  function custom_{$post_type}_sortable_columns($columns) {
    $columns['{$post_type}_author'] = '{$post_type}_author';
    $columns['{$post_type}_categories'] = '{$post_type}_categories';
    $columns['{$post_type}_tags'] = '{$post_type}_tags';
    return $columns;
  }       