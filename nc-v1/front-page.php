<?php get_header(); ?>



        <?php $hero = get_field('hero'); ?>

            <div class="container-fluid">
              <div class="content vertical-center">

                <h2><?php echo $hero['hero_title_1']; ?></h2>
                <h2><?php echo $hero['hero_title_2']; ?></h2>
                <p><?php echo $hero['hero_description']; ?></p>

                <?php if($hero['hero_link_destination']): ?>
                  <a class="btn btn-primary" href="<?php echo $hero['hero_link_destination']; ?>">
                    <?php echo $hero['hero_button_text']; ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </section>

        <?php $about = get_field('about'); ?>
        <section id="about">
          <div class="about-me v-align">
            <div class="container-fluid">
              <div class="content">
                <h3>
                  <?php echo $about['about_title']; ?>
                </h3>
                <?php echo $about['about_description']; ?>
                <?php if($about['about_button_link']): ?>
                  <a class="btn btn-primary" href="<?php echo $about['about_button_link']; ?>">
                    <?php echo $about['about_button_text']; ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

        <?php $projects = get_field('latest_projects'); ?>
        <section id="projects">
          <div class="latest-project v-align">
            <div class="container-fluid">
              <div class="content">
                <h3>
                  Latest Project
                </h3>
                <h4>
                  <span class="highlight">
                    <?php echo $projects['project_name']; ?>
                  </span>
                </h4>
                <p>
                  <?php echo $projects['project_type']; ?>
                </p>

                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo $projects['project_image_1']; ?>" alt="<?php echo $projects['project_name']; ?>">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo $projects['project_image_2']; ?>" alt="<?php echo $projects['project_name']; ?>">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo $projects['project_image_3']; ?>" alt="<?php echo $projects['project_name']; ?>">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo $projects['project_image_4']; ?>" alt="<?php echo $projects['project_name']; ?>">
                    </div>
                  </div>
                </div>

                <div class="grid">
                  <div class="grid-item">
                    <img class="w-100" src="<?php echo $projects['project_image_1']; ?>" alt="<?php echo $projects['project_name']; ?>">
                  </div>
                  <div class="grid-item grid-item--width2 grid-item--height2">
                    <img class="w-100" src="<?php echo $projects['project_image_2']; ?>" alt="<?php echo $projects['project_name']; ?>">
                  </div>
                  <div class="grid-item grid-item--width3 grid-item--height3">
                    <img class="w-100" src="<?php echo $projects['project_image_3']; ?>" alt="<?php echo $projects['project_name']; ?>">
                  </div>
                  <div class="grid-item grid-item--width4 grid-item--height4">
                    <img class="w-100" src="<?php echo $projects['project_image_4']; ?>" alt="<?php echo $projects['project_name']; ?>">
                  </div>
                </div>
            </div>
          </div>
        </section>

        <?php $contact = get_field('contact'); ?>
        <section id="contact">
          <div class="contact-me v-align">
            <div class="container-fluid">
              <div class="content">

                <div class="contact-head text-center">
                  <h3>
                    <?php echo $contact['contact_title']; ?>
                  </h3>
                  <p>
                    <?php echo $contact['contact_description']; ?>
                  </p>
                </div>

                <?php echo do_shortcode( '[contact-form-7 id="101" title="Home Page Contact Form"]' ); ?>

                <script>
                  /* Validation Events for changing response CSS classes */
                  document.addEventListener( 'wpcf7invalid', function( event ) {
                      $('.wpcf7-response-output').addClass('contact-error-alerts contact-error-danger');
                  }, false );
                  document.addEventListener( 'wpcf7spam', function( event ) {
                      $('.wpcf7-response-output').addClass('contact-error-alerts contact-error-warning');
                  }, false );
                  document.addEventListener( 'wpcf7mailfailed', function( event ) {
                      $('.wpcf7-response-output').addClass('contact-error-alerts contact-error-warning');
                  }, false );
                  document.addEventListener( 'wpcf7mailsent', function( event ) {
                      $('.wpcf7-response-output').addClass('contact-error-alerts contact-error-success');
                  }, false );
                </script>
              </div>
            </div>
          </div>
        </section>

<?php get_footer(); ?>
