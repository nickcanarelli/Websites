<?php
/**
   Template Name:  Service Area
 */
?>
<?php get_header(); 

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

$post_type = 'project';
$post_location = get_the_title();

$args = array(  
    'post_type' => $post_type,
    'orderby' => 'DATE',
    'posts_per_page' => '3',
    'tax_query' => array(
        array(
            'taxonomy' => 'tax_project-locations',
            'terms' => $post_location,
            'field' => 'slug',
            'operator' => 'IN'
        )
    ),
);

$query =  new WP_Query($args);
$query_count = $query->post_count;

?>

    <section class="tier service-area-upper --lbbg">
        <div class="container">
            <div class="row">
                
                <?php if(get_field( 'wpre_services_table_of_contents' )) : ?>
                    
                    <div class="service-area-upper__content">     
                        <div class="service-area-upper__content-left">
                            <?php the_content(); ?>
                        </div>
                        <div class="service-area-upper__content-right">
                            <div class="service-area-upper__table">
                                <h3>Jump to Section:</h3>
                                <div class="service-area-upper__table-row">
                                    <ul>
                                        <li><a href="#servicesRep">Representatives by County</a></li>
                                        <?php if(get_field( 'wpre_servies_trusted_builders_title' )) : ?>
                                            <li><a href="#servicesBuilders"><?php the_field( 'wpre_servies_trusted_builders_title' ); ?></a></li>
                                        <?php endif; ?>
                                        <li><a href="#servicesMembership">Memberships</a></li>
                                        
                                        <?php if($query_count > 0 ) : ?>
                                            <li><a href="#servicesGallery">Project Gallery</a></li>
                                        <?php endif; ?>

                                        <li><a href="#servicesRecent">Recent Projects</a></li>
                                        <li><a href="#servicesActivities">Community Activities</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>

                    <div class="col-lg-8 offset-lg-2 text-center">
                        <?php the_content(); ?>
                    </div>

                <?php endif; ?>
                
            </div>
            <?php if( have_rows('wpre_county_list') ): ?> 
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="wpre-dropdown--wrap">
                        <div class="wpre-dropdown --shadow-well">
                            <span class="dropdown">Choose a County</span>
                            <ul>
                                <?php while( have_rows('wpre_county_list') ): the_row(); 
                                    $county = get_sub_field('county_region'); 
                                ?>
                                <li><a href="#0" data-filter=".<?php echo str_replace(["'"," "], "-", $county ); ?>"><?php echo $county; ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if( have_rows('wpre_representatives') ): ?> 
            <div class="representatives" id="servicesRep">
                <div class="row justify-content-center">
                    <?php while( have_rows('wpre_representatives') ): the_row();
                        $region = get_sub_field('representative_region'); 
                        $county_list = get_sub_field('representative_county_multiselect');  
                        $name = get_sub_field('representative_name'); 
                        $image = get_sub_field('representative_image'); 
                        $bio = get_sub_field('representative_bio'); 
                        $phone = get_sub_field('representative_phone'); 
                        $email = get_sub_field('representative_email');
                        $text = get_sub_field('wpre_representative_content');
                        $link = get_sub_field('wpre_representative_linkedin_link');

                    ?>
                    <div class="col-lg-6 mix <?php foreach( $county_list as $county ): echo str_replace(["'"," "], "-", $county ).' '; endforeach; ?>">
                        <div class="representative --shadow-well">
                            <div class="rep--header">
                                <?php echo $region; ?>
                            </div>
                            <div class="rep--inner">
                                <div class="row --normal-marg">
                                    <div class="col-md-4 text-center"><?php echo wp_get_attachment_image( $image['ID'], "post-thumbnail", "", ["class" => "img-fluid img-circle"] ); ?></div>
                                    <div class="col-md-8">
                                        <h3><?php echo $name; ?></h3>
                                        <div class="rep--excerpt">
                                            <p><?php echo $bio; ?></p>
                                        </div>
                                        <div class="rep--contact">
                                            <ul>
                                                <li><i class="icon-phone"></i><a href="tel:<?php echo $phone; ?>" class="rep--phone"><?php echo $phone; ?></a></li>
                                                <li><i class="icon-inbox"></i><a href="mailto:<?php echo $email; ?>" class="rep--email"><?php echo $email; ?></a></li>
                                            </ul>
                                            <p class="linkedin-text">
                                                <?php echo $text ?>
                                            </p>
                                            <?php 
                                            
                                            // $link = get_field('link');
                                            
                                            if( $link ): ?>
                                                <a class="linkedin" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                        <path fill="#2B66B5" fill-rule="evenodd" d="M4.6484375,15.5 L2.5,15.5 L2.5,8.8203125 L4.6484375,8.8203125 L4.6484375,15.5 Z M3.6328125,7.8046875 C3.29426914,7.8046875 3.02083438,7.69401152 2.8125,7.47265625 C2.60416562,7.25130098 2.5,6.98437656 2.5,6.671875 C2.5,6.33333164 2.61067598,6.05338652 2.83203125,5.83203125 C3.05338652,5.61067598 3.33333164,5.5 3.671875,5.5 C4.01041836,5.5 4.28385313,5.61067598 4.4921875,5.83203125 C4.70052187,6.05338652 4.8046875,6.33333164 4.8046875,6.671875 C4.8046875,6.98437656 4.69401152,7.25130098 4.47265625,7.47265625 C4.25130098,7.69401152 3.97135586,7.8046875 3.6328125,7.8046875 Z M10.0390625,8.6640625 C10.7682328,8.6640625 11.3606748,8.91145586 11.8164062,9.40625 C12.2721377,9.90104414 12.5,10.6302035 12.5,11.59375 L12.5,15.5 L10.3515625,15.5 L10.3515625,11.828125 C10.3515625,10.8645785 9.98698281,10.3828125 9.2578125,10.3828125 C8.73697656,10.3828125 8.37239687,10.6432266 8.1640625,11.1640625 C8.11197891,11.2682297 8.0859375,11.4505195 8.0859375,11.7109375 L8.0859375,15.5 L5.9375,15.5 L5.9375,8.8203125 L8.0859375,8.8203125 L8.0859375,9.7578125 C8.60677344,9.02864219 9.25780859,8.6640625 10.0390625,8.6640625 Z M13.7890625,3 C14.1276059,3 14.4140613,3.11067598 14.6484375,3.33203125 C14.8828137,3.55338652 15,3.83333164 15,4.171875 L15,16.7109375 C15,17.0494809 14.8828137,17.348957 14.6484375,17.609375 C14.4140613,17.869793 14.1276059,18 13.7890625,18 L1.2890625,18 C0.950519141,18 0.651042969,17.869793 0.390625,17.609375 C0.130207031,17.348957 0,17.0494809 0,16.7109375 L0,4.171875 C0,3.83333164 0.12369668,3.55338652 0.37109375,3.33203125 C0.61849082,3.11067598 0.924477344,3 1.2890625,3 L13.7890625,3 Z M13.671875,16.75 C13.7239586,16.75 13.75,16.7239586 13.75,16.671875 L13.75,4.328125 C13.75,4.27604141 13.7239586,4.25 13.671875,4.25 L1.328125,4.25 C1.27604141,4.25 1.25,4.27604141 1.25,4.328125 L1.25,16.6328125 C1.25,16.7109379 1.28906211,16.75 1.3671875,16.75 L13.671875,16.75 Z" transform="translate(0 -3)"/>
                                                    </svg>
                                                    <?php echo  $name ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if($query_count > 0 ) : ?>

        <section id="servicesGallery" class="tier post-tiles --lbbg">
          <div class="container">
            <h2 class="has-line --center" style="text-align: center;">Project Gallery</h2>
            <div class="post-tile-wrap">
              <div class="row justify-content-center">

                <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

                <div class="col-lg-4 col-sm-6">
                  <article class="tile --shadow-well">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail('card-thumb', array('class' => 'img-fluid')); ?>
                    <?php endif; ?>
                    <div class="tile--inner">
                      <h3><?php the_title(); ?></h3>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="block"></a>
                  </article>
                </div>

                <?php endwhile; wp_reset_postdata(); endif; ?>

                  <div class="col-12 pagination--wrap">
                    <div class="text-center"><a href="/projects/" class="button --primary">View More Projects</a></div>
                  </div>
              </div>
            </div>
          </div>
        </section>

    <?php endif; ?>


    <?php if(get_field( 'wpre_servies_trusted_builders_logos' )) : ?>
   
    <section class="tier trusted-builders" id="servicesBuilders">
        <div class="container">
            <div class="trusted-builders__header">
                <h2 class="has-line --center" style="text-align: center;"><?php the_field( 'wpre_servies_trusted_builders_title' ); ?></h2>
                <p><?php the_field( 'wpre_servies_trusted_builders_body' ); ?></p>
            </div>
            <div class="trusted-builders__logos">

                <?php while ( have_rows( 'wpre_servies_trusted_builders_logos' ) ) : the_row(); ?>
                
                    <div class="trusted-builders__cols">
                        <a href="<?php the_sub_field( 'link' ); ?>" target="_blank">
                            <img src="<?= get_sub_field( 'logo' )['url']; ?>">
                        </a>
                    </div>
                   
                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <?php endif; ?>


    <?php if(get_field( 'wpre_services_content_left' )) : ?>
    
        <section class="tier content-right --lbbg" id="servicesRecent">
            <div class="container --ntp">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                       <?php the_field('wpre_services_content_left'); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php the_field('wpre_services_content_right'); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endif;?>

    <?php if(get_field( 'wpre_construction_industry_memberships' )): ?> 
        <section class="tier industry-memberships" id="servicesMembership">
            <div class="container">
                <div class="text-center"><h2 class="has-line --center">Construction Industry Memberships</h2></div>
                <?php while( have_rows('wpre_construction_industry_memberships') ): the_row(); ?>
                <div class="membership-group">
                    <div class="text-center"><h3 class="alt"><?php the_sub_field('membership_group_name'); ?></h3></div>
                    <?php if( have_rows('memberships') ): ?> 
                    <div class="row justify-content-center">
                        <?php while( have_rows('memberships') ): the_row(); 
                            $logo = get_sub_field('logo');
                            $caption = get_sub_field('title');
                            $link = get_sub_field('link');
                        ?>
                        <div class="col-md-3 text-center">
                            <a <?php if($link): echo "href='".$link['url']."'"."target='_blank'"; endif; ?> class="no-style"><?php echo wp_get_attachment_image( $logo['ID'], "medium", "", ["class" => "img-fluid"] ); ?><div class="text-center small"><?php echo $caption; ?></div></a>

                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( have_rows( 'wpre_community_activities_new' ) ) : ?>
        <section class="wpre-alternating-content" id="servicesActivities">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h2 class="has-line --center">Community Activities</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php while ( have_rows( 'wpre_community_activities_new' ) ) : the_row(); ?>
                <div class="section-break">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h3 class="alt"><?php the_sub_field('wpre_community_title'); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if( have_rows('wpre_community_activities_content_blocks') ):
                    ?>

                    <?php
                            while ( have_rows('wpre_community_activities_content_blocks') ) : the_row();

                                if( get_row_layout() == 'image_left_content_right' ):
                                    $img = get_sub_field('wpre_image_left');
                                    $txt = get_sub_field('wpre_content_right');
                                    $size = 'service-thumb';
                                    $thumb = $img['sizes'][ $size ];
                                    $width = $img['sizes'][ $size . '-width' ];
                                    $height = $img['sizes'][ $size . '-height' ];
                    ?>

                                    <div class="container">
                                        <div class="row contain-flexible">
                                            <div class="bg">
                                                <div class="col-4">
                                                    <img src="<?php echo $thumb; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $img['alt']; ?>" class="img-fluid">
                                                </div>
                                                <div class="col-8">
                                                    <?php echo $txt; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                    <?php
                                elseif( get_row_layout() == 'image_right_content_left' ): 
                                    $img = get_sub_field('wpre_image_right');
                                    $txt = get_sub_field('wpre_content_left');
                                    $size = 'service-thumb';
                                    $thumb = $img['sizes'][ $size ];
                                    $width = $img['sizes'][ $size . '-width' ];
                                    $height = $img['sizes'][ $size . '-height' ];
                    ?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="bg">
                                                <div class="col-8">
                                                    <?php echo $txt; ?>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?php echo $thumb; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $img['alt']; ?>" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    <?php

                                endif;

                            endwhile;

                        else :

                            // no layouts found

                        endif;
                    ?>
                </div>
                
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
    
                    
    <script>
        jQuery( document ).ready(function($) {
            var mixerReps = mixitup('.representatives');
        });
    </script>
<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
<?php get_footer(); ?>