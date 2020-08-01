<?php get_header();?>


<section class="tier single --lbbg">
  <div class="container">
    <div class="row">

      <div class="col-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


      <article class="single-post single-project-post">

          <?php if(get_the_content() && have_rows('wpre_project_details')): ?>
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h3>About this Project</h3>
                <?php the_content(); ?>
              <?php if( have_rows('wpre_project_details') ): while( have_rows('wpre_project_details') ): the_row(); 
                $location = get_sub_field('location');
                $builder = get_sub_field('project_builder');
                $set_date = get_sub_field('set_date');
              ?>
                <div class="project-details">
                  <div class="details-inner d-flex justify-content-between">
                    <?php if($location): ?><div><p><span>Location:</span><?php echo $location; ?></p></div><?php endif; ?>
                    <?php if($builder): ?><div><p><span>Builder:</span><?php echo $builder; ?></p></div><?php endif; ?>
                    <?php if($set_date): ?><div><p><span>Set Date:</span><?php echo $set_date; ?></p></div><?php endif; ?>
                    <?php if( have_rows('stats') ): ?>
                    <div>
                    <span>Project Stats:</span>
                        <ul>
                          <?php while( have_rows('stats') ): the_row(); ?>
                          <li><?php the_sub_field('stat'); ?></li>
                          <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <?php else: ?>
          <?php endif; ?>

        <?php
          $imgs = get_field('wpre_single_project_gallery');
          $size = 'post-thumbnail';
          if($imgs):
        ?>
        <div class="spacer"></div>
        <div class="text-center"><h3>Project Gallery</h3></div>
        <div class="row gallery-thumbs justify-content-center">
            <?php foreach( $imgs as $img ): ?>
            <div class="col-lg-3 col-md-4 col-6">
                <a class="gallery-item" data-fancybox="gal" data-caption="<?php echo $img['alt']; ?>" href="<?php echo $img['url']; ?>">
                    <?php echo '<img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== data-src="'.$img['sizes']['post-thumbnail'].'" alt="'.$img['alt'].'" class="img-fluid b-lazy">'; ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if(get_previous_post_link() || get_next_post_link()): ?>
        <div class="post-navigation">
          <div class="prev-next-wrap">
            <div class="prev-next prev">
              <?php if(get_previous_post_link()) : ?><span class="small"><strong>Previous Project</strong></span>
                <?php previous_post_link(); ?>
              <?php endif; ?>
            </div>
            <div class="prev-next next">
              <?php if(get_next_post_link()) : ?><span class="small"><strong>Next Project</strong></span>
                <?php next_post_link(); ?>
              <?php endif; ?>
            </div>
          </div>
        </div> <!-- end navigation -->
        <?php endif;?>
      </article>

      <?php endwhile; endif; ?>

      </div>

    </div>
  </div>
</section>



<?php get_footer(); ?>