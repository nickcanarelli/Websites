<?php get_header(); ?>

<!-- Home Intro -->
<section id="home-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
					<?= get_field('home-intro__content', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Home Intro -->

<span class="accent-bdr"></span>

<!-- Home Services List -->
<section id="home-services">
	<div class="container">
		<?php if( have_rows('home-services__list', 'option') ): ?>
        <ul class="services-list">
            <?php while( have_rows('home-services__list', 'option') ): the_row(); 
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $url = get_sub_field('link_to');
            ?>
			<li>
				<a href="<?= $url; ?>">
					<div class="icon">
						<img src="<?= $icon; ?>" />
					</div>
					<div class="title">
                        <?= $title; ?>
					</div>
					<div class="excerpt">
                        <?= $description; ?>
					</div>
				</a>
            </li>
            <?php endwhile; ?>
            <li>
				<a href="<?= get_field('home-services__view-all', 'option'); ?>" class="view-all">
					<div class="body ">
						View All Custom Equipment
					</div>
				</a>
			</li>
        </ul>
        <?php endif; ?>
	</div>
</section>
<!-- END Home Services List -->

<!-- Home Alternating Content -->
<section id="home-alt">
	<div class="container">
		<div class="row">
			<div class="left">
				<img src="<?= get_field('home-alt__img', 'option'); ?>" class="alt-img" />
			</div>
			<div class="right">
				<h2><?= get_field('home-alt__title', 'option'); ?></h2>
				<p><?= get_field('home-alt__content', 'option'); ?></p>
				<a href="<?= get_field('home-alt__btn-url', 'option'); ?>" class="btn btn-primary"><?= get_field('home-alt__btn-text', 'option'); ?></a>
			</div>
		</div>
	</div>	
</section>
<!-- END Home Alternating Content -->

<!-- Home Why -->
<section id="home-why">
	<div class="home-why-bg"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');">	</div>
	<div class="container">
		<h2><?= get_field('home-why__title', 'option'); ?></h2>
		
		<?php if( have_rows('home-why__list', 'option') ): ?>
		<div class="row">
			<?php while( have_rows('home-why__list', 'option') ): the_row(); 
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
		<a href="<?= get_field('home-why__btn-link', 'option'); ?>" class="btn btn-primary why-process"><?= get_field('home-why__btn-text', 'option'); ?></a>
	</div>
</section>
<!-- END Home Why -->

<!-- Home About -->
<section id="home-about">
    <div class="about-row">
        <div class="story-text">
			<h4><?= get_field('home-about__title', 'option'); ?></h4>
			<p><?= get_field('home-about__content', 'option'); ?></p>
			<div class="about-btn">
				<a href="<?= get_field('home-about__btn-link', 'option'); ?>" class="btn btn-primary"><?= get_field('home-about__btn-text', 'option'); ?></a>
			</div>
            <!-- If we need navigation buttons -->
            <ul class="pagination">
                <li><div class="prev"></div></li>
                <li>View More</li>
                <li><div class="next"></div></li>
            </ul>
        </div>
        <div class="carousel-container">
            <div class="swiper-container">
				<?php if( have_rows('home-about__slider', 'option') ): ?>
                <div class="swiper-wrapper">
					<?php while( have_rows('home-about__slider', 'option') ): the_row(); 
						$image = get_sub_field('image');
					?>
                    <div class="swiper-slide" style="width: 330px !important;">
                        <div class="card">
                            <img src="<?= $image; ?>" class="" />
                        </div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
            </div>
        </div>
    </div>  
</section>
<!-- END Home Why -->

<!-- Home Testimonials -->
<section id="home-testimonial" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/bg-testimonial.jpg');">
	<div class="container">
		<div class="body">
			<p>
				“<?= get_field('home-testimonial__content', 'option'); ?>”
			</p>
			<span class="author"><?= get_field('home-testimonial__user', 'option'); ?></span<>
		</div>
	</div>
</section>
<!-- END Home Testimonials -->

<!-- Home Discuss With Graybill -->
<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('home-discuss__title', 'option'); ?></h2>
			<p><?= get_field('home-discuss__content', 'option'); ?></p>
			<a href="<?= get_field('home-discuss__btn-url', 'option'); ?>" class="btn btn-primary"><?= get_field('home-discuss__btn-text', 'option'); ?></a>
		</div>
	</div>
</section>
<!-- END Home Discuss With Graybill -->

<?php get_footer(); ?>

<!-- Swiper.js Settings -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
		width: 330,
		height: 428,
        spaceBetween: 10,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
    });
</script>