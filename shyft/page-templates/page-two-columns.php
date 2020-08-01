<?php
/**
 * Template Name: Page: Two Columns
 *
 * @package Jobify
 * @since Jobify 1.0
 */

get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

	<?php if ( Jobify_Page_Header::show_page_header() ) : 

    // Adding featured image for pagetitle
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'large-image' ); ?>

    <header class="page-header" style="background:url(<?php echo $image[0]; ?>) 100%/100% no-repeat;">
        
		<div class="header-overlay"></div>
        <h2 class="page-title"><?php the_title(); ?></h2>
    </header>
	<?php endif; ?>

    <div id="primary" class="content-area container primary-content" role="main">
        <?php if ( jobify()->get( 'woocommerce' ) ) : ?>
            <?php wc_print_notices(); ?>
        <?php endif; ?>
        
        <div class="col-sm-12 col-md-6">
            <div class="margin-top">
                <?php the_field('left_field'); ?>
            </div>
        </div>
        
        <div class="col-sm-12 col-md-6">
            <div class="talent-form">
                <div class="form-bg-overlay"></div>
                <?php the_field('right_field'); ?>
            </div>
        </div>

        <?php do_action( 'jobify_loop_after' ); ?>
    </div><!-- #primary -->

    <?php endwhile; ?>

<?php get_footer(); ?>
