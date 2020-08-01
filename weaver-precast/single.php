<?php get_header();?>


<section class="tier single --lbbg">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 offset-lg-2">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


      <article class="single-post">
        <?php 
            $category = get_the_category();
        ?>
        <div class="meta">
            <div class="basic-link-nav">
                <ul>
                   <li><a class="meta-date"><?php the_date(); ?></a></li> 
                   <li><a href="<?php echo $category[0]->url; ?>" class="no-style"><?php echo $category[0]->name; ?></a></li> 
                </ul>
            </div>
        </div>

        <?php the_content(); ?>

        <div class="post-navigation">
          <?php/*
              <p class="small meta">Posted in <?php 
               $categories = get_the_category();
               if ( ! empty( $categories ) ) {
                   echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
               } ?>&nbsp;&nbsp;|&nbsp;&nbsp;On <?php echo date("F j, Y", strtotime(get_the_date())); ?>&nbsp;&nbsp;|&nbsp;&nbsp;By <?php if(get_the_author()) { the_author(); } ?></p>
            */ ?>
          <div class="prev-next-wrap">
            <div class="prev-next prev">
              <?php if(get_previous_post_link()) : ?><span class="small"><strong>Previous Post</strong></span>
                <?php previous_post_link(); ?>
              <?php endif; ?>
            </div>
            <div class="prev-next next">
              <?php if(get_next_post_link()) : ?><span class="small"><strong>Next Post</strong></span>
                <?php next_post_link(); ?>
              <?php endif; ?>
            </div>
          </div>
        </div> <!-- end navigation -->
      </article>

      <?php endwhile; endif; ?>


      </div>

      <div class="col-12">
        <?php get_template_part('partials/subscribe'); ?>
      </div>

    </div>
  </div>
</section>



<?php get_footer(); ?>