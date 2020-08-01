<?php
/**
 * Template Name: Page: How It Works
 *
 * @package Jobify
 * @since Jobify 1.0
 */

get_header(); ?>

<?php if ( Jobify_Page_Header::show_page_header() ) : 

// Adding featured image for pagetitle
$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'large-image' ); ?>

<header class="page-header" style="background:url(<?php echo $image[0]; ?>) 100%/100% no-repeat;">
    
    <div class="header-overlay"></div>
    <h2 class="page-title"><?php the_title(); ?></h2>
</header>
<?php endif; ?>

<section id="how-alt">
    <div class="container">
        <div class="row">
            <a id="how-discover-scroll" class="anchor"></a>
            <div class="left text">
                <h2><?= get_field('hiw-discover__title'); ?></h2>
                <p><?= get_field('hiw-discover__content'); ?></p>
                <?php if( have_rows('hiw-discover__list') ): ?>
                    <ul>
                        <?php while( have_rows('hiw-discover__list') ): the_row(); 
                            $item = get_sub_field('item');
                        ?>
                            <li><?= $item; ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <a class="btn-blue-outlined" href="<?= get_field('hiw-discover__btn-url'); ?>"><?= get_field('hiw-discover__btn-text'); ?></a>
            </div>
            <div class="right"></div>
        </div>

        <div class="svg-animation">
            <div class="lt-divider">
                <svg xmlns="http://www.w3.org/2000/svg" transform="scale(-1,1) translate(0, 0)" width="100%" height="136" viewBox="0 0 801 136">
                    <defs>
                        <mask id="theMask-2">
                            <path id="thePath" class="cls-2" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                        </mask>
                    </defs> 
                    <g id="maskReveal" mask="url(#theMask-2)"> 
                        <path class="cls-1" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                    </g>
                </svg>
            </div>
        </div>

        <a id="how-amplify-scroll" class="anchor"></a>
        <div class="row">
            <div class="left"></div>
            <div class="right text">
                <h2><?= get_field('hiw-amplify__title'); ?></h2>
                <p><?= get_field('hiw-amplify__content'); ?></p>
                <?php if( have_rows('hiw-amplify__list') ): ?>
                    <ul>
                        <?php while( have_rows('hiw-amplify__list') ): the_row(); 
                            $item = get_sub_field('item');
                        ?>
                            <li><?= $item; ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <a class="btn-blue-outlined" href="<?= get_field('hiw-amplify__btn-url'); ?>"><?= get_field('hiw-amplify__btn-text'); ?></a>
            </div>
        </div>

        <div class="svg-animation">
            <div class="rt-divider">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="136" viewBox="0 0 801 136">
                    <defs>
                        <mask id="theMask-1">
                            <path id="thePath" class="cls-2" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                        </mask>
                    </defs> 
                    <g id="maskReveal" mask="url(#theMask-1)"> 
                        <path class="cls-1" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                    </g>
                </svg>
            </div>
        </div>

        <a id="how-engage-scroll" class="anchor"></a>
        <div class="row">
            <div class="left text">
                <h2><?= get_field('hiw-engage__title'); ?></h2>
                <p><?= get_field('hiw-engage__content'); ?></p>
                <?php if( have_rows('hiw-engage__list') ): ?>
                    <ul>
                        <?php while( have_rows('hiw-engage__list') ): the_row(); 
                            $item = get_sub_field('item');
                        ?>
                            <li><?= $item; ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <a class="btn-blue-outlined" href="<?= get_field('hiw-engage__btn-url'); ?>"><?= get_field('hiw-engage__btn-text'); ?></a>
            </div>
            <div class="right"></div>
        </div>

        <div class="svg-animation">
            <div class="lt-divider">
                <svg xmlns="http://www.w3.org/2000/svg" transform="scale(-1,1) translate(0, 0)" width="100%" height="136" viewBox="0 0 801 136">
                    <defs>
                        <mask id="theMask-3">
                            <path id="thePath" class="cls-2" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                        </mask>
                    </defs> 
                    <g id="maskReveal" mask="url(#theMask-3)"> 
                        <path class="cls-1" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                    </g>
                </svg>
            </div>
        </div>

        <a id="how-align-scroll" class="anchor"></a>
        <div class="row">
            <div class="left"></div>
            <div class="right text">
                <h2><?= get_field('hiw-align__title'); ?></h2>
                <p><?= get_field('hiw-align__content'); ?></p>
                <?php if( have_rows('hiw-align__list') ): ?>
                    <ul>
                        <?php while( have_rows('hiw-align__list') ): the_row(); 
                            $item = get_sub_field('item');
                        ?>
                            <li><?= $item; ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <a class="btn-blue-outlined" href="<?= get_field('hiw-align__btn-url'); ?>"><?= get_field('hiw-align__btn-text'); ?></a>
            </div>
        </div>
        
        <!-- <div class="svg-animation">
            <div class="lt-divider">
                <svg xmlns="http://www.w3.org/2000/svg" transform="scale(-1,1) translate(0, 0)" width="100%" height="196" viewBox="0 0 801 196">
                    <defs>
                        <mask id="theMask-3">
                            <path id="thePath" class="cls-2" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                        </mask>
                    </defs> 
                    <g id="maskReveal" mask="url(#theMask-3)"> 
                        <path class="cls-1" d="M800.451,0.466s12.665,98.484-98.485,98.484H101.247S2.193,87.858,2.193,198.005"/>
                    </g>
                </svg>
            </div>
        </div> -->
    </div>
</div>
<section id="how-unicorn">
    <a id="how-unicorn-scroll" class="anchor"></a>
    <div class="container">
        <div class="row">
            <div class="full-width">
                <div class="body">
                    <h2><?= get_field('hiw-cta__title-one'); ?><br /><?= get_field('hiw-cta__title-two'); ?></h2>
                    <p><?= get_field('hiw-cta__content'); ?></p>

                    <?php if( have_rows('hiw-cta__list') ): ?>
                        <ul>
                            <?php while( have_rows('hiw-cta__list') ): the_row(); 
                                $item = get_sub_field('item');
                            ?>
                                <li><?= $item; ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <a class="btn-white" href="<?= get_field('hiw-cta__btn-url'); ?>"><?= get_field('hiw-cta__btn-text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
		  
<?php get_footer(); ?>

