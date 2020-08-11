<!DOCTYPE html>
<html>

<head>
  <title>SCOO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php wp_head(); ?>
<header>
  <div class="containerr">
    <a href="https://dev1.m1.rs/scoo/"><img class="img-header"
        src="<?php echo get_template_directory_uri()?>/assets/img/LOGO SCOO HEADER.png" alt="SCOO LOGO HEADER"></a>
    <div class="navigation">
      <?php
    wp_nav_menu(
            array(
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'newlook_header_menu',
                    'fallback_cb' => '__return_false'
            )
    );
    ?>
    </div>
  </div>

  <div class="mobile-nav-img">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/MENI.png" alt="">
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <?php
    wp_nav_menu(
            array(
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'newlook_header_menu',
                    'fallback_cb' => '__return_false'
            )
    );
    ?>
          </li>
        </ul>
      </div>
    </nav>

  </div>

</header>

<body>