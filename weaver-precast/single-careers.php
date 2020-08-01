<?php 
$job_title = get_the_title();
$job_location = get_field( 'weaver-careers__location' );
$job_type = get_field( 'weaver-careers__job-type' );

$open_apply = get_field( 'weaver-careers__open-apply' );
get_header();
?>

<?php if($open_apply == 'yes') { ?>
    <section class="careers-post__intro">
        <div class="container text-center">
            <div class="job-description">
                <?php echo get_field('weaver-careers__description'); ?>
            </div>
        </div>
    </section>
    <section class="careers-post__content">
        <div class="careers-post__content-bg" style="background-image: url('<?php echo get_field('careers-post__bg', 'options'); ?>');"></div>
        <div class="container">
            <div class="body">
                <div class="weaver-row">
                    <div class="open-sidebar" id="apply-online">
                        <h2>Apply Online Today</h2>
                        <?= do_shortcode('[gravityform id=9 title=false description=false ajax=false field_values="position_title='.$job_title.'&position_location='.$job_location.'&position_type='.$job_type.'"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
<section class="careers-post__intro">
    <div class="container text-center">
        <span class="job-type"><?php echo get_field('weaver-careers__job-type'); ?></span>
        <div class="job-description">
            <?php echo get_field('weaver-careers__description'); ?>
        </div>
    </div>
</section>

<section class="careers-post__content">
    <div class="careers-post__content-bg" style="background-image: url('<?php echo get_field('careers-post__bg', 'options'); ?>');"></div>
    <div class="container">
        <div class="body">
            <div class="weaver-row">
                <div class="content">
                    <div class="section">
                        <h2>Main Duties & Qualifications</h2>
                        <?php if( have_rows('weaver-careers__qualifications-list') ): ?>    
                        <ul>
                            <?php while( have_rows('weaver-careers__qualifications-list') ): the_row(); 
                                $item = get_sub_field('list_item');
                            ?>
                            <li><?php echo $item; ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <div class="section">
                        <h2>Benefits</h2>
                        <?php if( have_rows('weaver-careers__benefits-list') ): ?>    
                        <ul>
                            <?php while( have_rows('weaver-careers__benefits-list') ): the_row(); 
                                $item = get_sub_field('list_item');
                            ?>
                            <li><?php echo $item; ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <div class="how-to-apply">
                        <h2>How To Apply</h2>
                        <div class="intro">
                            <?php echo get_field('weaver-careers__how-to-apply'); ?>
                        </div>
                        <div class="address">
                            <strong>Superior Walls by Weaver</strong><br/>
                            <a href="<?php echo get_field('google_maps_directions_link', 'option'); ?>" target="_blank">
                                <?php echo get_field('address', 'option'); ?>
                            </a>
                        </div>

                        <p class="or">Or</p>

                        <a href="#apply-online" class="button --primary">Apply Online</a>

                    </div>
                </div>
                <div class="sidebar" id="apply-online">
                    <h2>Apply Online Today</h2>
                    <?= do_shortcode('[gravityform id=9 title=false description=false ajax=false field_values="position_title='.$job_title.'&position_location='.$job_location.'&position_type='.$job_type.'"]'); ?>
                </div>
            </div>
        </div>
        
    </div>
</section>

<?php } ?>
<script>
    jQuery(document).ready(function($){
        var form_wrappers = {
            init : function() {
                $('form').each(function(i, el) {
                    var form = $(el);

                    if ( !form.hasClass('wrapped') ) {
                        var inputs = form_wrappers.types();

                        $.each(inputs, function(i, v) {
                            form.find(v).each(function(n, el) {
                                var type = v.replace(':not([multiple])', '').replace(':', '');
                                form_wrappers.wrap($(el), type);
                            });

                            form_wrappers.change(form.find(v), v);
                            form_wrappers.focus(v, v);
                            form_wrappers.blur(v, v);
                        });
                        form.addClass('wrapped');
                    }
                });
            },

            wrap : function(el, type) {
                var wrapper = $('<div class="'+type+'-wrap"/>');
                el.wrap(wrapper);

                if ( type == 'file' ) {
                    var txt = el.is('[placeholder]') ? el.attr('placeholder') : 'Choose File';
                    el.attr('placeholder', txt).before('<ins>' + txt + '</ins>');
                    el.parent().addClass('test');

                    if ( el.is('disabled') ) {
                        el.parent().addClass('disabled');
                    }
                }
            },

            change : function(inputs, type) {
                type = type.replace(':not([multiple])', '').replace(':', '');

                inputs.on('change', function() {
                    var el = $(this);

                    if ( type == 'file' ) {
                        var file_list = el[0].files;

                        if ( file_list.length > 0 ) {
                            var file = file_list[0];
                            el.siblings('ins').text(file.name).parent().removeClass('test');

                        } else {
                            el.siblings('ins').text(el.attr('placeholder')).parent().addClass('test');
                        }
                    }
                });
            },

            focus : function(inputs, type) {
                $('body').on('focus', inputs, function() {
                    var el = $(this);
                    el.parent().addClass('focused');
                });
            },

            blur : function(inputs, type) {
                $('body').on('blur', inputs, function() {
                    var el = $(this);
                    el.parent().removeClass('focused');
                });
            },

            types : function() {
                return ['select:not([multiple])', ':checkbox', ':radio', ':file'];
            }
        }

        //  Init Input Button Style
        form_wrappers.init();
        $('.file-wrap ins').on('click', function(){
            $(this).next('input').trigger('click');
        });
    });
</script>

<?php get_footer();?>