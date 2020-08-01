<?php
/**
   Template Name:  Construction Professionals
 */
?>
<?php get_header(); ?>

    <?php if( have_rows('wpre_builders_why_choose') ): while( have_rows('wpre_builders_why_choose') ): the_row(); ?>

    <section class="tier why-builders --lbbg">
        <div class="container">
            <h2 class="text-center has-line --center">Why Do Home Builders Choose Superior Walls?</h2>
            <?php if( have_rows('builder_reasons') ): ?>
            <div class="row features">
                <?php while( have_rows('builder_reasons') ): the_row(); ?>
                <div class="col-sm-6 col-lg-4">
                    <h3><?php the_sub_field('reason_title'); ?></h3>
                    <p><?php the_sub_field('reason_content'); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php endwhile; endif;?>

    <section class="tier partners">
        <div class="container">
            <h2 class="text-center has-line --center">Building Partners</h2>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p>We work with custom home builders who care about providing the best value and custom home construction experience for their customers.</p>
                    <p>With Superior Walls, you receive a product with added value that saves time and money and makes your customer feel confident their home is built on the best foundation on the market.</p>
                </div>
            </div>
            <?php if( have_rows('wpre_partners', 'options') ): ?>
            <div class="row partner-grid">
                <?php while( have_rows('wpre_partners', 'options') ): the_row(); 

                $partner_img = get_sub_field('wpre_partner_logo');
                $partner_link = get_sub_field('wpre_partner_link');

                ?>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <a href="<?php if($partner_link): echo $partner_link['url']; else: echo '#0'; endif; ?>"><img src="<?php echo $partner_img['sizes']['medium']; ?>" alt="<?php echo $partner_img['alt'];?>" class="img-fluid"></a>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    

    <section class="tier order-resources --lbgrad-rev">
        <div class="container">
            <h2 class="text-center has-line --center">How to Order Your Superior Walls Foundation</h2>

            <?php if( have_rows('wpre_builders_order') ): while( have_rows('wpre_builders_order') ): the_row(); ?>
            <?php if( have_rows('how_to_order') ): 
                $count = 0;
            ?>

            <div class="row order-chunks">
                <?php while( have_rows('how_to_order') ): the_row(); 
                    $count++;
                ?>
                <div class="col-lg-8 offset-lg-2">
                    <div class="order-well" data-number="<?php echo $count; ?>">
                        <?php if(get_sub_field('order_section_header')): ?><h3 class="well-header"><?php the_sub_field('order_section_header'); ?></h3><?php endif; ?>
                        <?php the_sub_field('order_step'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php endwhile; endif;?>
            <?php if( have_rows('wpre_builders_resources') ): while( have_rows('wpre_builders_resources') ): the_row(); ?>
            <?php if( have_rows('resources') ): ?>
            <div class="row resources justify-content-center">
                <?php while( have_rows('resources') ): the_row(); ?>
                <div class="col-lg-6">
                    <div class="resource-well">
                        <h3><?php the_sub_field('resource_section_title'); ?></h3>
                        <?php if( have_rows('resource_section_links') ): ?>
                        <ul>
                            <?php while( have_rows('resource_section_links') ): the_row(); 
                                $link = get_sub_field('resource_link');
                                $file = get_sub_field('resource_attachment');
                            ?>
                            <li><a href="<?php if( $link ): echo $link['url']; else: echo $file['url']; endif; ?>"><?php if( $link ): echo $link['title']; else: echo $file['title']; endif; ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php endwhile; endif;?>
        </div>
    </section>

    <?php get_template_part('partials/ask-question'); ?>

<?php get_footer(); ?>