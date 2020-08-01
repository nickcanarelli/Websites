<?php
/**
 * Template Name: Layout: Single Column
 *
 * @package Jobify
 * @since Jobify 3.0.0
 */

get_header(); ?>

	<?php if ( Jobify_Page_Header::show_page_header() ) :  

    // Adding featured image for pagetitle
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'large-image' ); ?>

    <header class="page-header" style="background:url(<?php echo $image[0]; ?>) 100%/100% no-repeat;">
        <div class="header-overlay"></div>
        <h2 class="page-title"><?php the_post(); the_title(); rewind_posts(); ?></h2>
    </header>
	<?php endif; ?>

    <div id="primary" class="content-area container no-top-padding" role="main">
        <div class="row">
            <div class="<?php echo apply_filters( 'jobify_single_column_spans', 'col-sm-12 col-md-12' ); ?>">
                <?php if ( jobify()->get( 'woocommerce' ) ) : ?>
                    <?php wc_print_notices(); ?>
                <?php endif; ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                <?php endwhile; ?>
            </div>
        </div>

        <?php do_action( 'jobify_loop_after' ); ?>
    </div><!-- #primary -->

<?php get_footer(); ?>
