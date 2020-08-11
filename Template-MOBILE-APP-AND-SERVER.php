<?php 
/**
* Template Name:MOBILE APP AND SERVER STRANA
*/
?>



<?php get_header();?>


<div class="fixed-social">
  <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/CRVENI DETALJ GORE DESNO.png"
      alt="Fixed-social"></a>
</div>




<section class="page-wrap">
  <div class="container">
    <div class="pozadina-mobileapp">

      <div class="mobileapp">
        <?php 
    if(have_posts()) : while(have_posts()) : the_post(); ?>
        <p><?php echo get_the_content();?></p>

        <?php  endwhile; endif;
?>
      </div>

      <div class="slika-mob">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/SCOO LOGO FOOTER.png" alt="SCOO LOGO">
      </div>

      <div class="mob-slike">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/Screen LEVO.png" alt="mobile app">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/TELEFON U SREDINI.png" alt="mobile app">
        <img class="slika-desno" src="<?php echo get_template_directory_uri()?>/assets/img/Screen DESNO.png"
          alt="mobile app">
      </div>


      <div class="ride  container">
        <h2>Ride.</h2>
        <h5>DOWNLOAD AND <b>RIDE</b></h5>
        <p>Electric scooters appeal to those who want to move quickly
          and easily through streets at <b>low cost</b> while avoiding congestion and
          solving first mile / last mile mobility problems.</p>
      </div>


      <div class="moblink container">
        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/GOOGLE PLAY-mob.png"
            alt="GOOGLE PLAY"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/APP STORE-mob.png"
            alt="APP STORE"></a>
        <p>Simple and user friendly app for <b>Android and IOS</b> devices. </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>