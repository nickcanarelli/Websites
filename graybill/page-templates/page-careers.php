<?php 

/* Template Name: Careers Page Template */

get_header(); ?>

<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('careers-intro__text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<span class="accent-bdr"></span>

<section id="why-graybill">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="body">
                    <h2><?= get_field('careers-why__title'); ?></h2>
                    <p>
                        <?= get_field('careers-why__content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="careers-benefits">
    <div class="container">
        <div class="row">
            <div class="section-head">
                <?= get_field('careers-benefits__title'); ?>
            </div>
        </div>
    <?php if( have_rows('careers-benefits__list') ): ?>
        <div class="row">
            <?php while( have_rows('careers-benefits__list') ): the_row(); 
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
            ?>
            <div class="col">
                <div class="body">
                    <img src="<?= $icon; ?>" class="icon" />
                    <span class="title"><?= $title; ?></span>
                </div>
            </div>
            <?php endwhile; ?> 
        </div>
    </div>
    <?php endif; ?>
</section>

<section id="careers-openings">
    <div class="openings-bg"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');">	</div>
    <div class="container">
        <div class="body">
            <h2><?= get_field('careers-openings__title'); ?></h2>
            
            <?php if(!get_field('careers-openings__list')) { ?>
                <ul class="openings-list">
                    <li>
                        <span class="tr-v-bdr"></span>
                        <span class="tr-h-bdr"></span>
                        <h3><?= get_field('careers-openings__none-title'); ?></h3>
                        <p><?= get_field('careers-openings__none-content'); ?></p>
                        <a href="mailto:<?= get_field('careers-join__email'); ?>" class="join">Join the Team</a>
                        <span class="bl-v-bdr"></span>
                        <span class="bl-h-bdr"></span>
                    </li>
                </ul>
            <?php } else { ?>
                <?php if( have_rows('careers-openings__list') ): ?>
                <ul class="openings-list">
                    <?php while( have_rows('careers-openings__list') ): the_row(); 
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                    ?>
                    <li>
                        <span class="tr-v-bdr"></span>
                        <span class="tr-h-bdr"></span>
                        <h3><?= $title; ?></h3>
                        <p>
                            <?= $description; ?>
                        </p>
                        <a href="mailto:<?= get_field('careers-join__email'); ?>" class="join">Join the Team</a>
                        <span class="bl-v-bdr"></span>
                        <span class="bl-h-bdr"></span>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</section>

<section id="join-the-team" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
    <div class="container">
        <div class="body">
            <h2><?= get_field('careers-join__title'); ?></h2>
            <?= get_field('careers-join__content'); ?>
            <span class="email">Email: <a href="mailto:<?= get_field('careers-join__email'); ?>"><?= get_field('careers-join__email'); ?></a></span>
            <span class="fax">Fax: <?= get_field('def-graybill__contact-fax', 'option'); ?></span>
        </div>
    </div>
</section>

<?php get_footer(); ?>