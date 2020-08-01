<?php
/**
   Template Name:  Energy
 */
?>
<?php get_header(); ?>


<section class="tier checklist-card-section --lbbg">
    <div class="container">
    	<div class="checklist-card">
	        <div class="text-center">
	        	<h3 class="has-line"><?php the_field( 'wpre_energy_benefits_title' ); ?></h3>
	        </div>
	        <div class="checklist-card__description">
	        	<?php the_field( 'wpre_energy_benefits_description' ); ?>
	        </div>
	        <?php if( have_rows('wpre_energy_benefits') ): ?>
	        <div class="row">
                <div class="row justify-content-center">
                <?php while( have_rows('wpre_energy_benefits') ): the_row(); ?> 

                    <div class="col-md-6 checklist-card__items">
                        <div class="checklist-card__info">
                        	<h3><?php the_sub_field('benefit'); ?></h3>
                        	<div class="checklist-card__text">
    		                   <img src="/wp-content/themes/yboot/assets/img/icons/circle-check.svg" class="img-fluid">
                        		<?php the_sub_field( 'description' ); ?>
                        	</div>
                        </div>
                    </div>

                <?php endwhile; ?>
                </div>
	        </div>
	        <?php endif; ?>
        </div>
    </div>
</section>


<?php if( have_rows('wpre_energy_content_left') ): while( have_rows('wpre_energy_content_left') ): the_row(); ?>

	<section class="tier content-left">
	    <div class="container">
	        <div class="row align-items-center">
	            <div class="col-lg-6">
	                <?php the_sub_field('content_left'); ?>
	            </div>
	            <div class="col-lg-6">
	                <?php the_sub_field('content_right'); ?>
	            </div>
	        </div>
	    </div>
	</section>

<?php endwhile; endif;?>
<?php if( have_rows('wpre_energy_content_right') ): while( have_rows('wpre_energy_content_right') ): the_row(); ?>

	<section class="tier content-right">
	    <div class="container --ntp">
	        <div class="row align-items-center">
	           <div class="col-lg-6">
	                <?php the_sub_field('content_left'); ?>
	            </div>
	            <div class="col-lg-6">
	                <?php the_sub_field('content_right'); ?>
	            </div>
	        </div>
	    </div>
	</section>

<?php endwhile; endif;?>


<section class="tier products --lbbg">
	<div class="container">

        <?php if( have_rows('wpre_energy_callout_cards') ): 
            $count = 0;
        ?>
        <div class="product-wells callout-cards">
            <?php while( have_rows('wpre_energy_callout_cards') ): the_row(); 
                $title = get_sub_field('title');
                $slider_gallery = get_sub_field('gallery');
                $size = 'medium-lg';
                $id = ( str_replace( ' ', '-', strtolower( $title ) ) );

                $count++;
            ?>
            <div class="product-well --shadow-well" id="product-<?php echo $id; ?>">
                <div class="product-well--inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="has-line"><?php echo $title; ?></h2>
                       		<div class="product-description">
                       			<?php the_sub_field( 'description' ); ?>
                       		</div>
                        </div>
                        <div class="col-lg-6">
                            <?php if( $slider_gallery ): ?>
                            <div class="media-slider">
                                <?php foreach( $slider_gallery as $slide ): ?>
                                <div class="media--slide">
                                    <a data-fancybox="pg<?php echo $count; ?>" href="<? echo $slide['url']; ?>"><?php echo wp_get_attachment_image( $slide['ID'], $size, "", ["class" => "img-fluid"] ); ?></a>
                                </div>
                                <?php endforeach; ?>               
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

	</div>
</section>


<?php get_template_part('partials/ask-question'); ?>

<?php get_footer(); ?>


