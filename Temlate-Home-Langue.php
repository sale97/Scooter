<?php 
/**
* Template Name: Home Langue
*/
?>

<?php get_header();?>


<!-- Three-dots-fixed -->

<div class="fixed-social">
  <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/CRVENI DETALJ GORE DESNO.png"
      alt="Fixed-social"></a>
</div>






<!-- Home-Landing -->

<section class="page-wrap">

  <div class="home-1">
    <?php 
    if(have_posts()) : while(have_posts()) : the_post(); ?>
    <p><?php echo get_the_content();?></p>
    <?php  endwhile; endif;
?>
    <img src="<?php echo get_template_directory_uri()?>/assets/img/ATTRACTIVE RELIABLE ECO_.png"
      alt="ATTRACTIVE RELIABLE ECO_">
    <img class="footer-img-mob"
      src="<?php echo get_template_directory_uri()?>/assets/img/ATTRACTIVE RELIABLE ECO  copy-mob.png"
      alt="ATTRACTIVE RELIABLE ECO_">
  </div>
</section>




<!-- Home-Share -->

<div class="share ">
  <div class="share-txt containerr">
    <h2>Share.</h2>
    <h5>e-scooter <b>sharing</b> service</h5>
    <p>Rising need for modernized transportation infrastructure and sustainable urban mobility are driving the
      transition from <b>conventional to electric</b> modes of transport. Last four years one smart mobility
      trend stood out and became popular in world’s largest cities.
    </p>
  </div>
  <div class="share-img">
    <img class="share-img-mobile" src="<?php echo get_template_directory_uri()?>/assets/img/mob.png" alt="22222">
    <img src="<?php echo get_template_directory_uri()?>/assets/img/RUCKE-SKUTERA.png" alt="RUCKE-SKUTERA">
  </div>
</div>





<!-- Home-Ride -->

<div class="ridehome">
  <div class="ride-text containerr">
    <h2>Ride.</h2>
    <h5>DOWNLOAD AND <b>RIDE</b></h5>
    <p class="ride-text-mob">
      For those who want to move quickly and easily through streets at <b>low cost</b> .</p>
    <p>
      Electric scooters appeal to those who want to move quickly
      and easily through streets at <b>low cost</b> while avoiding congestion and
      solving first mile / last mile mobility problems.
    </p>
  </div>
  <div class="ride-img">
    <img src="<?php echo get_template_directory_uri()?>/assets/img/SLIKA 3 TELEFONA.png" alt="SLIKA 3 TELEFONA">
    <p>Simple and user friendly app for <b>Android and IOS</b> devices. </p>
    <div class="ride-app">
      <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/GOOGLE PLAY-mob.png"
          alt="/GOOGLE PLAY"></a>
      <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/APP STORE-mob.png" alt="APP STORE"></a>
    </div>
  </div>
</div>





<!-- Home-Scooter-img -->

<div class="scoter-slika containerr">
  <div class="scooter-1">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <b>ut labore
        et</b> dolore magna aliqua. </p>
    <img src="<?php echo get_template_directory_uri()?>/assets/img/SKUTER-SLIKA 1.png" alt="">
    <div class="scooter-2">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <b>ut
          labore et</b> dolore magna aliqua.</p>
      <img src="<?php echo get_template_directory_uri()?>/assets/img/SKUTER-SLIKA 2.png" alt="">
    </div>
  </div>
</div>





<!-- Home-Tri-text (Three-text) -->

<div class="tri-text-mob">
  <img src="<?php echo get_template_directory_uri()?>/assets/img/mob-tri-text.jpg" alt="mob-tri-text">
</div>

<div class="tri-text">

  <div class="text-1">

    <a href="https://dev1.m1.rs/scoo/index.php/iot-controller/">
      <h5>IOT CONTROLER</h5>
    </a>
    <p>DEVICE LOCATED IN EACH E-SCOOTER
      WHICH COMMUNICATES WITH
      OPERATING SERVER.</p>

  </div>

  <div class="text-2">

    <a href="https://dev1.m1.rs/scoo/index.php/mobile-app-and-server/">
      <h5>MOBILE APP AND SERVER</h5>
    </a>
    <p>ANDROID AND IOS MOBILE
      APPLICATION WITH
      IMPLEMENTED PAYMENT SYSTEM.</p>

  </div>

  <div class="text-3">
    <a href="https://dev1.m1.rs/scoo/index.php/electric-scooter/">
      <h5>ELECTRIC SCOOTER</h5>
    </a>
    <p>BRANDED FLEET OF VEHICLES MADE
      FOR SHARED MOBILITY USAGE.</p>

  </div>

</div>






<!-- Home-posts-mobile -->

<div class="postovi-home-mob">

  <?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php  endwhile; endif;
?>

  <?php

$args = [
'post_type' => 'post',
'posts_per_page' => 2
];

$query = new WP_Query($args);
?>
  <div class="postovi-home-1-mob">
    <?php if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();?>
    <div class="post-home1">
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

      <?php the_excerpt();?>
    </div>
    <?php endwhile; endif;?>
  </div>
</div>






<!-- Home-postos-desktop -->


<div class="postovi-home">

  <?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php  endwhile; endif;
?>

  <?php

$args = [
'post_type' => 'post',
'posts_per_page' => 4
];

$query = new WP_Query($args);
?>
  <div class="postovi-home-1">
    <?php if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();?>
    <div class="post-home1">
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

      <?php the_excerpt();?>
    </div>
    <?php endwhile; endif;?>
  </div>
</div>

<div class="postovi-home-2">

  <?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php  endwhile; endif;
?>

  <?php

$args = [
'post_type' => 'post',
'posts_per_page' => 4
];

$query = new WP_Query($args);
?>
  <div class="postovi-home-2">
    <?php if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();?>
    <div class="post-home2">
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

      <?php the_excerpt();?>

    </div>
    <?php endwhile; endif;?>
  </div>
</div>






<!-- Home-Care-mobile -->

<div class="care-home-mob">
  <div class="care-text">
    <h2>Care.</h2>
    <h5>ECO-FRENDLY</h5>
    <p>Air pollution is one of the world’s largest <b>health
        and environmental problems</b></p>
  </div>
  <img src="<?php echo get_template_directory_uri()?>/assets/img/RUCKA OD SKUTERA.png" alt="RUCKA OD SKUTERA.png"
    alt="">
</div>





<!-- Home-Care-desktop -->

<div class="care-home">
  <img src="<?php echo get_template_directory_uri()?>/assets/img/RUCKA OD SKUTERA.png" alt="RUCKA OD SKUTERA.png">
  <p>Injoy the <b>sound</b> of past,
    have fun like a child,
    and be safe at the same time.</p>
  <div class="care-text">
    <h2>Care.</h2>
    <h5>ECO-FRENDLY</h5>
    <p>
      Air pollution is one of the world’s largest <b>health
        and environmental problems.</b> Cars, trucks and buses
      powered by fossil fuels are major contributors to air
      pollution.
    </p>
  </div>
</div>



<!-- Home-Video-posts-mobile -->

<div class="postovi-home-mob">

  <?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php  endwhile; endif;
?>

  <?php

$args = [
'post_type' => 'post',
'posts_per_page' => 2
];

$query = new WP_Query($args);
?>
  <div class="postovi-home-1-mob">
    <?php if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();?>
    <div class="post-home1">
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">

      <?php the_excerpt();?>
    </div>
    <?php endwhile; endif;?>
  </div>
</div>






<!-- Home-video-postos-desktop -->

<div class="video-slike postovi-home ">

  <?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php  endwhile; endif;
?>

  <?php

$args = [
'post_type' => 'post',
'posts_per_page' => 4
];

$query = new WP_Query($args);
?>
  <div class="postovi-home-1">
    <?php if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();?>
    <div class="post-home1">
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
      <h5><?php echo get_the_title()?></h5>
      <?php the_excerpt();?>
      <a href="<?php the_permalink();?>">MORE</a>
    </div>
    <?php endwhile; endif;?>
  </div>
</div>





<!-- Home-Image-near-fo0ter-->


<div class="slika-footer">
  <img src="<?php echo get_template_directory_uri()?>/assets/img/ATTRACTIVE RELIABLE ECO Footer.png"
    alt="ATTRACTIVE RELIABLE ECO Footer.png">
  <img class="footer-img-mob"
    src="<?php echo get_template_directory_uri()?>/assets/img/ATTRACTIVE RELIABLE ECO  copy-mob.png"
    alt="ATTRACTIVE RELIABLE ECO Footer.png">
</div>

</section>

<?php get_footer();?>