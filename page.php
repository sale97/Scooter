<?php get_header();?>


<div class="fixed-social">
<a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/CRVENI DETALJ GORE DESNO.png" alt="Fixed-social"></a>
</div>

<section class="page-wrap">
        <div class="container">
                <?php 
    if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h2><?php echo get_the_title() ?></h2>
                <p><?php echo get_the_content();?></p>

                <?php  endwhile; endif;
?>
</section>

<?php get_footer();?>