<?php 
/**
* Template Name: Electric scooter
*/
?>

<div class="fixed-social">
  <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/CRVENI DETALJ GORE DESNO.png"
      alt="Fixed-social"></a>
</div>

<?php get_header() ?>
<div class="pozadina-elc">
  <div class="elc-scoo">
    <img src="<?php echo get_template_directory_uri()?>/assets/img/SLIKA RUCKA SKUTERA.png" alt="66">
    <div class="cont-elc">
      <?php 
    if(have_posts()) : while(have_posts()) : the_post(); ?>
      <p><?php echo get_the_content();?></p>

      <?php  endwhile; endif;
?>
    </div>
  </div>

  <div class="elc-scoo-2">
    <img src="<?php echo get_template_directory_uri()?>/assets/img/SLIKA RUCKA SKUTERA.png" alt="66">
  </div>


  <div class="video-slike postovi-home elc-postovi1">
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



  <div class="video-slike postovi-home elc-postovi">
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




  <!--Mobile-content-->
  <div class="elc-mob-slike">
    <div class="elc-dve-slike">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/slika 3.png" alt="">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/slika 4.png" alt="">
    </div>
    <div class="elc-jedna-slika">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/SKUTER-SLIKA 1.png" alt="">
    </div>
    <div class="elc-dve-slike">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/slika 3.png" alt="">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/slika 4.png" alt="">
    </div>
  </div>

  <?php get_footer() ?>