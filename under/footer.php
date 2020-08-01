<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Under
 */

?>

	<footer id="under-footer">
		<div class="foot-wrapper">
			<div class="footer-column-1">
				<ul class="branding">
					<li>
						<a href="<?php echo get_site_url(); ?>"><img src="<?= get_field('under_logo', 'options'); ?>" alt="Under Everything" /></a>
					</li>
					<li class="tagline">
						<?= get_field('under_tagline', 'options'); ?>
					</li>
				</ul>
				<ul class="social">
					<?php if( get_field('under-email', 'options') && get_field('under-email-icon', 'options') ): ?>
						<li>
							<a href="mailto:<?= get_field( 'under-email', 'options' ); ?>" target="_blank">
								<img src="<?= get_field( 'under-email-icon', 'options' ); ?>" />
							</a>
						</li>
					<?php endif; ?>
					<?php if( get_field('social_fb-url', 'options') && get_field('social_fb-icon', 'options') ): ?>
						<li>
							<a href="<?= get_field( 'social_fb-url', 'options' ); ?>" target="_blank">
								<img src="<?= get_field( 'social_fb-icon', 'options' ); ?>" />
							</a>
						</li>
					<?php endif; ?>
					<?php if( get_field('social_ig-url', 'options') && get_field('social_ig-icon', 'options') ): ?>
						<li>
							<a href="<?= get_field( 'social_ig-url', 'options' ); ?>" target="_blank">
								<img src="<?= get_field( 'social_ig-icon', 'options' ); ?>" />
							</a>
						</li>
					<?php endif; ?>
					<?php if( get_field('social_tw-url', 'options') && get_field('social_tw-icon', 'options') ): ?>
						<li>
							<a href="<?= get_field( 'social_tw-url', 'options' ); ?>" target="_blank">
								<img src="<?= get_field( 'social_tw-icon', 'options' ); ?>" />
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="footer-column-2">
				<div class="body">
					<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'foot-menu',
								'container' 		=> '',
								'menu_class'		=> 'main-nav',
								'link_class'   		=> 'ul',
							)
						);
					?>
				</div>
			</div>
			<div class="footer-column-3">
				<ul class="social">
						<?php if( get_field('under-email', 'options') && get_field('under-email-icon', 'options') ): ?>
							<li>
								<a href="mailto:<?= get_field( 'under-email', 'options' ); ?>" target="_blank">
									<img src="<?= get_field( 'under-email-icon', 'options' ); ?>" />
								</a>
							</li>
						<?php endif; ?>
						<?php if( get_field('social_fb-url', 'options') && get_field('social_fb-icon', 'options') ): ?>
							<li>
								<a href="<?= get_field( 'social_fb-url', 'options' ); ?>" target="_blank">
									<img src="<?= get_field( 'social_fb-icon', 'options' ); ?>" />
								</a>
							</li>
						<?php endif; ?>
						<?php if( get_field('social_ig-url', 'options') && get_field('social_ig-icon', 'options') ): ?>
							<li>
								<a href="<?= get_field( 'social_ig-url', 'options' ); ?>" target="_blank">
									<img src="<?= get_field( 'social_ig-icon', 'options' ); ?>" />
								</a>
							</li>
						<?php endif; ?>
						<?php if( get_field('social_tw-url', 'options') && get_field('social_tw-icon', 'options') ): ?>
							<li>
								<a href="<?= get_field( 'social_tw-url', 'options' ); ?>" target="_blank">
									<img src="<?= get_field( 'social_tw-icon', 'options' ); ?>" />
								</a>
							</li>
						<?php endif; ?>
					</ul>
			</div>
		</div>
	</footer>

	<div id="under-sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					© 2020. Under.
				</div>
				<div class="col-lg-6">
					<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'sub-foot-menu',
								'container' 		=> '',
								'menu_class'		=> 'sub-nav',
								'link_class'   		=> 'ul',
							)
						);
					?>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>
