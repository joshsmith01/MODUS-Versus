<?php
/*
Template Name: Contact
*/
get_header(); ?>
<div class="row map-container">
  <div class="small-12 columns map ">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3302.4778460594644!2d-118.32154799999998!3d34.134115!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf0a45505a7d%3A0xabb7acc626709843!2sHollywood+Sign!5e0!3m2!1sen!2sus!4v1427318758360" width="100%" height="400" frameborder="0" style="border:0"></iframe>
  </div>
</div><!--  END map-container -->

<div class="row contact-intro-container">
  <div class="small-12 columns contact-intro">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, adipisci, nihil, repudiandae aspernatur quaerat autem natus molestiae reprehenderit ipsam ab saepe incidunt consequatur.</p>
  </div>
</div><!--  END contact-intro-container -->

<div class="row contact-forms-action-container">
  <div class="small-12 medium-8 columns">
    <h3 class="form-title">Send Inquiry</h3>
    <?php echo do_shortcode( '[contact-form-7 id="80" title="Contact Page Contact form"]' ); ?>  
  </div>
  <div class="small-12 medium-4 columns">
    <div class="row">
      <h3 class="small-12 columns nopadding">Address</h3>
      <ul class="icon">
        <li class="icon-li marker"><p>Ust interdum tristique est com modo pharetra.</p></li>
        <li class="icon-li phone"><a  href="tel:11156985698">111 5698 5698</a></li><br>
        <li class="icon-li email"><a class="secondary-color" href="mailto:modus@versus.com">modus@versus.com</a></li>
      </ul>
      
      
    </div>
  </div>
</div>


<?php get_footer(); ?>
