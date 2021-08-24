<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ======= Header ======= -->
  <header>
    <div class="container-fluid1">
     <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light nav-items">
        <a class="navbar-brand logo" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Group 10.svg" class="d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <?php
                wp_nav_menu( array(
                  'menu'              => 'Menu 1',
                  'theme_location'    => 'headerMenuLocation',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker()
                ));

              // wp_nav_menu( array(
              //   'theme_location' => 'headerMenuLocation',
              //   'container'         => 'div',
              //   'container_class'   => 'navbar-collapse collapse',
              //   'menu_class'        => 'nav navbar-nav',
              // ));
            
            ?>
            <li class="nav-item last-child">
              <a class="nav-link" href="#">0800 113 262</a>
            </li>
    
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">home <span class="sr-only">current</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">our services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">our vision solutions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">about us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">0800 113 262</a>
            </li> -->
          </ul>
        </div>
      </nav>
     </div>
    </div>
  </header>
  <!-- ======= Header ======= -->
 