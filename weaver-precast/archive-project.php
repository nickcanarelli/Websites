<?php get_header();?>

<section class="tier post-tiles --lbbg">
  <div class="container">
    <div class="post-tile-wrap">
      <div class="row justify-content-center">
        <?php
        $paged          = get_query_var('paged') ? get_query_var('paged') : 1;
        $pagination     = true;
        $post_type = 'project';
        $args = array(  
            'post_type' => $post_type,
            'orderby' => 'DATE',
            'paged' => $paged,
        );

        $query =  new WP_Query($args);

        ?>

        <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

        <div class="col-lg-4 col-sm-6">
          <article class="tile --shadow-well">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="card-thumb--wrap">
              <?php the_post_thumbnail('card-thumb', array('class' => 'img-fluid card-thumb')); ?>
              </div>
            <?php endif; ?>
            <div class="tile--inner">
              <h3><?php the_title(); ?></h3>
            </div>
            <a href="<?php the_permalink(); ?>" class="block"></a>
          </article>
        </div>

        <?php endwhile; wp_reset_query(); endif; ?>
        <?php if(get_previous_posts_link() || get_next_posts_link()): ?>
          <div class="col-12 pagination--wrap">
            <div class="pagination">
              <div class="left-pagination">
                <?php previous_posts_link('<i class="icon-arrow-thin-left"></i> Go back'); ?>
              </div>
              <div class="right-pagination">
                <?php next_posts_link('See More <i class="icon-arrow-thin-right"></i>', $query->max_num_pages); ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>