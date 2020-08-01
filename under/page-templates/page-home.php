<?php 
/*
 * Template Name: Page: Home
*/
get_header(); ?>

<section id="under-hero">
    <div class="content">
        <div class="body">
            <div class="title">
                <span><?= get_field('under-home__hero-title'); ?></span>
            </div>
            <div class="sub-title">
                <?= get_field('under-home__hero-sub-title'); ?>
            </div>
            <?php if( get_field('under-home__hero-cta-display') ): ?>
                <div class="cta">
                    <a href="<?= get_field('under-home__hero-cta-url'); ?>" class="btn orange">
                        <div class="icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320.001 320.001" style="enable-background:new 0 0 320.001 320.001;" xml:space="preserve">
                                <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288 c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144 c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z"/>
                            </svg>
                        </div>
                        <?= get_field('under-home__hero-cta-txt'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="image">
            <div class="bg parallax" style='background-image: url("<?= get_field('under-home__hero-img'); ?>");'></div>
        </div>
    </div>            

    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block; transform: scale(-1,1)" preserveAspectRatio="none">
        <path fill="#fff" fill-opacity="1" d="M0,96L80,128C160,160,320,224,480,208C640,192,800,96,960,64C1120,32,1280,64,1360,80L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
</section>

<section id="under-processors">
    <div class="bg">
        <svg width="675px" height="198px" viewBox="0 0 675 198" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <linearGradient x1="-9.55911752%" y1="42.0141684%" x2="103.550121%" y2="55.1014066%" id="linearGradient-1">
                    <stop stop-color="#DDD9FF" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                </linearGradient>
                <linearGradient x1="-9.55911752%" y1="43.5867224%" x2="103.550121%" y2="54.0968478%" id="linearGradient-2">
                    <stop stop-color="#DDD9FF" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g id="Image/Processors" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Image/1">
                    <path d="M38,55.5 L191.41002,128.604206 C198.962308,132.203085 207.814164,131.78582 214.994422,127.49247 L289.154826,83.1491354 C296.25272,78.9050336 304.990158,78.4456847 312.493941,81.9221399 L562.131102,197.577451 L562.131102,197.577451" id="Path-20" stroke="url(#linearGradient-1)" stroke-width="2" opacity="0.499302455"></path>
                    <path d="M26.75,148.365423 L40.5950773,156.01318 C48.2898634,160.263633 57.6515988,160.160368 65.2507537,155.741213 L296.437133,21.2988386 C303.38375,17.2591558 311.848767,16.8049307 319.187783,20.0780595 L674.748193,178.654511 L674.748193,178.654511" id="Path-20" stroke="url(#linearGradient-2)" stroke-width="2" opacity="0.499302455"></path>
                    <circle id="Oval" fill="#4E598C" opacity="0.348144531" transform="translate(101.241426, 33.669565) rotate(-48.000000) translate(-101.241426, -33.669565) " cx="101.241426" cy="33.6695651" r="4"></circle>
                    <circle id="Oval" stroke="#4E598C" opacity="0.433523996" transform="translate(109.125968, 8.473653) rotate(-48.000000) translate(-109.125968, -8.473653) " cx="109.125968" cy="8.47365259" r="6"></circle>
                    <circle id="Oval" fill="#4E598C" opacity="0.260649182" transform="translate(129.705975, 49.879731) rotate(-48.000000) translate(-129.705975, -49.879731) " cx="129.705975" cy="49.8797307" r="4"></circle>
                </g>
            </g>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head">
                    <div class="sub-title">
                        <?= get_field('under-home__processors-sub-title'); ?>
                    </div>
                    <div class="title">
                        <?= get_field('under-home__processors-title'); ?>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="processors-slider">
                    <div class="slider-actions">
                        <div class="swiper-prev arrow arrow-left"></div>
                    </div>
                    <div class="swiper-container processors_swiper">
                        <?php if( have_rows('under-home__processors') ): ?>

                        <div class="swiper-wrapper">
                            <?php while( have_rows('under-home__processors') ): the_row(); 
                                $title = get_sub_field('title');
                                $logo = get_sub_field('logo');
                            ?>
                                <div class="swiper-slide"><img src="<?= $logo; ?>" alt="<?= $title; ?>"/></div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="slider-actions">
                        <div class="swiper-next arrow arrow-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="under-hiw">
    <div class="bg" style="background-image: url('<?= get_field("under-home__hiw-bg"); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 section-head">
                <h2><?= get_field('under-home__hiw-title'); ?></h2>
            </div>
        </div>
        <div class="row vtabs">
            <div class="tabs">
                <button data-tab="tab1" class="active">
                    <div class="body">
                        <div class="icon">
                            <img src="<?= get_field('under-home__hiw-1-icon'); ?>">
                        </div>
                        <div class="content">
                            <div class="title"><?= get_field('under-home__hiw-1-title'); ?></div>
                            <div class="text">
                                <?= get_field('under-home__hiw-1-content'); ?>
                            </div>
                        </div>
                    </div>
                </button>
                <button data-tab="tab2">
                    <div class="body">
                        <div class="icon">
                            <img src="<?= get_field('under-home__hiw-2-icon'); ?>">
                        </div>
                        <div class="content">
                            <div class="title"><?= get_field('under-home__hiw-2-title'); ?></div>
                            <div class="text">
                                <?= get_field('under-home__hiw-2-content'); ?>
                            </div>
                        </div>
                    </div>
                </button>
                <button data-tab="tab3">
                    <div class="body">
                        <div class="icon">
                            <img src="<?= get_field('under-home__hiw-3-icon'); ?>">
                        </div>
                        <div class="content">
                            <div class="title"><?= get_field('under-home__hiw-3-title'); ?></div>
                            <div class="text">
                                <?= get_field('under-home__hiw-3-content'); ?>
                            </div>
                        </div>
                    </div>
                
                </button>
            </div>
            <div class="maincontent">
                <div data-tab="tab1" class="tabcontent active">
                    <img src="<?= get_field('under-home__hiw-1-image'); ?>" />
                </div>

                <div data-tab="tab2" class="tabcontent">
                    <img src="<?= get_field('under-home__hiw-2-image'); ?>" />
                </div>

                <div data-tab="tab3" class="tabcontent">
                    <img src="<?= get_field('under-home__hiw-3-image'); ?>" />
                </div>
            </div>
         </div>
    </div>
    <div class="mtabs">
        <div class="swiper-container hiw_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="body">
                        <div class="img">
                            <img src="<?= get_field('under-home__hiw-1-image'); ?>" />
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img src="<?= get_field('under-home__hiw-1-icon'); ?>">
                            </div>
                            <div class="interior">
                                <div class="title">
                                    <?= get_field('under-home__hiw-1-title'); ?>
                                </div>
                                <div class="text">
                                    <?= get_field('under-home__hiw-1-content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="body">
                        <div class="img">
                            <img src="<?= get_field('under-home__hiw-2-image'); ?>" />
                        </div>
                        <div class="content">
                        <div class="icon">
                                <img src="<?= get_field('under-home__hiw-2-icon'); ?>">
                            </div>
                            <div class="interior">
                                <div class="title">
                                    <?= get_field('under-home__hiw-2-title'); ?>
                                </div>
                                <div class="text">
                                    <?= get_field('under-home__hiw-2-content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="body">
                        <div class="img">
                            <img src="<?= get_field('under-home__hiw-3-image'); ?>" />
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img src="<?= get_field('under-home__hiw-3-icon'); ?>">
                            </div>
                            <div class="interior">
                                <div class="title">
                                    <?= get_field('under-home__hiw-3-title'); ?>
                                </div>
                                <div class="text">
                                    <?= get_field('under-home__hiw-3-content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section id="under-video">
    <a id="demo" class="anchor"></a>
    <div class="bg"></div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="#fff" fill-opacity="1" d="M0,96L80,128C160,160,320,224,480,208C640,192,800,96,960,64C1120,32,1280,64,1360,80L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <h2><?= get_field('under-home__video-title'); ?></h2>
                </div>
            </div>
            <div class="col-12">
                <?php if( get_field('under-home__video-type') == 'vimeo' ) : ?>
                    <div class="embed-container">
                        <iframe class="iframe-round" width="100%" height="100%" src="<?= get_field('under-home__video-url'); ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <style>.embed-container { position: relative; padding-bottom: 47%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                <?php elseif( get_field('under-home__video-type') == 'youtube') : ?>
                    <div class="video-container">                          
                        <iframe class="iframe-round" width="100%" height="100%" src="<?= get_field('under-home__video-url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="cta-form">
            <?= do_shortcode("[ninja_form id=3]"); ?>
        </div>
    </div>
</section>

<section id="under-pricing">
    <a id="pricing" class="anchor"></a>
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <h2><?= get_field('under-home__pricing-title'); ?></h2>
                </div>
            </div>
            <div class="col-12 d-pricing">
                <div class="plans">
                    <div class="plan">
                        <h2 class="plan-title"><?= get_field('under-home__simple-title'); ?></h2>
                        <p class="plan-price">
                            <?= get_field('under-home__simple-price'); ?>
                            <span><?= get_field('under-home__simple-freq'); ?></span>
                        </p>
                        <?php if( have_rows('under-home__simple-points') ): ?>
                        <ul class="plan-features">
                            <?php while( have_rows('under-home__simple-points') ): the_row(); 
                                $title = get_sub_field('title');
                            ?>
                            <li><?= $title; ?>
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Icon/checklist" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.5">
                                            <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                                            <polyline id="Path" stroke="#5A7184" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="4 11.9717166 9.08492497 17.9696147 20.0789494 6"></polyline>
                                        </g>
                                    </svg>
                                </span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif;?>
                    </div>
                    <div class="plan plan-tall">
                        <h2 class="plan-title"><?= get_field('under-home__signature-title'); ?></h2>
                        <span class="plan-popular"><?= get_field('under-home__signature-popular'); ?></span>
                        <p class="plan-price">$<?= get_field('under-home__signature-price'); ?><span><?= get_field('under-home__signature-freq'); ?></span></p>
                        <?php if( have_rows('under-home__signature-points') ): ?>
                        <ul class="plan-features">
                            <?php while( have_rows('under-home__signature-points') ): the_row(); 
                                $title = get_sub_field('title');
                            ?>
                            <li><?= $title; ?>
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Icon/Check" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline stroke="#13C296" stroke-width="2" points="4 11.986876 9.05995744 18 20 6"></polyline>
                                        </g>
                                    </svg>
                                </span>
                            </li>
                            <?php endwhile; ?>                           
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="plan">
                        <h2 class="plan-title"><?= get_field('under-home__sigplus-title'); ?></h2>
                        <p class="plan-price"><?= get_field('under-home__sigplus-price'); ?><span><?= get_field('under-home__sigplus-freq'); ?></span></p>
                        <?php if( have_rows('under-home__sigplus-points') ): ?>
                        <ul class="plan-features">
                            <?php while( have_rows('under-home__sigplus-points') ): the_row(); 
                                $title = get_sub_field('title');
                            ?>
                            <li><?= $title; ?>
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Icon/checklist" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.5">
                                            <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                                            <polyline id="Path" stroke="#5A7184" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="4 11.9717166 9.08492497 17.9696147 20.0789494 6"></polyline>
                                        </g>
                                    </svg>
                                </span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-12 m-pricing">
                <!-- Slider main container -->
                <div class="swiper-container pricing_swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="body">
                                <h2 class="plan-title"><?= get_field('under-home__simple-title'); ?></h2>
                                <p class="plan-price">
                                    <?= get_field('under-home__simple-price'); ?>
                                    <span><?= get_field('under-home__simple-freq'); ?></span>
                                </p>
                                <?php if( have_rows('under-home__simple-points') ): ?>
                                <ul class="plan-features">
                                    <?php while( have_rows('under-home__simple-points') ): the_row(); 
                                        $title = get_sub_field('title');
                                    ?>
                                    <li><?= $title; ?>
                                        <span>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Icon/checklist" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.5">
                                                    <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                                                    <polyline id="Path" stroke="#5A7184" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="4 11.9717166 9.08492497 17.9696147 20.0789494 6"></polyline>
                                                </g>
                                            </svg>
                                        </span>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="body">
                                <h2 class="plan-title"><?= get_field('under-home__signature-title'); ?></h2>
                                <span class="plan-popular"><?= get_field('under-home__signature-popular'); ?></span>
                                <p class="plan-price">$<?= get_field('under-home__signature-price'); ?><span><?= get_field('under-home__signature-freq'); ?></span></p>
                                <?php if( have_rows('under-home__signature-points') ): ?>
                                <ul class="plan-features">
                                    <?php while( have_rows('under-home__signature-points') ): the_row(); 
                                        $title = get_sub_field('title');
                                    ?>
                                    <li><?= $title; ?>
                                        <span>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Icon/Check" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline stroke="#13C296" stroke-width="2" points="4 11.986876 9.05995744 18 20 6"></polyline>
                                                </g>
                                            </svg>
                                        </span>
                                    </li>
                                    <?php endwhile; ?>                           
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="body">
                                <h2 class="plan-title"><?= get_field('under-home__sigplus-title'); ?></h2>
                                <p class="plan-price"><?= get_field('under-home__sigplus-price'); ?><span><?= get_field('under-home__sigplus-freq'); ?></span></p>
                                <?php if( have_rows('under-home__sigplus-points') ): ?>
                                <ul class="plan-features">
                                    <?php while( have_rows('under-home__sigplus-points') ): the_row(); 
                                        $title = get_sub_field('title');
                                    ?>
                                    <li><?= $title; ?>
                                        <span>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Icon/checklist" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.5">
                                                    <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                                                    <polyline id="Path" stroke="#5A7184" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="4 11.9717166 9.08492497 17.9696147 20.0789494 6"></polyline>
                                                </g>
                                            </svg>
                                        </span>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="under-partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head">
                    <h2><?= get_field('under-home__partners-title'); ?></h2>
                </div>
            </div>
            <div class="col-12">
                <div class="partners-slider">
                    <?php $count = count( get_field( 'under-home__partners' ) ); ?>
                    <?php if ( $count > 4 ): ?>
                        <div class="slider-actions">
                            <div class="swiper-partner-prev arrow arrow-left"></div>
                        </div>
                    <?php endif; ?>

                    <div class="swiper-container partners_swiper">
                        <?php if( have_rows('under-home__partners') ): ?>

                        <div class="swiper-wrapper">
                            <?php while( have_rows('under-home__partners') ): the_row(); 
                                $title = get_sub_field('title');
                                $logo = get_sub_field('logo');
                            ?>
                                <div class="swiper-slide"><img src="<?= $logo; ?>" alt="<?= $title; ?>"/></div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if ( $count > 4 ): ?>
                        <div class="slider-actions">
                            <div class="swiper-partner-next arrow arrow-right"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
         </div>
    </div>
</section>

<section id="under-get_started">
    <div class="bg" style="background-image: url('<?= get_field("under-home__gs-bg"); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <h2><?= get_field('under-home__gs-title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row content">
            <div class="left">
                <div class="body">
                    <div class="title">
                        <?= get_field('under-home__gs-left-title'); ?>
                    </div>
                    <?php if( have_rows('under-home__gs-left-points') ): ?>
                    <ul class="points">
                        <?php while( have_rows('under-home__gs-left-points') ): the_row(); 
                            $title = get_sub_field('title');
                        ?>
                        <li>
                            <div class="icon">
                                <svg width="36px" height="33px" viewBox="0 0 36 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter id="filter-1">
                                            <feColorMatrix in="SourceGraphic" type="matrix" values="0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 1.000000 0"></feColorMatrix>
                                        </filter>
                                        <polygon id="path-2" points="0 0.0198198559 32.4677898 0.0198198559 32.4677898 32.1315749 0 32.1315749"></polygon>
                                    </defs>
                                    <g id="Icon/CheckCricle" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g filter="url(#filter-1)" id="Icon/Check">
                                            <path d="M35.7792976,3.70725268 C35.9052358,3.85454704 36,3.98165202 36,4.17665581 C36,4.3757856 35.9328081,4.53990445 35.7875775,4.68447484 C35.3299439,5.23583724 31.5822252,8.88987499 16.4284422,23.9527161 C15.9282496,24.4367004 15.1173099,24.4368206 14.6169517,23.9530365 L5.64387193,15.2770503 C5.40325618,15.0444318 5.26829268,14.7287724 5.26829268,14.3996534 C5.26829268,14.0705745 5.40379438,13.7550353 5.64457573,13.522577 L7.19566138,12.0252379 C7.69316301,11.544979 8.49768571,11.5421749 8.99878913,12.0189087 L15.4973602,18.2018668 C15.511726,18.2155267 15.5344545,18.2159673 15.5496068,18.2031487 C21.117303,13.4973002 21.1819281,13.4105339 25.6505004,9.63311664 C32.0139012,4.2538882 35.0454858,2.84892355 35.7792976,3.70725268" id="Fill-1" fill="#8BC34A"></path>
                                            <g id="Group-5">
                                                <mask id="mask-3" fill="white">
                                                    <use xlink:href="#path-2"></use>
                                                </mask>
                                                <g id="Clip-4"></g>
                                                <path d="M32.0401425,12.3993543 C32.0112463,12.277327 31.9177827,12.1803267 31.7959534,12.1459346 C31.6740833,12.1115425 31.5431934,12.1452888 31.4534438,12.2337717 L29.1315861,14.5224605 C29.0255109,14.6270092 28.9717591,14.7733371 28.9854318,14.9207952 C29.0207765,15.3010862 29.0385306,15.6863018 29.0385306,16.0757155 C29.0385306,23.0588845 23.2945152,28.7399979 16.2338867,28.7399979 C9.17325822,28.7399979 3.42920208,23.0588845 3.42920208,16.0757155 C3.42920208,9.09250621 9.17325822,3.41143315 16.2338867,3.41143315 C17.429691,3.41143315 18.5877425,3.57439192 19.6864506,3.87899606 C20.3671436,4.06770854 21.587028,4.41417254 22.951271,5.29750839 C23.613965,5.72660222 24.143402,6.17382051 24.5497444,6.56456635 C24.7440591,6.75142198 25.0514688,6.75505494 25.2505994,6.5732451 C25.8678269,6.00993331 26.4850136,5.44662153 27.1022002,4.8833501 C27.2037042,4.79066907 27.261415,4.66032627 27.261619,4.52368632 C27.2618231,4.38704638 27.2045613,4.25617882 27.1031798,4.16333632 C26.8501749,3.93159336 26.5602743,3.68229106 26.2330698,3.42600539 C25.8209318,3.10319604 25.3254928,2.7501927 24.6791243,2.36077896 C23.0348169,1.37018983 21.4917686,0.87481453 21.0836303,0.748508361 C21.0836303,0.748508361 18.7295297,0.0198158192 16.2338867,0.0198158192 C7.26794642,0.0198158192 -1.63255301e-05,7.20853002 -1.63255301e-05,16.0757155 C-1.63255301e-05,24.9433451 7.26794642,32.1315749 16.2338867,32.1315749 C25.1997862,32.1315749 32.4677898,24.9433451 32.4677898,16.0757155 C32.4677898,14.8107163 32.319758,13.5799476 32.0401425,12.3993543" id="Fill-3" fill="#8BC34A" mask="url(#mask-3)"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <?= $title; ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
                <img src="<?= get_field('under-home__gs-img'); ?>" />
            </div>
        </div>
        <div class="cta-form">
            <?= do_shortcode("[ninja_form id=3]"); ?>
        </div>
    </div>
</section>

<section id="under-faq">
    <a id="faq" class="anchor"></a>
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-head">
                <h2><?= get_field('under-home__faqs-title'); ?></h2>
            </div>
            <div class="col-md-12">
                <ul class="under-faq">
                    <?php $faqs = array_reverse(get_field('under-home__faqs'));
                    foreach ($faqs as $faq): ?>
                        <li class="under-faq__item">
                            <span class="under-faq__item-title">
                                <?php echo $faq['title']; ?>
                            </span>
                            <div class="under-faq__item-content">
                                <?php echo $faq['content']; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    function parallax(){
        var scrolled = $(window).scrollTop();
        $('.parallax').css({'transform':'translate(0px,'+scrolled /10+'%'});
    }

    $(window).scroll(function(e){
        parallax();
    });
</script>