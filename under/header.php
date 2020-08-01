<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Under
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'under' ); ?></a>

	<header id="under-header">
		<div class="nav-wrapper">
			<div class="under-brand">
				<a href="<?php echo get_site_url(); ?>"><img src="<?= get_field('under_logo', 'options'); ?>" alt="Under Everything" /></a>
			</div>
			
			<?php if(is_front_page()) : ?>
				<div class="under-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'head-menu',
								'container' 		=> '',
								'menu_class'		=> '',
								'link_class'   		=> 'ul',
							)
						);
					?>
				</div>
				<div class="head-cta">
					<?= do_shortcode("[ninja_form id=3]"); ?>
				</div>
				<div class="mobile-nav">
					<div class="container">
						<div class="row">
							<div class="body">
								<div class="mobile-cta">
									<?= do_shortcode("[ninja_form id=3]"); ?>
								</div>
								
								<?php
									wp_nav_menu(
										array(
											'theme_location' 	=> 'head-menu',
											'container' 		=> '',
											'menu_class'		=> 'nav',
											'link_class'   		=> 'ul',
										)
									);
								?>

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
					</div>
				</div>
				<div class="mobile-menu">
					<span class="bar"></span>
				</div>
			<?php else:  ?>
				<div class="under-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'head-menu',
								'container' 		=> '',
								'menu_class'		=> '',
								'link_class'   		=> 'ul',
							)
						);
					?>
				</div>
				<div class="mobile-nav">
					<div class="container">
						<div class="row">
							<div class="body">
								<?php
									wp_nav_menu(
										array(
											'theme_location' 	=> 'head-menu',
											'container' 		=> '',
											'menu_class'		=> 'nav',
											'link_class'   		=> 'ul',
										)
									);
								?>

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
					</div>
				</div>
				<div class="mobile-menu">
					<span class="bar"></span>
				</div>
			<?php endif; ?>
		</div>  
	</header>