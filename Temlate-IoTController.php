<?php 
/**
* Template Name: IoT Controller
*/
?>

<?php get_header();?>

<div class="fixed-social">
    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/CRVENI DETALJ GORE DESNO.png"
            alt="Fixed-social"></a>
</div>



<section class="page-wrap iot-background">
    <div class="containerr">
        <div class="iot-strana">
            <div class="iot-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/IOT CONTROLLER.png" alt="">
            </div>

            <div class="iot-text">
                <?php 
    if(have_posts()) : while(have_posts()) : the_post(); ?>
                <p><?php echo get_the_content();?></p>

                <?php  endwhile; endif;
?>
            </div>
        </div>
        
    </div>

    <div class="iot-mob">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/IOT CONTROLLER-mob.png" alt="2222">
    </div>
</section>
<?php get_footer();?>