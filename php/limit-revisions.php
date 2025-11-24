<?php

/**
 * Limit post revisions to reduce database usage.
 */
add_filter('wp_revisions_to_keep', function ($num, $post) {
  return 5; // Change to desired number
}, 10, 2);
