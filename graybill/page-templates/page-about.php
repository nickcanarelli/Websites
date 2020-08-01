<?php 

/* Template Name: About Page Template */

get_header(); ?>

<!-- Intro -->
<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <h2><?= get_field('about-intro__title'); ?></h2>
                    <?= get_field('about-intro__content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Intro -->

<span class="accent-bdr"></span>

<!-- About History -->
<section id="about-story">
    <div class="about-row">
        <div class="story-text">
            <h3><?= get_field('about-history__title'); ?></h3>
            <ul class="pagination">
                <li><div class="prev"></div></li>
                <li>View More</li>
                <li><div class="next"></div></li>
            </ul>
            <span class="br-iv-bdr"></span>
            <span class="br-ov-bdr"></span>
            <span class="b-ih-bdr"></span>
            <span class="b-oh-bdr"></span>
        </div>
        <div class="carousel-container">
            <div class="swiper-container">
                <?php if( have_rows('about-history__slider') ): ?>
                <div class="swiper-wrapper">
                    <?php while( have_rows('about-history__slider') ): the_row(); 
                        $image = get_sub_field('image');
                        $date = get_sub_field('date');
                        $content = get_sub_field('content'); 
					?>
                    <div class="swiper-slide" style="width: 330px !important;">
                        <div class="card">
                            <img src="<?= $image; ?>" class="" />
                            <div class="body">
                                <span class="date"><?= $date; ?></span>
                                <p><?= $content; ?></p> 
                            </div>
                            <span class="b-v-bdr"></span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>  
</section>
<!-- END About History -->

<!-- About Mission -->
<section id="about-mission">
    <div class="mission-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');"></div>
    <div class="container">
        <div class="head">
            <h2><?= get_field('about-mission__title'); ?></h2>
            <div class="content"><?= get_field('about-mission__content'); ?></div>
        </div>
        <div class="values">
            <h3><?= get_field('about-mission__values-title'); ?></h3>
        </div>
        <?php if( have_rows('about-mission__values-list') ): ?>
        <div class="row">
            <?php while( have_rows('about-mission__values-list') ): the_row(); 
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $content = get_sub_field('content'); 
            ?>
			<div class="col">
				<div class="body">
					<img src="<?= $image; ?>" class="why-img"/>
					<div class="card">
						<h3><?= $title; ?></h3>
						<p><?= $content; ?></p>
					</div>
				</div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- END About Mission -->

<!-- Satisfied Customers -->
<section id="about-customers">
    <div class="container">
        <div class="head">
            <h2><?= get_field('about-satisfied__title'); ?></h2>
        </div>
        <?php if( have_rows('about-satisfied__list') ): ?>
        <div class="row">
            <?php while( have_rows('about-satisfied__list') ): the_row(); 
                $image = get_sub_field('image');
                $class = get_sub_field('image_class');
            ?>
            <div class="col">
                <img src="<?= $image; ?>" class="<?= $class; ?>" />
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="confidentiality-link">
            <a href="<?= get_field('about-satisfied__link-url'); ?>"><?= get_field('about-satisfied__link-text'); ?></a>
        </div>
    </div>
</section>
<!-- END Satisfied Customers -->

<section id="alt-content">
    <div class="container">
        <div class="row" style="padding-bottom: 100px;">
            <div class="content-image__left">
                <img src="<?= get_field('about-staff__img'); ?>">
            </div>
            <div class="content-text__right">
                <span class="from">From left to right</span>
                <?php if( have_rows('about-staff__list') ): ?>
                <ul class="staff">
                    <?php while( have_rows('about-staff__list') ): the_row(); 
                        $name = get_sub_field('name');
                        $dept = get_sub_field('department');
                    ?>
                    <li><?= $name; ?> - <span class="dept"><?= $dept; ?></span></li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="row" style="padding-bottom: 100px;">
            <div class="content-text__left">
                <div class="body">
                    <div class="title">
                        <h2><?= get_field('about-facility__title'); ?></h2>
                    </div>
                    <div class="content"><?= get_field('about-facility__content'); ?></div>
                </div>
            </div>
            <div class="content-image__right">
                <img src="<?= get_field('about-facility__img'); ?>">
            </div>
        </div>
    </div>
</section>

<!-- Discuss With Graybill -->
<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('about-discuss__title'); ?></h2>
			<p><?= get_field('about-discuss__content'); ?></p>
			<a href="<?= get_field('about-discuss__btn-url'); ?>" class="btn btn-primary"><?= get_field('about-discuss__btn-text'); ?></a>
		</div>
	</div>
</section>
<!-- END Discuss With Graybill -->

<?php get_footer(); ?>

<!-- Swiper.js Settings -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        width: 330,
        spaceBetween: 30,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
    });
</script>