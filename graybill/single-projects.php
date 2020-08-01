<?php get_header(); ?>

<section id="project-head">
    <div class="container">
        <div class="row">
            <div class="head-text__left">
                <h1>
                    <?php echo get_the_title(); ?>
                </h1>
            </div>  
            <div class="head-image__right">
                <img src="<?= get_field('project-single__head-img'); ?>" />
            </div>
        </div>
    </div>
</section>

<?php if( have_rows('project-single__alt-content') ): ?>
    <section id="alt-content" class="project-single">
        <div class="container">
            <?php while( have_rows('project-single__alt-content') ): the_row(); 
                $img_alignment = get_sub_field('img-alignment');
                $image = get_sub_field('image');
                $content = get_sub_field('content');
            ?>

            <?php if ($img_alignment == 'img-left') { ?>
                <div class="row">
                    <div class="content-image__left">
                        <img src="<?= $image; ?>">
                    </div>
                    <div class="content-text__right">
                        <div class="body">
                            <div class="content">
                                <?= $content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="content-text__left">
                        <div class="body">
                            <div class="content">
                                <?= $content; ?>
                            </div>
                        </div>
                    </div>
                    <div class="content-image__right">
                        <img src="<?= $image; ?>">
                    </div>
                </div>
            <?php } ?>

            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>

<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('project-archive__discuss-title', 'option'); ?></h2>
			<p><?= get_field('project-archive__discuss-content', 'option'); ?></p>
			<a href="<?= get_field('project-archive__discuss-btn-url', 'option'); ?>" class="btn btn-primary"><?= get_field('project-archive__discuss-btn-text', 'option'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>