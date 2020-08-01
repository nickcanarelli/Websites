<?php
/**
   Template Name:  Superior Walls Products
 */
?>
<?php get_header(); ?>

    <section class="tier products --lbbg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php if( have_rows('wpre_sw_products') ): 
                $count = 0;
            ?>
            <div class="product-wells">
                <?php while( have_rows('wpre_sw_products') ): the_row(); 
                    $title = get_sub_field('product_title');
                    $subtitle = get_sub_field('product_subtitle');
                    $slider_gallery = get_sub_field('product_gallery');
                    $size = 'medium-lg';
                    $id = ( str_replace( ' ', '-', strtolower( $title ) ) );

                    $count++;
                ?>
                <div class="product-well --shadow-well" id="product-<?php echo $id; ?>">
                    <div class="product-well--inner">
                        <div class="row align-items-center">
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
                            <div class="col-lg-6">
                                <h3><?php echo $title; ?></h3>
                                <?php if($subtitle): ?><p class="lead"><?php echo $subtitle; ?></p><?php endif; ?>
                                <?php if( have_rows('product_features') ): ?>
                                <ul>
                                    <?php while( have_rows('product_features') ): the_row();
                                        $feature = get_sub_field('product_feature');
                                    ?>
                                    <li><?php echo $feature; ?></li>
                                    <?php endwhile; ?>
                                </ul>
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

    <?php //get_template_part('partials/trust-symbols'); ?>
    <?php get_template_part('partials/ask-question'); ?>

<?php get_footer(); ?>