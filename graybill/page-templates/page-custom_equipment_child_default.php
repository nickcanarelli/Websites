<?php 

/* Template Name: Services Child (Default) Page Template */

get_header(); ?>

<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('services-default__intro-content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<span class="accent-bdr"></span>

<section id="services-alt">
    <div class="container">
		<div class="row">
			<div class="left">
				<img src="<?= get_field('services-default__alt-img'); ?>" class="alt-img" />
			</div>
			<div class="right">
				<h2><?= get_field('services-default__alt-title'); ?></h2>
				<p><?= get_field('services-default__alt-content'); ?></p>
			</div>
		</div>
	</div>	
</section>

<section id="services-examples">
	<div class="services-examples-bg"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');">	</div>
	<div class="container">
        <div class="row">
            <div class="left">
                <h3><?= get_field('services-default__examples-title'); ?></h3>
                <p><?= get_field('services-default__examples-content'); ?></p>
            </div>
            <?php if (is_page( 'Pie Machines' )) { ?>
                <div class="right-pie">
                    <div class="card">
                        <span class="tr-v-bdr"></span>
                        <span class="tr-h-bdr"></span>

                        <?= get_field('services-default__examples-card'); ?>
                        
                        <span class="bl-v-bdr"></span>
                        <span class="bl-h-bdr"></span>
                    </div>
                </div>
            <?php } else { ?>
                <div class="right">
                    <div class="card">
                        <span class="tr-v-bdr"></span>
                        <span class="tr-h-bdr"></span>

                        <?= get_field('services-default__examples-card'); ?>
                        
                        <span class="bl-v-bdr"></span>
                        <span class="bl-h-bdr"></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php if(get_field('services-default__designs-display')) { ?>
<section id="services-designs">
    <div class="designs-row">
        <div class="text">
			<h4><?= get_field('services-default__designs-title'); ?></h4>
			<p>
                <?= get_field('services-default__designs-content'); ?>
			</p>
			<div class="about-btn">
				<a href="<?= get_field('services-default__designs-btn-url'); ?>" class="btn btn-primary"><?= get_field('services-default__designs-btn-text'); ?></a>
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
                <?php 
                    $tax_designs = get_field('services-default__designs-tax', get_the_ID());

                    query_posts(array( 
                        'post_type' => 'standard_designs', 
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'standard_designs',
                                'terms' => array($tax_designs),
                            )
                        ),
                    ) );
                ?>
                <div class="swiper-wrapper">
                    <?php while (have_posts()) : the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                    ?>
                    <div class="swiper-slide" style="width: 330px !important;">
                        <a href="<?php the_permalink() ?>">
                            <div class="card">
                                <img src="<?= $featured_img_url; ?>" class="" />
                                <div class="body">
                                    <h6><?php the_title(); ?></h6>
                                    <p>Dependable shell press for a variety of pie sizes. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>  
</section>
<?php  } ?>

<?php if(!get_field('services-default__designs-display')) { ?>
<section id="services-recent-projects">
    <div class="container">
        <div class="head">
            <h3><?= get_field('services-default__projects-title'); ?></h3>
            <p><?= get_field('services-default__projects-content'); ?></p>
        </div>
        <?php 
            $tax_projects = get_field('services-default__projects-tax', get_the_ID());

            query_posts(array( 
                'post_type' => 'projects', 
                'posts_per_page' => 5,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'projects',
                        'terms' => array($tax_projects),
                    )
                ),
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
            <a href="/projects/">See All Projects</a>
        </div>
    </div>
</section>
<? } else { ?>
<section id="services-recent-projects">
    <div class="recent-projects-bg"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');">	</div>
    <div class="container">
        <div class="head">
            <h3><?= get_field('services-default__projects-title'); ?></h3>
            <p><?= get_field('services-default__projects-content'); ?></p>
        </div>
        <?php 
            $tax_projects = get_field('services-default__projects-tax', get_the_ID());

            query_posts(array( 
                'post_type' => 'projects', 
                'posts_per_page' => 5,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'projects',
                        'terms' => array($tax_projects),
                    )
                ),
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
            <a href="/projects/">See All Projects</a>
        </div>
    </div>
</section>
<? } ?>

<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('services-default__discuss-title'); ?></h2>
			<p><?= get_field('services-default__discuss-content'); ?></p>
			<a href="<?= get_field('services-default__discuss-btn-url'); ?>" class="btn btn-primary"><?= get_field('services-default__discuss-btn-text'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
		width: 330,
		height: 415,
        spaceBetween: 30,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
    });
</script>