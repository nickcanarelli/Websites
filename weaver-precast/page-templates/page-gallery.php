<?php
/**
   Template Name:  Gallery
 */
?>
<?php get_header(); ?>

    <section class="tier post-tiles --lbbg">
      <div class="container">
        <div class="post-tile-wrap">
          <div class="row justify-content-center">
            <?php
            $post_type = 'project';
            $args = array(  
                'post_type' => $post_type,
                'orderby' => 'DATE',
                'posts_per_page' => '6',
            );

            $query =  new WP_Query($args);

            ?>

            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

            <div class="col-lg-4 col-sm-6">
              <article class="tile --shadow-well">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('card-thumb', array('class' => 'img-fluid')); ?>
                <?php endif; ?>
                <div class="tile--inner">
                  <h3><?php the_title(); ?></h3>
                </div>
                <a href="<?php the_permalink(); ?>" class="block"></a>
              </article>
            </div>

            <?php endwhile; wp_reset_postdata(); endif; ?>

              <div class="col-12 pagination--wrap">
                <div class="text-center"><a href="/projects/" class="button --primary">View More Projects</a></div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="tier gallery --lbbg">
        <div class="container --ntp">
            <?php 
                $imgs = get_field('wpre_gallery_page');
                $image_cats = get_field('img_category_sort');
                $size = 'post-thumbnail';

                if($imgs):
            ?>
            <div class="gallery-filtering">
                <div class="filter-nav"><a class="filter-nav-button">Gallery Filter</a><a class="all" data-filter="all">View All</a></div>
                <div class="filter-well controls" id="filter-well-1" style="display:none;">
                    <div class="filter-sections">
                        <div class="well-section">
                            <h4>Filter By Process</h4>
                            <a class="button --filter" data-filter=".factory">Factory</a>
                            <a class="button --filter" data-filter=".delivery">Delivery</a>
                            <a class="button --filter" data-filter=".installation">Installation</a>
                        </div>
                        <div class="well-section">
                            <h4>Filter By Construction Type</h4>
                            <a class="button --filter" data-filter=".development">Development</a>
                            <a class="button --filter" data-filter=".commercial">Commercial</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gallery-thumbs">
                <?php foreach( $imgs as $image ): 
                    $img_cat = get_field('img_category_sort', $image['ID']);
                ?>
                <div class="col-lg-3 col-md-4 col-6 mix <?php echo $img_cat; ?>">
                    <a class="gallery-item" data-fancybox="gal" data-caption="<?php echo $image['caption']; ?>" href="<?php echo $image['sizes']['large']; ?>">
                        <?php echo '<img src="'.$image['sizes']['post-thumbnail'].'" alt="'.$image['alt'].'" class="img-fluid">'; ?>
                        <span><?php echo $img_cat; ?></span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <script>
        jQuery( document ).ready(function($) {
            var mixer = mixitup('.gallery-thumbs');
        });
    </script>

<?php get_footer(); ?>