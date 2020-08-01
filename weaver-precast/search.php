<?php get_header(); ?>

<section class="tier search-page --lbbg">
<div class="container">

  <div class="row">
    <div class="col-12 text-center">
      <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        echo "<h3 class='alt'>" . $total_results . " found for " . $_GET["s"] . "</h3>";
      ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="search-result --shadow-well">
          <div class="result-inner">
          <h4>
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ydopbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h4>
          <?php the_excerpt(); ?>
          </div>
        </div>

      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>