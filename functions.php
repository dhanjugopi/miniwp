<?php

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'less' ),
) );
function less_scripts()  { 
	wp_register_style( 'less-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
	wp_enqueue_style( 'less-style' ); 
}
add_action('wp_enqueue_scripts', 'less_scripts');
add_filter('show_admin_bar', '__return_false');



// Generate Random Quote
function quote_abhi() {
$quotes = array(
// list all quotes here
"I'd rather be hated for who I am, than loved for who I am not.",
"Its better to burn out than fade away.",
"Nobody dies a virgin... Life fucks us all.",
"Practice makes perfect, but nobody's perfect, so why practice?"
);
$max = count($quotes)-1;
$the_quote = $quotes[rand(0, $max)];
return $the_quote;
}
// define shortcode below
add_shortcode( 'abhi', 'quote_abhi' );



?>
