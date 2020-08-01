<?php
/**
   Template Name:  Courier Landing
 */
?>
<?php get_header(); ?>

<?php if( have_rows('wpre_courier_content_left') ): while( have_rows('wpre_courier_content_left') ): the_row(); ?>

	<section class="tier content-left">
	    <div class="container">
	        <div class="row align-items-center">
	            <div class="col-lg-6">
	                <?php the_sub_field('content_left'); ?>
	            </div>
	            <div class="col-lg-6">
	                <?php the_sub_field('content_right'); ?>
	            </div>
	        </div>
	    </div>
	</section>

<?php endwhile; endif;?>
<?php if( have_rows('wpre_courier_content_right') ): while( have_rows('wpre_courier_content_right') ): the_row(); ?>

	<section class="tier content-right">
	    <div class="container --ntp">
	        <div class="row align-items-center">
	           <div class="col-lg-6">
	                <?php the_sub_field('content_left'); ?>
	            </div>
	            <div class="col-lg-6">
	                <?php the_sub_field('content_right'); ?>
	            </div>
	        </div>
	    </div>
	</section>

<?php endwhile; endif;?>

<?php if ( have_rows( 'wpre_courier_image_gallery' ) ) : ?>
    <section class="tier post-tiles --lbbg normal-gallery">
      <div class="container">
        <div class="post-tile-wrap">
          <div class="row justify-content-center">
           
       		<?php while ( have_rows( 'wpre_courier_image_gallery' ) ) : the_row(); ?>
	            <div class="col-lg-4 col-sm-6">
	              <article class="tile --shadow-well">
	                <div class="normal-gallery__image" style="background-image: url('<?= get_sub_field( 'image' )['url']; ?>');"></div>
	                <div class="tile--inner">
	                  <?= get_sub_field( 'text' ); ?>
	                </div>
	              </article>
	            </div>
       		<?php endwhile; ?>

          </div>
        </div>
      </div>
    </section>
<?php endif; ?>

<?php if( have_rows('wpre_courier_service_cta') ): while( have_rows('wpre_courier_service_cta') ): the_row(); ?>

	<section class="tier content-left">
	    <div class="container">
	        <div class="row align-items-center">
	            <div class="col-lg-6">
	                <?php the_sub_field('content_left'); ?>
	            </div>
	            <div class="col-lg-6">
	                <?php the_sub_field('content_right'); ?>
	            </div>
	        </div>
	    </div>
	</section>

<?php endwhile; endif;?>
<?php get_footer(); ?>