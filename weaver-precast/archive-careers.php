<?php get_header();?>

<!-- Why We Exist -->
<section class="careers-archive__why-exist">
  <div class="container">
    <div class="weaver-row">
      <div class="left">
        <h2><?php echo get_field('careers-archive__why-exist-title', 'options'); ?></h2>
        <?php echo get_field('careers-archive__why-exist-content', 'options'); ?>
      </div>
      <div class="right">
        <div class="why-img" style="background-image: url('<?php echo get_field('careers-archive__why-exist-img', 'options'); ?>;"></div>
      </div>
    </div>
  </div>
</section>
<!-- END Why We Exist -->

<!-- Available Positions -->
<section class="careers-archive__available text-center">
  <div class="container">
    <h2><?php echo get_field('careers-archive__available-title', 'options'); ?></h2>
    <?php echo get_field('careers-archive__available-content', 'options'); ?>
  </div>
</section>
<!-- END Available Positions -->

<!-- Careers Archive List -->
<section class="careers-archive__list">
  <div class="container">
    <div class="row justify-content-center">
      <?php
        $paged          = get_query_var('paged') ? get_query_var('paged') : 1;
        $pagination     = true;
        $post_type = 'careers';
        $args = array(  
            'post_type' => $post_type,
            'orderby' => 'DATE',
            'paged' => $paged,
            'post__not_in' => array(1447),
        );
        $query =  new WP_Query($args);
          $jobs = get_posts($args);
          foreach ($jobs as $job) :
        ?>
        <div class="col-lg-4 col-sm-6">
          <a href="<?php the_permalink( $job->ID ); ?>">
            <div class="card">
              <h3><?= get_the_title($job->ID); ?></h3>
              <span class="location">
                <?= get_field( 'weaver-careers__location', $job->ID ); ?>
              </span>
              <div class="excerpt">
                <?= get_field( 'weaver-careers__description', $job->ID ); ?>
              </div>
              <button href="<?php the_permalink( $job->ID ); ?>" class="button --primary">View Job Details</button>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <div class="col-lg-4 col-sm-6">
        <a href="<?php the_permalink(); ?>">
          <div class="card open-apply">
            <h3>Open Apply</h3>
            <span class="location">
              Any Location
            </span>
            <div class="excerpt">
              We are always looking for reliable, service-oriented team players who are a good fit for the Superior Walls by Weaver culture. Apply here today! 
            </div>
            <button href="<?= get_permalink( get_page_by_path( 'open-apply' ) ) ?>" class="button">Open Apply Today</button>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- END Careers Archive List -->

<!-- Why Join Our Team -->
<section class="careers-archive__why-join">
  <div class="section-split"><img src="/wp-content/themes/yboot/assets/img/superior-walls-oval.svg" alt="Superior Walls" class="img-fluid"></div>
  <div class="body">
    <div class="container">
      <div class="weaver-row">
        <div class="left">
          <div class="media-thumb" style="background-image: url('<?php echo get_field('careers-archive__why-join-video-preview', 'options'); ?>');">
            <img src="/wp-content/themes/yboot/assets/img/icons/play.svg" class="play-button">
            <a data-fancybox href="<?php echo get_field('careers-archive__why-join-video-url', 'options'); ?>&amp;autoplay=1&amp;rel=0" class="block"></a>
          </div>
          <div class="caption text-center">
            <span><?php echo get_field('careers-archive__why-join-video-caption', 'options'); ?></span>
          </div>
        </div>
        <div class="right">
          <h2><?php echo get_field('careers-archive__why-join-title', 'options'); ?></h2>
          <div class="content">
            <?php echo get_field('careers-archive__why-join-content', 'options'); ?>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- END Why Join Our Team -->

<?php get_footer(); ?>