<?php
/**
   Template Name:  FAQ
 */
?>
<?php get_header(); ?>

    
    <section class="tier faqs --lbbg">
        <div class="container">
            <?php if( have_rows('wpre_faq_section') ): ?> 
            <div class="basic-link-nav">
                <ul>
                    <?php while( have_rows('wpre_faq_section') ): the_row(); ?>
                    <li><a href="#<?php echo str_replace(' ', '-', get_sub_field('faq_section_title')); ?>"><?php the_sub_field('faq_section_title'); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if( have_rows('wpre_faq_section') ): ?> 
            <div class="faq-sections">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <?php while( have_rows('wpre_faq_section') ): the_row(); ?>
                        <div class="faq-section" id="<?php echo str_replace(' ', '-', get_sub_field('faq_section_title')); ?>">
                            <h3 class="faq-section--title"><?php the_sub_field('faq_section_title'); ?></h3>
                            <?php if( have_rows('faq_item') ): ?> 
                            <?php while( have_rows('faq_item') ): the_row(); ?>
                            <div class="faq-item --shadow-well">
                                <div class="faq-item--title"><?php the_sub_field('question'); ?></div>
                                <div class="faq-item--content">
                                    <p><?php the_sub_field('answer'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="faq-ask">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h3>Can't Find an Answer to Your Question?</h3>
                        <p>If you’re not quite ready for a quote and just have some questions, we’re here to help.</p>
                        <p>Complete our <a href="/contact/">online form</a> or call <a href="tel:717-733-4823">717-733-4823</a> and we’ll get back to you — typically within 1 business day.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>