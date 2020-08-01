<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html><!--<![endif]-->

  <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36944598-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-36944598-1');
	</script>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Tite -->
    <title><?php bloginfo( ‘name’ ); ?> - <?php bloginfo ( 'description' ); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">

    <?php wp_head(); ?>

  </head>

  <body>
    <div id="wrapper">

      <!-- Mobile Sidebar Navigation -->
      <div id="sidebar-wrapper">
        <div class="sidebar-container">
          <div class="logo">
            <a href="#">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.svg" width="60" height="60" alt="">
            </a>
          </div>
          <?php wp_nav_menu (
              array (
                  'theme_location' => 'sidebar-nav',
                  'container' => 'ul',
                  'menu_class' => 'sidebar-nav',
              )
            );
          ?>


          <ul class="sidebar-nav--social">
            <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
              <?php if (get_sub_field('behance')): ?>
                <li>
                  <a href="<?php the_sub_field('behance'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/behance.png" width="25px" height="25px" alt="Behance Profile">
                  </a>
                </li>
              <?php endif; ?>
            <?php endwhile; ?>

            <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
              <?php if (get_sub_field('dribbble')): ?>
                <li>
                  <a href="<?php the_sub_field('dribbble'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/dribbble.png" width="25px" height="25px" alt="Dribbble Profile">
                  </a>
                </li>
              <?php endif; ?>
            <?php endwhile; ?>

            <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
              <?php if (get_sub_field('instagram')): ?>
                <li>
                  <a href="<?php the_sub_field('instagram'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/instagram.png" width="25px" height="25px" alt="Instagram Profile">
                  </a>
                </li>
              <?php endif; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>

      <!-- Page Content -->
      <div id="page-content-wrapper">

        <section id="home">
          <div class="hero">
            <!-- Desktop Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark">
              <a class="navbar-brand" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.svg" width="60" height="60" alt="">
              </a>
              <a href="#" id="menu-toggle" class="nav-hamburger">
                <ion-icon name="ios-menu"></ion-icon>
              </a>

              <div class="collapse navbar-collapse" id="navbarText">
                <?php wp_nav_menu (
                    array (
                        'theme_location' => 'header-nav',
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav ml-auto',
                    )
                  );
                ?>

                <ul class="navbar-nav">
                  <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
                    <?php if (get_sub_field('behance')): ?>
                      <li class="nav-item social-media">
                        <a class="nav-link" href="<?php the_sub_field('instagram'); ?>">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/behance.png" width="25px" height="25px" alt="Behance Profile">
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php endwhile; ?>

                  <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
                    <?php if (get_sub_field('dribbble')): ?>
                      <li class="nav-item social-media">
                        <a class="nav-link" href="<?php the_sub_field('instagram'); ?>">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/dribbble.png" width="25px" height="25px" alt="Dribble Profile">
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php endwhile; ?>

                  <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
                    <?php if (get_sub_field('instagram')): ?>
                      <li class="nav-item social-media">
                        <a class="nav-link" href="<?php the_sub_field('instagram'); ?>">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/instagram.png" width="25px" height="25px" alt="Instagram Profile">
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </ul>
              </div>
            </nav>
