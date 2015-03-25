<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="row title-container">
	<div class="small-12 large-12 columns" role="main">
   <h1><?php the_title( ); ?></h1>
	</div>
</div><!--  END title-container -->
<div class="row map-container">
  <div class="small-12 columns map">
     <iframe style="pointer-events: none ;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3302.4778460594644!2d-118.32154799999998!3d34.134115!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf0a45505a7d%3A0xabb7acc626709843!2sHollywood+Sign!5e0!3m2!1sen!2sus!4v1427318758360" width="100%" height="400" frameborder="0" style="border:0"></iframe>

  </div>
</div><!--  END map-container -->

<div class="row contact-intro-container">
  <div class="small-12 columns contact-intro">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, adipisci, nihil, repudiandae aspernatur quaerat autem natus molestiae reprehenderit ipsam ab saepe incidunt consequatur.</p>
  </div>
</div><!--  END contact-intro-container -->

<div class="row contact-forms-action-container">
  <div class="small-12 medium-8 columns">
    <h3>Send Inquiry</h3>
    <?php echo do_shortcode( '[contact-form-7 id="80" title="Contact Page Contact form"]' ); ?>  
  </div>
  <div class="small-12 medium-4 columns"><h3>Address</h3></div>
</div>


<?php get_footer(); ?>
