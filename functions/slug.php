<?php
/*
 * A function to get the slug from posts.
 * This is useful when creating unique IDs
 * for elements in a loop.
 */
 
function the_slug() {
	global $post;
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}
 
