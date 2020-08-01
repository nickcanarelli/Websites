<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yscores
 */

?>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="footer">
		<div class="main-footer">
			<div class="container">
				<div class="body">
					<span class="tl-v-bdr"></span>
					<span class="tl-h-bdr"></span>
					<div class="row">
						<div class="col">
							<a href="/">
								<img src="<?php echo get_field('def-graybill__logo', 'option' ) ?>" class="logo">
							</a>

							<ul class="address">
								<li class="street">
									<?php 
										$street = get_field('def-graybill__address-street', 'option');
										$city = get_field('def-graybill__address-city', 'option');
										$state = get_field('def-graybill__address-state', 'option');
										$zip = get_field('def-graybill__address-zip', 'option');
									?>
									<a href="<?= get_field('def-graybill__address-gmaps', 'option'); ?>" target="_blank">
										<?= $street; ?><br />
										<?= $city; ?>, <?= $state; ?> <?= $zip; ?>
									</a>
								</li>
								<li>Call: <a href="tel:<?= get_field('def-graybill__contact-phone', 'option'); ?>"><?= get_field('def-graybill__contact-phone', 'option'); ?></a></li>
								<li>Fax: <?= get_field('def-graybill__contact-fax', 'option'); ?></li>
								<li><a href="<?php echo get_field('def-graybill__ul-listed-link', 'option' ) ?>"><img src="<?php echo get_field('def-graybill__ul-listed', 'option' ) ?>" class=""></a></li>
							</ul>

							<ul class="mobile-logos">
								<li><a href="<?php echo get_field('def-graybill__pmca-link', 'option' ) ?>"><img src="<?php echo get_field('def-graybill__pmca', 'option' ) ?>" class=""></a></li>
								<li><a href="<?php echo get_field('def-graybill__isn-link', 'option' ) ?>"><img src="<?php echo get_field('def-graybill__isn', 'option' ) ?>" class=""></a></li>
								<li><a href="<?php echo get_field('def-graybill__vosb-link', 'option' ) ?>"><img src="<?php echo get_field('def-graybill__vosb', 'option' ) ?>" class=""></a></li>
							</ul>
						</div>
						<div class="col">
							<div class="col-body">
								<div>
									<a href="<?php echo get_field('def-graybill__pmca-link', 'option' ) ?>">
										<img src="<?php echo get_field('def-graybill__pmca', 'option' ) ?>" class="footer-logo">
									</a>
									
									<?php if( have_rows('footer-col2__list', 'option') ): ?>
									<ul class="custom-eqp">
										<li class="list-head">Custom Equipment</li>
										<?php while( have_rows('footer-col2__list', 'option') ): the_row(); 
											$title = get_sub_field('title');
											$url = get_sub_field('url');
										?>
										<li><a href="<?= $url; ?>"><?= $title; ?></a></li>
										<?php endwhile; ?>
									</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="col-body">
								<div>
									<a href="<?php echo get_field('def-graybill__isn-link', 'option' ) ?>">
										<img src="<?php echo get_field('def-graybill__isn', 'option' ) ?>" class="footer-logo">
									</a>
									
									<?php if( have_rows('footer-col3__list', 'option') ): ?>
									<ul class="footer-list">
										<?php while( have_rows('footer-col3__list', 'option') ): the_row(); 
											$title = get_sub_field('title');
											$url = get_sub_field('url');
										?>
										<li><a href="<?= $url; ?>"><?= $title; ?></a></li>
										<?php endwhile; ?>
									</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="col-body">
								<div>
									<a href="<?php echo get_field('def-graybill__vosb-link', 'option' ) ?>">
										<img src="<?php echo get_field('def-graybill__vosb', 'option' ) ?>" class="footer-logo">
									</a>
									
									<?php if( have_rows('footer-col4__list', 'option') ): ?>
									<ul class="footer-list blue">
										<?php while( have_rows('footer-col4__list', 'option') ): the_row(); 
											$title = get_sub_field('title');
											$url = get_sub_field('url');
										?>
										<li><a href="<?= $url; ?>"><?= $title; ?></a></li>
										<?php endwhile; ?>
									</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="body">
					<div class="row">
						<div class="col">
							<ul class="copyright">
								<li>© 2020 Graybill Machines</li>
								<li><a href="/privacy-policy/">Privacy Policy</a></li>
							</ul> 
						</div>
						<div class="col">
							<ul class="social">
								<li><a href="<?= get_field('footer-social__fb-url', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/social-facebook.svg" class=""/></a></li>
								<li><a href="<?= get_field('footer-social__linkedin-url', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/social-linkedin.svg" class=""/></a></li>
							</ul>
						</div>
					</div>
					<span class="br-i-bdr"></span>
					<span class="br-o-bdr"></span>
				</div>
			</div>
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
