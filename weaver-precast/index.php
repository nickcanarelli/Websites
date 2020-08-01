<?php get_header();?>


<section class="tier post-tiles --lbbg">
  <div class="container">
    <?php if(get_field('archive_page_description', get_option('page_for_posts'))): ?>
    <div class="archive-description">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="small text-center"><?php the_field('archive_page_description', get_option('page_for_posts')); ?></div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="post-tile-wrap">
      <div class="basic-link-nav">
        <ul>
          <?php 
            $categories = get_categories( array(
                  'orderby' => 'name',
                  'parent'  => 0
              ) ); 

            foreach ( $categories as $category ) {
              printf( '<li><a href="%1$s">%2$s</a></li>',
                  esc_url( get_category_link( $category->term_id ) ),
                  esc_html( $category->name )
              );
            }
          ?>
        </ul>
      </div>
      <div class="row justify-content-center">
        <?php
        $paged          = get_query_var('paged') ? get_query_var('paged') : 1;
        $pagination     = true;
        $post_type = 'post';

        $args = array(
            'post_type' => $post_type,
            'orderby' => 'DATE',
            'paged' => $paged,
        );

        $query =  new WP_Query($args);

        if($query->post_count<$posts_per_page) {
            $pagination = false;
        }

        ?>

        <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

        <div class="col-lg-4 col-sm-6">
          <article class="tile --shadow-well">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('card-thumb', array('class' => 'img-fluid')); ?>
            <?php endif; ?>
            <div class="tile--inner">
              <h3><?php the_title(); ?></h3>
              <?php if(get_the_category()): ?><span class="tile--cat"><?php the_category(); ?></span><?php endif; ?>
              <?php if(get_the_excerpt() && !is_archive('project')): the_excerpt(); endif; ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="block"></a>
          </article>
        </div>

        <?php endwhile; endif; ?>


        <?php if($pagination): ?>
          <div class="col-12 pagination--wrap">
            <div class="pagination">
              <?php 
              $paged_args = array(
                'prev_text'          => __('<i class="icon-arrow-thin-left"></i>'),
                'next_text'          => __('<i class="icon-arrow-thin-right"></i>')
              );
              echo paginate_links($paged_args); 
              ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="col-12">
          <?php get_template_part('partials/subscribe'); ?>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>