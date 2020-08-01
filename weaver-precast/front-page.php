<?php get_header(); ?>

    <section class="tier --lbbg special-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <?php 
                    
                    $image = get_field('wpre_special_banner_image');
                    
                    if( !empty($image) ): ?>
                    
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
                    
                    <?php endif; ?>
                </div>
                <div class="col-md-9">
                    <h2><?php the_field('wpre_special_banner_title'); ?></h2>
                    <?php the_field('wpre_special_banner_content'); ?>
                    <?php 
                    
                    $link = get_field('wpre_special_banner_link');
                    
                    if( $link ): ?>
                        
                        <a class="button --primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php if( have_rows('wpre_home_section_one') ): while( have_rows('wpre_home_section_one') ): the_row(); ?>
    <section class="tier content-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <?php the_sub_field('content_left'); ?>
                </div>
                <div class="col-xl-6">
                    <?php
                        $slider_gallery = get_sub_field('wpre_slider_gallery');
                        $size = 'medium-lg-square';

                        if( $slider_gallery ): ?>
                    <div class="media-slider">
                        <?php foreach( $slider_gallery as $slide ): ?>
                        <div class="media--slide">
                            <div class="caption-wrap"><?php echo wp_get_attachment_image( $slide['ID'], $size, "", ["class" => "img-fluid"] ); ?><?php if($slide['caption']): ?><span><?php echo $slide['caption']; ?></span><?php endif; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif;?>

    <?php if( have_rows('wpre_home_section_two') ): while( have_rows('wpre_home_section_two') ): the_row(); ?>
    <section class="tier why --lbbg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <?php the_sub_field('content_intro'); ?>
                </div>
            </div>
            <?php if( have_rows('reasons') ): ?> 
            <div class="row justify-content-center">
                <?php while( have_rows('reasons') ): the_row(); 

                    $title = get_sub_field('reason_title');
                    $content = get_sub_field('reason_content');
                    $icon = get_sub_field('reason_icon');

                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="feature --shadow-well">
                        <div class="feature--media -icon">
                            <i class="<?php echo $icon; ?>"></i>
                        </div>
                        <div class="feature--content">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $content; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_home_section_three') ): while( have_rows('wpre_home_section_three') ): the_row(); ?>
    <section class="tier content-right">
        <div class="section-split"><img src="/wp-content/themes/yboot/assets/img/superior-walls-oval.svg" alt="Superior Walls" class="img-fluid"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <?php
                        $slider_gallery = get_sub_field('wpre_slider_gallery');
                        $size = 'medium-lg-square';

                        if( $slider_gallery ): ?>
                    <div class="media-slider">
                        <?php foreach( $slider_gallery as $slide ): ?>
                        <div class="media--slide">
                            <div class="caption-wrap"><?php echo wp_get_attachment_image( $slide['ID'], $size, "", ["class" => "img-fluid"] ); ?><?php if($slide['caption']): ?><span><?php echo $slide['caption']; ?></span><?php endif; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-6">
                    <?php the_sub_field('content_right'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_home_section_four') ): while( have_rows('wpre_home_section_four') ): the_row(); ?>
    <section class="tier vs --lbbg" id="comparison">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <?php the_sub_field('content_left');?>
                </div>
                <div class="col-xl-6">
                    <div class="comparison-table --shadow-well">
                        <!-- <div class="scroll-more"><span>Scroll To See Comparison <i class="icon-arrow-thin-right"></i></span></div> -->
                        <div class="table--inner">
                        <div class="table--column">
                            <div class="table--cell cell-header">&nbsp;</div>
                            <div class="table--cell">Consistent broom finish</div>
                            <div class="table--cell">Insulated</div>
                            <div class="table--cell">Studded</div>
                            <div class="table--cell">Installs in hours</div>
                            <div class="table--cell">Watertight</div>
                            <div class="table--cell">Ready for finishing</div>
                        </div>
                        <div class="table--column">
                            <div class="table--cell cell-header"><img src="/wp-content/themes/yboot/assets/img/superior-walls-icon.svg" alt="Superior Walls" class="img-fluid"> Superior Walls</div>
                            <div class="table--cell"><span class="icon-checkmark"></span></div>
                            <div class="table--cell"><span class="icon-checkmark"></span></div>
                            <div class="table--cell"><span class="icon-checkmark"></span></div>
                            <div class="table--cell"><span class="icon-checkmark"></span></div>
                            <div class="table--cell"><span class="icon-checkmark"></span></div>
                            <div class="table--cell"><span class="icon-checkmark"></span></div>
                        </div>
                        <div class="table--column">
                            <div class="table--cell cell-header last">Traditional Foundations</div>
                            <div class="table--cell"><span class="icon-cross"></span></div>
                            <div class="table--cell"><span class="icon-cross"></span></div>
                            <div class="table--cell"><span class="icon-cross"></span></div>
                            <div class="table--cell"><span class="icon-cross"></span></div>
                            <div class="table--cell"><span class="icon-cross"></span></div>
                            <div class="table--cell"><span class="icon-cross"></span></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <section class="tier quote --lbbg">
        <div class="container">
            <?php get_template_part('partials/featured-media-element'); ?>
        </div>
    </section>
    <?php get_template_part('partials/ask-question'); ?>
    
<?php get_footer(); ?>