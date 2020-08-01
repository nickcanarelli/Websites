<?php 

/* Template Name: Partner Page Template */

get_header(); ?>

<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('partner-intro__content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<span class="accent-bdr"></span>

<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <h2><?= get_field('partner-process__title'); ?></h2>
                    <?= get_field('partner-process__content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="process-list">
    <div class="process-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');"></div>
    <div class="process-container">
        <div class="body">
            <span class="tr-v-bdr"></span>
            <span class="tr-h-bdr"></span>
            <?php if( have_rows('partner-process__list') ): ?>
            <ul>
                <?php while( have_rows('partner-process__list') ): the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                <li>
                    <div class="img">
                        <img src="<?= $image; ?>"/>
                    </div>
                    <div class="text">
                        <div class="title"><?= $title; ?></div>
                        <div class="content">
                            <?= $content; ?>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <span class="bl-v-bdr"></span>
            <span class="bl-h-bdr"></span>
        </div>
    </div>
</section>

<section id="alt-content" class="confidentiality">
    <div class="container">
        <div class="row">
            <div class="content-image__left">
                <img src="<?= get_field('partner-confidentiality__image'); ?>">
            </div>
            <div class="content-text__right">
                <div class="body">
                    <div class="title">
                        <h2><?= get_field('partner-confidentiality__title'); ?></h2>
                    </div>
                    <div class="content">
                        <?= get_field('partner-confidentiality__content') ;?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('partner-discuss__title'); ?></h2>
			<p><?= get_field('partner-discuss__content'); ?></p>
			<a href="<?= get_field('partner-discuss__button-url'); ?>" class="btn btn-primary"><?= get_field('partner-discuss__button-text'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>