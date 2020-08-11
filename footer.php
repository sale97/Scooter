<footer id="footer-1">
  <div class="containerr">
    <div class="left-footer">
      <?php
    wp_nav_menu(
            array(
                    'theme_location' => 'secondary-left-menu',
                    'container' => false,
                    'menu_class' => 'newlook_header_menu',
                    'fallback_cb' => '__return_false'
            )
    );
    ?>
    </div>
    <div class="footer-logo">
      <img class="img-footer" src="<?php echo get_template_directory_uri()?>/assets/img/SCOO LOGO FOOTER.png"
        alt="SCOO LOGO FOOTER">
      <p class="copyright">Copyright © 2020 Scoo</p>
    </div>
    <div class="right-footer">
      <?php
    wp_nav_menu(
            array(
                    'theme_location' => 'secondary-right-menu',
                    'container' => false,
                    'menu_class' => 'newlook_header_menu',
                    'fallback_cb' => '__return_false'
            )
    );
    ?>

      <div class="app">
        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/GOOGLE PLAY.png"
            alt="GOOGLE PLAY"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/APP STORE.png" alt="APP STORE"></a>
      </div>
    </div>
  </div>
</footer>

<footer class="footer-2">
  <div class="container">
    <p class="bold-text">SCIENCE
      TECHNOLOGY PARK</p>
    <p>Veljka Dugoševića 56
      11000 Belgrade
      Serbia <br>
      office@m1.rs</p>

    <div class="appi">
      <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/GOOGLE PLAY-mob.png"
          alt="Google play"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/APP STORE-mob.png" alt="App store"></a>
    </div>

    <div class="right-footer">
      <?php
    wp_nav_menu(
            array(
                    'theme_location' => 'secondary-mobile-menu',
                    'container' => false,
                    'menu_class' => 'newlook_header_menu',
                    'fallback_cb' => '__return_false'
            )
    );
    ?>

    </div>
    <div class="socia">
      <a href="#"> <img src="<?php echo get_template_directory_uri()?>/assets/img/IG.png" alt="Instagram"></a>
      <a href="#"> <img src="<?php echo get_template_directory_uri()?>/assets/img/FB.png" alt="Facebook"></a>
    </div>
    <p class="copyright">Copyright © 2020 Scoo</p>

  </div>
</footer>
</body>
<?php wp_footer(); ?>

</html>