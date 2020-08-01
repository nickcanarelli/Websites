<?php get_header(); ?>

<section id="design-head">
    <div class="container">
        <div class="row">
            <div class="head-text__left">
                <h1>
                    <?php echo get_the_title(); ?>
                </h1>
                <ul class="pagination">
                    <li><div class="prev"></div></li>
                    <li>View More</li>
                    <li><div class="next"></div></li>
                </ul>
            </div>  
            <div class="head-image__right">
                <div class="carousel-container">
                    <div class="swiper-container">
                        <?php if( have_rows('standard-designs__slider') ): ?>
                        <div class="swiper-wrapper">
                            <?php while( have_rows('standard-designs__slider') ): the_row(); 
                                $image = get_sub_field('image');
                            ?>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="<?= $image; ?>" class="" />
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="pagination-mobile">
                <div class="swiper-dots"></div>
            </div>
        </div>
    </div>
</section>

<section id="design-info">
    <div class="info-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');"></div>
    <div class="container">
        <div class="row">
            <div class="text-left">
                <?php echo get_field('standard-designs__content'); ?>
            </div>
            <div class="text-right">
                <div class="card">
                    <span class="tr-v-bdr"></span>
                    <span class="tr-h-bdr"></span>
                    <h5>Specifications</h5>
                    <?php if( have_rows('standard-designs__specs') ): ?>
                    <ul>
                        <?php while( have_rows('standard-designs__specs') ): the_row(); 
                            $item = get_sub_field('list_item');
                        ?>
                        <li><?= $item; ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <span class="bl-v-bdr"></span>
                    <span class="bl-h-bdr"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('standard-designs__discuss-title', 'option'); ?></h2>
			<p><?= get_field('standard-designs__discuss-content', 'option'); ?></p>
			<a href="<?= get_field('standard-designs__discuss-btn-url', 'option'); ?>" class="btn btn-primary"><?= get_field('standard-designs__discuss-btn-text', 'option'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
        pagination: {
            el: '.swiper-dots',
            clickable: true,
        },
    });
</script>