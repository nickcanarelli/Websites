<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yscores
 */

get_header();
?>

<!-- 404 Hero -->
<section id="four-hero" style="background-image: url('<?= get_field('def-graybill__404-hero', 'option'); ?>');">
	<div class="container">
		<div class="body">
			<div class="card">
				<h1>404</h1>
				<span class="dough"><?= get_field('def-graybill__404-title', 'option'); ?></span>
				<?= get_field('def-graybill__404-content', 'option'); ?>

				<?php if( have_rows('def-graybill__404-list', 'option') ): ?>
				<ul>
					<?php while( have_rows('def-graybill__404-list', 'option') ): the_row(); 
                        $title = get_sub_field('title');
                        $link = get_sub_field('page_link');
                    ?>
					<li><a href="<?= $link; ?>"><?= $title; ?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- END 404 Hero -->

<?php
get_footer();
