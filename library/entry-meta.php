<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {

        echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('%s', 'FoundationPress'), get_the_date('j F Y') ) .' ' . '</time>';
        echo '<span class="byline author">'. __('Posted by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></span>';

    }
endif;
?>
