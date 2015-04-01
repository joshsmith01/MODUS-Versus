<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="small-6 columns port-col-one nopadding">
	  <?php the_post_thumbnail('570x270') ?>
	</div>
	<div class="small-6 columns port-col-one">
  	<header>
		<h2><?php the_title(); ?></h2>
  	</header>
  	<div class="entry-content">
  		<?php the_excerpt() ?>
  	</div>
  	<div class="row">
    	<div class="small-7 columns"><a  href="<?php the_permalink(); ?>"><i class="fa fa-link"></i><?php the_title() ?></a></div>
    	<div class="small-5 columns"><a class="portfolio-button radius small" href="<?php the_permalink(); ?>">View Details</a></div>
  	</div>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>










