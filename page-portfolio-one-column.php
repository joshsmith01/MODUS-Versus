<?php
/*
Template Name: Portfolio One Column
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-9 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="row">
	  <img class="small-6 columns">
	    <?php the_post_thumbnail(); ?>
	  </img>
		<article class="small-6 columns" <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
			  <?php the_post() ; ?>
				<?php the_excerpt(); ?>
				<row>
  				<div class="small-6 columns">
    				<a href="<?php get_the_permalink() ?>"><i class="fa fa-link"></i></a>
  				</div>
  				<div class="small-6 columns">
  				  <a href="<?php get_the_permalink() ?>" class="button small">View Details</a>
  				</div>
				</row>
			</div>
		</article>
	</div>
	<?php endwhile; // End the loop ?>

	</div>
</div>

<?php get_footer(); ?>
