<?php
/**
   Template Name:  Homeowners
 */
?>
<?php get_header(); ?>

    <?php if( have_rows('wpre_homeowners_asking') ): while( have_rows('wpre_homeowners_asking') ): the_row(); ?>

    <section class="tier why-asking --lbbg">
        <div class="container">
            <h2 class="text-center has-line --center">Why More Homeowners are Asking for Superior Walls</h2>
            <?php if( have_rows('reasons_asking') ): 
                $count=0;
            ?> 

            <div class="row features">
                <?php while( have_rows('reasons_asking') ): the_row(); 
                    $count++;
                ?> 

                <div class="col-md-6 col-lg-4" data-number="<?php echo $count; ?>">
                    <div class="feature --shadow-well">
                        <div class="feature--content">
                            <h3><?php the_sub_field('reason_title'); ?></h3>
                            <p><?php the_sub_field('reason_content'); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <?php endif; ?>
        </div>
    </section>

    <?php endwhile; endif;?>
    <?php if( have_rows('wpre_homeowners_content_left') ): while( have_rows('wpre_homeowners_content_left') ): the_row(); ?>

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
    <?php if( have_rows('wpre_homeowners_content_right') ): while( have_rows('wpre_homeowners_content_right') ): the_row(); ?>

    <section class="tier content-right">
        <div class="container --ntp">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5972460.4029327445!2d-78.19098922703972!3d43.03637254306551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb376497183d8c7%3A0x844dca0fb4e234d0!2sNortheastern+United+States!5e0!3m2!1sen!2sus!4v1510066448201" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="has-line">Service Area</h2>
                    <p>From our location in Ephrata, PA, we manufacture, distribute, and install &amp; service Superior Walls products throughout Lancaster County and <a href="/service-area/">surrounding metro areas</a>, including:</p>
                    <ul class="">
                        <div class="row --normal-marg">
                            <div class="col-sm-6">
								<li><a href="/service-area/pennsylvania/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Pennsylvania</a>
                                    <ul>
                                        <li>Lancaster</li>
                                        <li>Harrisburg</li>
                                        <li>York</li>
                                        <li>Philadelphia</li>
                                        <li>Reading</li>
                                    </ul>
                                </li>
								<li><a href="/service-area/maryland/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Maryland</a></li>
								<li><a href="/service-area/washington-dc/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Washington D.C.</a></li>
								<li><a href="/service-area/virginia/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Virginia</a></li>
                            </div>
                            <div class="col-sm-6">
								<li><a href="/service-area/new-york/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">New York</a>
                                    <ul>
                                        <li>Catskills</li>
                                        <li>Hudson Valley</li>
                                        <li>Long Island</li>
                                    </ul>
                                </li>
								<li><a href="/service-area/connecticut/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Connecticut</a></li>
								<li><a href="/service-area/rhode-island/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Rhode Island</a></li>
								<li><a href="/service-area/massachusetts/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Massachusetts</a></li>
								<li><a href="/service-area/vermont/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Vermont</a></li>
								<li><a href="/service-area/new-hampshire/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">New Hampshire</a></li>
								<li><a href="/service-area/maine/" style="color: #2c65b5; border-bottom: 1px dotted; text-decoration: none !important;">Maine</a></li>
                            </div>
                        </div>
                    </ul>
                    
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; endif;?>

    <?php get_template_part('partials/ask-question'); ?>

<?php get_footer(); ?>