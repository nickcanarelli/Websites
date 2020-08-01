<footer>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1 logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.svg" width="60" height="60" alt="">
              </div>
              <div class="col-md-11 navigation">
                <div class="row">
                  <div class="col-md-6">
                    <?php wp_nav_menu (
                        array (
                            'theme_location' => 'footer-nav',
                            'container' => 'ul',
                            'menu_class' => 'footer-nav',
                        )
                      );
                    ?>
                  </div>
                  <div class="col-md-6">




                    <ul class="social-media">
                      <!-- Behance -->
                      <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
                        <?php if (get_sub_field('behance')): ?>
                          <li>
                            <a href="<?php the_sub_field('behance'); ?>">
                              <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/behance.png" width="25px" height="25px" alt="Instagram Profile">
                            </a>
                          </li>
                        <?php endif; ?>
                      <?php endwhile; ?>

                      <!-- Dribbble -->
                      <?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
                        <?php if (get_sub_field('dribbble')): ?>
                          <li>
                            <a href="<?php the_sub_field('dribbble'); ?>">
                              <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/dribbble.png" width="25px" height="25px" alt="Instagram Profile">
                            </a>
                          </li>
                        <?php endif; ?>
                      <?php endwhile; ?>

                      <!-- Instagram -->
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
                <div class="row">
                  <div class="col-md-6">
                    <div class="email-contact">
                      <?php while ( have_rows('footer', 'option') ) : the_row(); ?>
                        <?php if (get_sub_field('contact_text', 'contact_email')): ?>

                        <?php the_sub_field('contact_text'); ?>
                        <a href="mailto:<?php the_sub_field('contact_email'); ?>"><?php the_sub_field('contact_email'); ?></a>

                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="copyright">
                      <?php while ( have_rows('footer', 'option') ) : the_row(); ?>
                        <?php if (get_sub_field('copyright_year')): ?>

                          © <?php the_sub_field('copyright_year'); ?> Nick Canarelli. All Rights Reserved.

                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>



    <?php wp_footer(); ?>

  </body>
</html>
