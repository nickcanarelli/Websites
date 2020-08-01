<?php 

/* Template Name: Custom Equipment Page Template */

get_header(); ?>

<!-- Intro -->
<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('custom-equip__intro-content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Intro -->

<span class="accent-bdr"></span>

<!-- Services List -->
<section id="services-grid">
    <div class="container">
        <?php if( have_rows('custom-equip__services-list') ): ?>
        <ul class="services-list">
            <?php while( have_rows('custom-equip__services-list') ): the_row(); 
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
            <li></li>
        </ul>
        <?php endif; ?>
    </div>
</section>
<!-- END Services List --> 

<!-- Alternating Content -->
<section id="home-alt">
	<div class="container">
		<div class="row">
			<div class="left">
				<img src="<?= get_field('custom-equip__alt-img'); ?>" class="alt-img" />
			</div>
			<div class="right">
				<h2><?= get_field('custom-equip__alt-title'); ?></h2>
				<p><?= get_field('custom-equip__alt-content'); ?></p>
				<a href="<?= get_field('custom-equip__alt-btn-url'); ?>" class="btn btn-primary"><?= get_field('custom-equip__alt-btn-text'); ?></a>
			</div>
		</div>
	</div>	
</section>
<!-- END Alternating Content -->

<!-- Breakdown -->
<section id="custom-breakdown">
	<div class="custom-breakdown-bg"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');">	</div>
	<div class="container">
        <div class="row">
            <div class="left">
                <h3><?= get_field('custom-equip__break-title'); ?></h3>
                <p><?= get_field('custom-equip__break-content'); ?></p>
            </div>
            <div class="right">
                <div class="card">
                    <span class="tr-v-bdr"></span>
                    <span class="tr-h-bdr"></span>
                    <?php if( have_rows('custom-equip__break-list') ): ?>
                    <ul>
                        <?php while( have_rows('custom-equip__break-list') ): the_row(); 
                            $item = get_sub_field('item');
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
<!-- END Breakdown -->

<!-- Recent Projects -->
<section id="recent-projects">
    <div class="container">
        <div class="head">
            <h3><?= get_field('custom-equip__recent-title'); ?></h3>
            <p><?= get_field('custom-equip__recent-content'); ?></p>
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
            <a href="<?= get_field('custom-equip__recent-all-url'); ?>"><?= get_field('custom-equip__recent-all-text'); ?></a>
        </div>
    </div>
</section>
<!-- END Recent Projects -->

<!-- Discuss With Graybill -->
<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('custom-equip__discuss-title'); ?></h2>
			<p><?= get_field('custom-equip__discuss-content'); ?></p>
			<a href="<?= get_field('custom-equip__discuss-btn-url'); ?>" class="btn btn-primary"><?= get_field('custom-equip__discuss-btn-text'); ?></a>
		</div>
	</div>
</section>
<!-- END Discuss With Graybill -->

<?php get_footer(); ?>