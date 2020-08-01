<?php 

/* Template Name: FAQ Page Template */

get_header(); ?>

<!-- Intro -->
<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('faq-intro__text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END Intro -->

<span class="accent-bdr"></span>

<!-- FAQ Items -->
<?php if( have_rows('faq__items') ): ?>
<ul class="graybill-faq">
    <span class="tr-h-bdr"></span>
    <span class="tr-v-bdr"></span>
    <?php while( have_rows('faq__items') ): the_row(); 
		$title = get_sub_field('title');
		$content = get_sub_field('content');
    ?>
    <li class="graybill-faq__item">
        <h4 class="accordion-title"><?php echo $title; ?></h4>
        <div class="accordion-content"><?php echo $content; ?></div>
    </li>
    <?php endwhile; ?>
    <span class="bl-h-bdr"></span>
    <span class="bl-v-bdr"></span>
</ul>
<?php endif; ?>
<!-- END FAQ Items -->

<?php get_footer(); ?>

<!-- FAQ Items Accordion Script -->
<script>
    jQuery(function(){
        $(document).ready(function() {
            
            $(".graybill-faq > .graybill-faq__item").click(function() {
                // Cancel the siblings
                $(this).siblings(".graybill-faq__item").removeClass("is-active").children(".accordion-content").slideUp();
                // Toggle the item
                $(this).toggleClass("is-active").children(".accordion-content").slideToggle("ease-out");
            });
        });
    });
</script>