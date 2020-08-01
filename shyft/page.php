<?php
/**
 * Single Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

    <div id="primary" class="content-area container" role="main">
        <?php if ( jobify()->get( 'woocommerce' ) ) : ?>
            <?php wc_print_notices(); ?>
        <?php endif; ?>

        <?php get_template_part( 'content', 'page' ); ?>

        <?php do_action( 'jobify_loop_after' ); ?>
    </div><!-- #primary -->

    <?php endwhile; ?>

<?php get_footer(); ?>
