<?php
/**
 * @package      TwentyOfTime
 * @author       Friso van Dijk [www.frisovandijk.com]
 * @copyright    Copyright (c) 2015, Friso van Dijk
 * @license      http://www.frisovandijk.com/public/MIT-LICENSE.txt
 */

//* Load the Genesis framework
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme defenitions
define( 'CHILD_THEME_NAME', 'Twenty of Time' );
define( 'CHILD_THEME_URL', 'http://www.frisovandijk.com/' );
define( 'CHILD_THEME_VERSION', '1.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );
//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );
//* Add support for custom background
add_theme_support( 'custom-background' );
//* Add 3 footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Code to Display Featured Image on top of the post
add_action( 'genesis_before_entry', 'tot_featured_post_image', 8 );
function tot_featured_post_image() {
	if (!is_singular('post') && !is_home() && !is_category())  return;
	the_post_thumbnail('post-image');
}

//* Modify the Genesis content limit read more link
add_filter( 'get_the_content_more_link', 'tot_read_more_link' );
function tot_read_more_link() {
	return '<br/><a class="more-link" href="' . get_permalink() . '">Continue reading &#187;</a>';
}

//* Customize the post info function
add_filter( 'genesis_post_info', 'tot_post_info_filter' );
function tot_post_info_filter($post_info) {
	if ( ! is_page() ) {
		$post_info = 'Posted by [post_author] on [post_date] [post_comments] [post_edit]';
		return $post_info;
	}
}

//* Customize the post meta function
add_filter( 'genesis_post_meta', 'tot_post_meta_filter' );
function tot_post_meta_filter($post_meta) {
	if ( !is_page() ) {
		$post_meta = '[post_tags before="Tagged: "]';
		return $post_meta;
	}
}

//* Remove Post Meta
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

//* Reposition the primary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_nav' );

remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

//* Sticky Footer Functions
add_action( 'genesis_before_header', 'stickyfoot_wrap_begin');
function stickyfoot_wrap_begin() {
	echo '<div class="page-wrap">';
}

add_action( 'genesis_before_footer', 'stickyfoot_wrap_end');
function stickyfoot_wrap_end() {
	echo '</div><!-- page-wrap -->';
}

//* Customize the entire footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'tot_custom_footer' );
function tot_custom_footer() {
	?>
	<p>&copy; 2015 <?php echo get_bloginfo('name'); ?> · Design by <a href="http://www.frisovandijk.com" target="_blank">Friso van Dijk</a></p>
<?php
}