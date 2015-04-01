<?php
/*
Template Name: About
*/
get_header(); ?>
<div class="about-us-introduction-container">
  <div class="row">
    <div class="small-12 columns about-us-introduction">
      <h3>Donec Facuibus ultircies congue</h3>
      <p>Maecenas eget turpis turpis. Nunc vel metus augue. Aenean euismod cursus ligula eget dapibus. Praesent vel erat in tortor placerat dignissim. Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>
  </div>
</div>


<section class="stats-container about-us"><!--  START stats-container -->
  <div class="row stats">
    <div class="small-12 medium-3 columns choose-us">
      <h3>Why Choose Us?</h3>
      <ul class="list-group">
        <li class="list-group-item"><i class="fa fa-arrow-right fa-fw"></i>Lorem ipsum dolor sit.</li>
        <li class="list-group-item"><i class="fa fa-arrow-right fa-fw"></i>Temporibus mollitia fugiat repudiandae?</li>
        <li class="list-group-item"><i class="fa fa-arrow-right fa-fw"></i>Veniam officia voluptatibus dolorum.</li>
        <li class="list-group-item"><i class="fa fa-arrow-right fa-fw"></i>Beatae, dolorem, perferendis. Sunt.</li>
        <li class="list-group-item"><i class="fa fa-arrow-right fa-fw"></i>Tenetur unde, at aperiam!</li>
        <li class="list-group-item"><i class="fa fa-arrow-right fa-fw"></i>Assumenda qui molestias ab.</li>
      </ul>
    </div>
    <div class="small-12 medium-6 columns circle-graphs">
      <h3 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="secondary-color">Nesciunt</span>, harum, dignissimos! Suscipit harum, corporis modi!</h3>
      
      
      
        <div class="row">
          <div class="small-3 medium-6 large-3 columns nopadding">
            <h4 class="small-centered"><?php the_field('graph_01'); ?></h4>
            <input type="text" value="<?php the_field('graph_01_input'); ?>" class="dial" data-angleArc="180" data-angleOffset="-90" data-thickness=".2" data-readonly="true" data-width="100%">
          </div>
          <div class="small-3 medium-6 large-3 columns nopadding">
            <h4><?php the_field('graph_02'); ?></h4>
            <input type="text" value="<?php the_field('graph_02_input'); ?>" class="dial" data-angleArc="180" data-angleOffset="-90" data-thickness=".2" data-readonly="true" data-width="100%">
            </div>
          <div class="small-3 medium-6 large-3 columns nopadding">
            <h4><?php the_field('graph_03'); ?></h4>
            <input type="text" value="<?php the_field('graph_03_input'); ?>" class="dial" data-angleArc="180" data-angleOffset="-90" data-thickness=".2" data-readonly="true" data-width="100%">
            </div>
          <div class="small-3 medium-6 large-3 columns nopadding">
            <h4><?php the_field('graph_04'); ?></h4>
            <input type="text" value="<?php the_field('graph_04_input'); ?>" class="dial" data-angleArc="180" data-angleOffset="-90" data-thickness=".2" data-readonly="true" data-width="100%">
            </div>
        </div>
    </div>
<script>
    $(function() {
        $(".dial").knob({
        });
    });
</script>
        
        
    <div class="small-12 medium-3 columns single-testimonial">
      <h3>What Clients Say?</h3>
      <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi necessitatibus quam eius aut temporibus ipsa sed autem labore nihil eligendi.<cite>John Doe</cite></blockquote>
    </div>
  </div><!--  END stats -->
</section><!--  END stats-container -->






    <div class="services-container"> <!--  START services -->
      <div class="row services" data-equalizer>
      <div class="row">
        <div class="small-12 columns small-centered">
          <h2 class="text-center">Our Team</h2>
        </div>
      </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg nopadding">
            <?php 
              $image = get_field('teammate_image_01');
              if( !empty($image) ): ?>
              	<img class="corners" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            <div class="service-button"><?php the_field('teammate_name_01'); ?></div>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg nopadding">
          <?php 
              $image = get_field('teammate_image_02');
              if( !empty($image) ): ?>
              	<img class="corners" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            <div class="service-button"><?php the_field('teammate_name_02'); ?></div>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg nopadding">
          <?php 
              $image = get_field('teammate_image_03');
              if( !empty($image) ): ?>
              	<img class="corners" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            <div class="service-button"><?php the_field('teammate_name_03'); ?></div>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg nopadding">
          <?php 
              $image = get_field('teammate_image_04');
              if( !empty($image) ): ?>
              	<img class="corners" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            <div class="service-button"><?php the_field('teammate_name_04'); ?></div>
          </div>
        </div>
      </div><!--  END services -->
    </div><!--  END services-container -->





<div class="row">
  <div class="small-12 columns about-us-closing">
    <h3>Best Solution is the simplest IDEA!</h3>
    <p >Capacitance cascading integer reflective interface data development high bus cache dithering transponder. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
  </div>
</div>



<div class="too-legit-container">
  <div class="row too-legit">
  <div class="legit-title">
    <h4>Our Happy Clients</h4>
  </div>
    <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-6">
     <li>
      <p class="legit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jquery-logo.png" alt="jquery-logo_03" width="102" height="26" /></p>
      </li>
      <li>
      <p class="legit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jquery-logo.png" alt="jquery-logo_03" width="102" height="26" /></p>
      </li>
     <li>
      <p class="legit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jquery-logo.png" alt="jquery-logo_03" width="102" height="26" /></p>
      </li>
     <li>
      <p class="legit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jquery-logo.png" alt="jquery-logo_03" width="102" height="26" /></p>
      </li>
     <li>
      <p class="legit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jquery-logo.png" alt="jquery-logo_03" width="102" height="26" /></p>
      </li>
     <li>
      <p class="legit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jquery-logo.png" alt="jquery-logo_03" width="102" height="26" /></p>
      </li>
    </ul>
    </div>
</div><!--  END too-legit-container -->
<?php get_footer(); ?>
