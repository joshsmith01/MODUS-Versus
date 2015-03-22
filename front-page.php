<?php get_header(); ?>
  <?php do_action('foundationPress_before_content'); ?>
    <?php layerslider(1) ?>



  <div class="top-services-container">
    <div class="row top-services-banner">
      <div class="small-12 columns">
        <h2>Some of our top Services</h2>
      </div>
        <div class="small-12 medium-6 large-9 columns">
          <p>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</p>
        </div>
        <div class="small-12 medium-6 large-3 columns button-holder">
          <div class="button large small-centered radius">View More</div>
      </div>
    </div>
  </div>
   
    <div class="services-container"> <!--  START services -->
      <div class="row services" data-equalizer>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <h3>SUSPENDISSE</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde alias impedit velit sit ea!</p>
            <div class="button">Read More</div>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg">
            <i class="fa fa-key"></i>
            <h3>MAECENAS</h3><p>Iste architecto omnis, esse facere quod ratione, officia veritatis fugit.</p>
            <div class="button">Read More</div>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg">
            <i class="fa fa-flag"></i>
            <h3>ALIQUAM</h3><p>Iste architecto omnis, esse facere quod ratione, officia veritatis fugit.</p>
            <div class="button">Read More</div>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns service" data-equalizer-watch>
          <div class="service-bg">
            <i class="fa fa-flask"></i>
            <h3>HABITASSE</h3><p>Ducimus voluptates assumenda, illum adipisci sed quaerat est ipsum nisi.</p>
            <div class="button">Read More</div>
          </div>
        </div>
      </div><!--  END services -->
    </div><!--  END services-container -->
  
  
    
    <div class="carousel-container"><!--  START carousel -->
    <?php include("img/path-down.svg"); ?>
      <div class="row carousel">
        <h2 class="small-12 columns text-center">Why Modus Versus?</h2>
        <p class="small-12 columns text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate.</p>
      

      </div><!--  END carousel -->
    </div><!--  END carousel-container -->    
<div class="why-modus-container">
  <div class="row why-modus">
    <div class="small-12 medium-7 medium-centered large-4 large-uncentered columns small-padding "><div class="why-image-holder-01">
      <div class="frame">
        <span class="button-01"></span>
        <span class="button-02"></span>
        <span class="button-03"></span>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-images/happy-meeting-in-background.jpg" alt="why-image-holder-02 happy-meeting-in-background" width="100%" height="auto" /></div></div>
    <div class="small-12 medium-7 medium-centered large-4 large-uncentered columns small-padding"><div class="why-image-holder-02">
     <div class="frame">
      <span class="button-01"></span>
      <span class="button-02"></span>
      <span class="button-03"></span>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-images/listening-over-the-shoulder.jpg" alt="listening-over-the-shoulder" width="100%" height="auto" /></div></div>
    <div class="small-12 medium-7 medium-centered large-4 large-uncentered columns small-padding"><div class="why-image-holder-03">
     <div class="frame">
      <span class="button-01"></span>
      <span class="button-02"></span>
      <span class="button-03"></span>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-images/stern-arms-crossed.jpg" alt="stern-arms-crossed" width="100%" height="auto" /></div></div>
    </div>
</div>
    <section class="stats-container"><!--  START stats-container -->
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
          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="secondary-color">Nesciunt</span>, harum, dignissimos! Suscipit harum, corporis modi!
            <div class="row">
              <div class="small-3 columns">
              <div id="circle">
              </div>
                  <h4>Lorem</h4>
                </img></div>
              <div class="small-3 columns"><img src="" alt="">
                  <h4>Ullam</h4>
                </img></div>
              <div class="small-3 columns"><img src="" alt="">
                  <h4>Minus</h4>
                </img></div>
              <div class="small-3 columns"><img src="" alt="">
                  <h4>Quas</h4>
                </img></div>
            </div>
          </h3>
        </div>
        <div class="small-12 medium-3 columns single-testimonial">
          <h3>What Clients Say?</h3>
          <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi necessitatibus quam eius aut temporibus ipsa sed autem labore nihil eligendi.<cite>John Doe</cite></blockquote>
        </div>
      </div><!--  END stats -->
    </section><!--  END stats-container -->
    
    
    <div class="too-legit-container">
      <div class="row too-legit">
      <div class="legit-title">
        <h4>Our Happy Clients</h4>
      </div>
        <ul class="small-block-grid-6">
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
  <?php do_action('foundationPress_after_content'); ?>
<?php get_footer(); ?>
