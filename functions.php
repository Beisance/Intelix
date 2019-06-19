<?php
if (function_exists('register_sidebar'))
	register_sidebar();

function new_excerpt_more($more) {
       global $post;
	return '&nbsp;<a href="'. get_permalink($post->ID) . '">Read More...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/* Limit the excerpt by character length */
function get_character_limited_excerpt(){
$permalink = get_permalink($post->ID);
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 150);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'">Read More</a>';
return $excerpt;
}

function blockusers_init() {
	if ( is_admin() && ! current_user_can( 'administrator' ) ) {
		wp_redirect( home_url() );
		exit;
	}
}

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(610,0);
}

add_filter('excerpt_length', 'my_excerpt_length'); //we're shortening the_excerpt for news-stack.
function my_excerpt_length($length) {
return 20; // Or whatever we want the length to be.
}

function remove_comments_rss( $for_comments ) {
    return;
}
add_filter('post_comments_feed_link','remove_comments_rss');

add_theme_support( 'menus' );

function mark_menu_item_as_active($classes, $item) {

    if( in_array('current_menu_item',$classes) && ( is_category('my-category') /* OR ...*/  ) )   {
        $classes[] = 'current-menu-item';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'mark_menu_item_as_active', 10, 2);

/* add category class on single pages in order to highlight the category in navigation */
function sgr_show_current_cat_on_single($output) {

	global $post;

	if( is_single() ) {

		$categories = wp_get_post_categories($post->ID);

		foreach( $categories as $catid ) {
			$cat = get_category($catid);
			// Find cat-item-ID in the string
			if(preg_match('#cat-item-' . $cat->cat_ID . '#', $output)) {
				$output = str_replace('cat-item-'.$cat->cat_ID, 'cat-item-'.$cat->cat_ID . ' current-cat', $output);
			}
		}

	}
	return $output;
}
add_filter('wp_list_categories', 'sgr_show_current_cat_on_single');

// Add HSTS [HTTP Strict Transport Security]
add_action( 'send_headers', 'tgm_io_strict_transport_security' );
/**
 * Enables the HTTP Strict Transport Security (HSTS) header.
 *
 * @since 1.0.0
 */
function tgm_io_strict_transport_security() {
 
    header( 'Strict-Transport-Security: max-age=10886400; includeSubDomains; preload' );
 
}

?>
