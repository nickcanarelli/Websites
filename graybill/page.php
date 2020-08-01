<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yscores
 */

get_header(); ?>

<?php if(get_field('page-default__intro-display')) { ?>
<!-- Intro -->
<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?= get_field('page-default__intro-content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Intro -->

<span class="accent-bdr"></span>
<?php } ?>

<?php if(get_field('page-default__alt-display')) { ?>
<section id="alt-content" class="default-page-alt">
    <?php if( have_rows('page-default__alt-row') ): ?>
        <div class="container">
            <?php while( have_rows('page-default__alt-row') ): the_row(); 
                $alignment = get_sub_field('image-alignment');
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $body = get_sub_field('body');
            ?>
                <?php if( $alignment == 'image-left' ) { ?>
                    <div class="row" style="padding-bottom: 100px;">
                        <div class="content-image__left">
                            <img src="<?= $image; ?>">
                        </div>
                        <div class="content-text__right">
                            <div class="body">
                                <div class="title">
                                    <h2><?= $title; ?></h2>
                                </div>
                                <div class="content"><?= $body; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row" style="padding-bottom: 100px;">
                        <div class="content-text__left">
                            <div class="body">
                                <div class="title">
                                    <h2><?= $title; ?></h2>
                                </div>
                                <div class="content"><?= $body; ?></div>
                            </div>
                        </div>
                        <div class="content-image__right">
                            <img src="<?= $image; ?>">
                        </div>
                    </div>
                <?php } ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
<?php } ?>

<?php if ( !empty( get_the_content() ) ) { ?>
<section id="page-content">
	<div class="container">
		<?= the_content(); ?>
	</div>
</section>
<?php } ?>

<?php if(get_field('page-default__projects-display')) { ?>
<!-- Recent Projects -->
<section id="services-recent-projects">
    <div class="recent-projects-bg"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');">	</div>
    <div class="container">
        <div class="head">
            <h3><?= get_field('page-default__projects-title'); ?></h3>
            <p><?= get_field('page-default__projects-content'); ?></p>
        </div>

        <?php 
            query_posts(array( 
                'post_type' => 'projects', 
                'posts_per_page' => 5,
            ) );
        ?>
        <div class="row project-list">
            <span class="l-v-bdr"></span>
            <?php while (have_posts()) : the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>
            <div class="col">
                <a href="<?php the_permalink() ?>">
                    <div class="card">
                        <div class="img" style="background-image: url('<?= $featured_img_url; ?>');"></div>
                        <div class="body">
                            <span class="title"><?php the_title(); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile;?>
            <span class="r-v-bdr"></span>
        </div>
        <?php wp_reset_query(); ?>

        <div class="see-all">
            <a href="<?= get_field('page-default__projects-all-url'); ?>"><?= get_field('page-default__projects-all-text'); ?></a>
        </div>
    </div>
</section>
<!-- END Recent Projects -->
<?php } ?>

<?php if(get_field('page-default__discuss-display')) { ?>
<!-- Discuss With Graybill -->
<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('page-default__discuss-title'); ?></h2>
			<p><?= get_field('page-default__discuss-content'); ?></p>
			<a href="<?= get_field('page-default__discuss-btn-url'); ?>" class="btn btn-primary"><?= get_field('page-default__discuss-btn-text'); ?></a>
		</div>
	</div>
</section>
<!-- END Discuss With Graybill -->
<?php } ?>



<?php get_footer(); ?>
