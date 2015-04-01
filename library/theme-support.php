<?php

if (!function_exists('FoundationPress_theme_support')) :
function FoundationPress_theme_support() {
    // Add language support
    load_theme_textdomain('FoundationPress', get_template_directory() . '/languages');

    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}

add_action('after_setup_theme', 'FoundationPress_theme_support'); 
endif;
// Prevents the text widgets from stripping out break tags. Actually, it replaces the shortcode for a breaktag after processsing. -JMS
add_filter ( 'widget_title' , 'my_widget_title' , 10 , 3 ) ;
function my_widget_title ( $title )
{
$title = str_replace ( "[br]" , "<br/>" , $title ) ;
$title = str_replace ( "[span]" , "<span>" , $title ) ;
$title = str_replace ( "[/span]" , "</span>" , $title ) ;
return $title ;
}

add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
  add_image_size( '570x270', 570, 270, array( 'center', 'center' )  ); // (cropped)
  add_image_size( '370x270', 370, 270, array( 'center', 'center' ) ); // (cropped)
  add_image_size( '270x270', 270, 270, array( 'center', 'center' ) ); // (cropped)
}

function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>