<?php
    $ask_show = get_field('wpre_if_ask_a_question');
    $ask_bg = get_field('wpre_ask_a_question_bg');
    $ask_title = get_field('wpre_ask_a_question_title');
    $ask_content = get_field('wpre_ask_a_question_content');

    if($ask_show) :
?>
<section class="tier form --lbbg">
        <div class="form-section-bg b-lazy" data-src="<?php if($ask_bg): echo $ask_bg['sizes']['hero-lg']; else: the_post_thumbnail_url('hero-lg'); endif; ?>" style="background-position: center;background-size: cover;"></div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="ask-question">
                <div class="form-header">
                    <h2 class="has-line --center"><?php if( $ask_title ): echo $ask_title; else: ?>Ask A Question<?php endif; ?></h2>
                    <p><?php if( $ask_title ): echo $ask_content; else: ?>We’d love to hear from you! Send us your question and we’ll get back to you within 1 business day.<?php endif; ?></p>
                </div>
                <div class="form-wrapper">
                    <?php echo do_shortcode('[gravityforms id=8 title=false ajax=true]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>