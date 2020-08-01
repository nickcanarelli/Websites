<?php 
/*
 * Template Name: Page: About
*/
get_header(); ?>

<section id="interior-content">
	<div class="container">
        <div class="row">
            <div class="col-12 about-head">
                <div class="title">
                    <?= get_field('under-about__heading-title'); ?>
                </div>
            </div>
        </div>
        <?php if(get_field('under-about__mission-display')) : ?>
            <div class="row about-info">
                <div class="col-lg-3">
                    <div class="title">
                        <?= get_field('under-about__mission-title'); ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?= get_field('under-about__mission-content'); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(get_field('under-about__business-display')) : ?>
            <div class="row about-info">
                <div class="col-lg-3">
                    <div class="title">
                        <?= get_field('under-about__business-title'); ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?= get_field('under-about__business-content'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="about-img-bg" style="background-image: url('<?= get_field('under-about__bg-img') ?>');"></div>
    <!-- <div class="about-img">
        <img src="https://via.placeholder.com/150?text=Under+Image+Goes+Here" />
    </div> -->

    <div class="container">
        <?php if(get_field('under-about__culture-display')) : ?>
            <div class="row about-info">
                <div class="col-lg-3">
                    <div class="title">
                        <?= get_field('under-about__culture-title'); ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?= get_field('under-about__culture-content'); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_field('under-about__people-display')) : ?>
            <div class="row about-info">
                <div class="col-lg-3">
                    <div class="title">
                        <?= get_field('under-about__people-title'); ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?= get_field('under-about__people-content'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>