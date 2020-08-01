<?php 

/* Template Name: Contact Page Template */

get_header(); ?>

<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('contact-intro__content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<span class="accent-bdr"></span>

<section id="contact-body">
    <div class="container">
        <div class="contact-content__row">
            <div class="contact-content__form">
            <?php
                $form_id = get_field('contact-form__id');
                echo do_shortcode( '[gravityform id="'.$form_id.'" title="false" description="false"]' );
            ?>    
            </div> 
            <div class="contact-content__sidebar">
                <div class="body">
                    <span class="t-h-bdr"></span>
                    <span class="l-v-bdr"></span>
                    <ul class="info">
                        <li>Graybill Machines, Inc.</li>
                        <li>
                            <a href="<?= get_field('def-graybill__address-gmaps', 'option'); ?>" target="_blank">
                                <?php 
                                    $street = get_field('def-graybill__address-street', 'option');
                                    $city = get_field('def-graybill__address-city', 'option');
                                    $state = get_field('def-graybill__address-state', 'option');
                                    $zip = get_field('def-graybill__address-zip', 'option');
                                ?>
                                <?= $street; ?><br />
                                <?= $city; ?>, <?= $state; ?> <?= $zip; ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="contact">
                        <li>Phone: <a href="tel:<?= get_field('def-graybill__contact-phone', 'option'); ?>"><?= get_field('def-graybill__contact-phone', 'option'); ?></a></li>
                        <li>Fax: <?= get_field('def-graybill__contact-fax', 'option'); ?></li>
                        <li>Email: <a href="mailto:<?= get_field('def-graybill__contact-email', 'option'); ?>" class="email"><?= get_field('def-graybill__contact-email', 'option'); ?></a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="<?= get_field('footer-social__fb-url', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/social-facebook.svg" class=""/></a></li>
                        <li><a href="<?= get_field('footer-social__linkedin-url', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/social-linkedin.svg" class=""/></a></li>
                    </ul>
                    <span class="r-vi-bdr"></span>
                    <span class="r-vo-bdr"></span>
                    <span class="b-h-bdr"></span>
                </div>
            </div> 
        </div>
    </div>
</section>

<?php get_footer(); ?>