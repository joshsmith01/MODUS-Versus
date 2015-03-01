<?php
if (!function_exists('foundationpress_sidebar_widgets')) :
function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));
  
  register_sidebar(array(
      'id' => 'footer-widgets_1-4',
      'name' => __('Footer widgets_1-4', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6 class="footer-header">',
      'after_title' => '</h6>'      
  ));
  register_sidebar(array(
      'id' => 'footer-widgets_2-4',
      'name' => __('Footer widgets_2-4', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="small-12 medium-6 large-2  columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6 class="footer-header">',
      'after_title' => '</h6>'      
  ));
  register_sidebar(array(
      'id' => 'footer-widgets_3-4',
      'name' => __('Footer widgets_3-4', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="small-12 medium-6 large-2 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6 class="footer-header">',
      'after_title' => '</h6>'      
  ));
  register_sidebar(array(
      'id' => 'footer-widgets_4-4',
      'name' => __('Footer widgets_4-4', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6 class="footer-header footer-header_4-4">',
      'after_title' => '</h6>'      
  ));
  
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
