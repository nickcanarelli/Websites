<?php
/**
 * Template Name: Page: Pricing Confirm
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

<section id="pricing-confirm-head">
    <div class="container">
        <?php if($_POST['first-name']) { ?>
            <h2>Congratulations on taking the first step, <?= $_POST['first-name']; ?>!</h2>
            <span>You must be one smart cookie.</span>
        <?php } else { ?> 
            Oops, you shouldn't be here! 
        <?php } ?>
    </div>
</section>
<section id="pricing-confirm-addons">
    <div class="container">
        <form id="hidden-form" action="" method="POST">
            <!-- Required -->
            <div class="row">
                <div class="col-12">
                    <div class="form-sep">
                        <span>Required</span>
                        <hr />
                    </div>
                </div>
                <!-- First Month Onboarding -->
                <div class="col-12">
                    <?php if($_POST['first-month-onboarding']) { ?>
                        <input type="hidden" id="first-month-onboarding" name="first-month-onboarding" readonly value='First Month Onboarding - <?= $_POST['first-month-onboarding']; ?>' />
                        <label for="first-month-onboarding"><span class="title">Getting To Know You</span><span class="price">$<?= $_POST['first-month-onboarding']; ?> / One-Time</span></label>
                    <?php } ?>
                </div>
                <!-- Monthly Management -->
                <div class="col-12">
                    <?php if($_POST['monthly-management']) { ?>
                        <input type="hidden" id="monthly-management" name="monthly-management" readonly value='Monthly Management - <?= $_POST['monthly-management']; ?>' />
                        <label for="monthly-management"><span class="title">Monthly Service</span><span class="price">$<?= $_POST['monthly-management']; ?> / Monthly</span></label>
                    <?php } ?>
                </div>
            </div>
            <!-- END Required -->
            <!-- Additional Services -->
            <div class="row">
                <div class="col-12">
                    <div class="form-sep">
                        <span>Additional Services</span>
                        <hr />
                    </div>
                </div>
                <!-- Recruitment Marketing -->
                <div class="col-12">
                    <?php if($_POST['recruitment-marketing']) { ?>
                        <input type="hidden" id="recruitment-marketing" readonly value="Recruitment Marketing - $<?= $_POST['recruitment-marketing']; ?>" />
                        <label for="recruitment-marketing"><span class="title">Recruitment Marketing</span><span class="price">$<?= $_POST['recruitment-marketing']; ?> / Monthly</span></label>
                    <?php } ?>
                </div>

                <!-- Hiring Process Dev -->
                <div class="col-12">
                    <?php if($_POST['hiring-process-dev']) { ?>
                        <input type="hidden" id="hiring-process-dev" readonly value="Hiring Process Development - $<?= $_POST['hiring-process-dev']; ?>" />
                        <label for="hiring-process-dev"><span class="title">Hiring Process Development</span><span class="price">$<?= $_POST['hiring-process-dev']; ?> / One-Time</span></label>
                    <?php } ?>
                </div>

                <!-- Monthly Freelance Referrals -->
                <div class="col-12">
                    <?php if($_POST['monthly-freelance-referrals']) { ?>
                        <input type="hidden" id="monthly-freelance-referrals" readonly value="Monthly Freelance Referrals - $<?= $_POST['monthly-freelance-referrals']; ?>" />
                        <label for="monthly-freelance-referrals"><span class="title">Monthly Freelance Referrals</span><span class="price">$<?= $_POST['monthly-freelance-referrals']; ?> / Each</span></label>
                    <?php } ?>
                </div>

                <!-- Exit Interviews -->
                <div class="col-12">
                    <?php if($_POST['exit-interviews']) { ?>
                        <input type="hidden" id="exit-interviews" readonly value="Exit Interviews - $<?= $_POST['exit-interviews']; ?>" />
                        <label for="exit-interviews"><span class="title">Exit Interviews</span><span class="price">$<?= $_POST['exit-interviews']; ?> / Each</span></label>
                    <?php } ?>
                </div>

                <!-- Weekly Consultation -->
                <div class="col-12">
                    <?php if($_POST['weekly-consultation']) { ?>
                        <input type="hidden" id="weekly-consultation" readonly value="Weekly Consultation - $<?= $_POST['weekly-consultation']; ?>" />
                        <label for="weekly-consultation"><span class="title">Weekly Consultation</span><span class="price">$<?= $_POST['weekly-consultation']; ?> / Monthly</span></label>
                    <?php } ?>
                </div>

                <!-- Hiring Process Management -->
                <div class="col-12">
                    <?php if($_POST['hiring-process-management']) { ?>
                        <input type="hidden" id="hiring-process-management" readonly value="Hiring Process Management - $<?= $_POST['hiring-process-management']; ?>" />
                        <label for="hiring-process-management"><span class="title">Hiring Process Management</span><span class="price">$<?= $_POST['hiring-process-management']; ?> / Monthly</span></label>
                    <?php } ?>
                </div>
            </div>
            <!-- END Additional Services -->
            <!-- Additional Hidden Fields -->
            <div class="row">
                <div class="col-12">
                    <input type="hidden" id="first-name" value="<?= $_POST['first-name']; ?>" readonly>
                </div>
                <div class="col-12">
                    <input type="hidden" id="last-name" value="<?= $_POST['last-name']; ?>" readonly>
                </div>
                <div class="col-12">
                    <input type="hidden" id="email" value="<?= $_POST['email']; ?>" readonly>
                </div>
                <div class="col-12">
                    <input type="hidden" id="company" value="<?php if($_POST['company']) { echo $_POST['company']; } else { echo 'N/A'; }; ?>" readonly>
                </div>
                <div class="col-12">
                    <input type="hidden" id="phone" value="<?php if($_POST['phone']) { echo $_POST['phone']; } else { echo 'N/A'; }; ?>" readonly>
                </div>
            </div>
            <!-- END Additional Hidden Fields -->
            <div class="row">
                <div class="col-12 text-center">                    
                    <a type="button" class="pricing-form-submit" data-open="schedule-modal">Schedule a Call</a>
                    <!-- Modal --> 
                    <div class="schedule-modal" id="schedule-modal" data-animation="slideInOutLeft">
                        <div class="modal-dial">
                            <header class="modal-head">
                                <h1>Schedule a Call</h3>
                                <a class="close-modal" aria-label="close modal" data-close></a>
                            </header>
                            <section class="modal-body">
                                <iframe src="https://makeashyft.appointlet.com/s/client-consultation-phone-call/joel-radziewicz" width="100%" height="500px" style="border: none;"></iframe>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>

<style>
    #pricing-confirm-addons form {
        width: 100%;
    }
    #pricing-confirm-addons form input {
        display: none;
    }
    #pricing-confirm-addons form input.pricing-form-submit,
    #pricing-confirm-addons form a.pricing-form-submit {
        position: relative;
        background: none !important;
        color: #082141;
        border: 2px solid #082141;
        border-radius: 50px;
        margin-right: 0;
        margin-left: 10px;
        padding: 18px 60px;
        text-decoration: none;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s;
        display: inline-block;
        margin-top: 16px;
    }
    #pricing-confirm-addons form input.pricing-form-submit:hover,
    #pricing-confirm-addons form a.pricing-form-submit:hover {
        background: #082141 !important;
        border: 2px solid #082141;
        color: #FFF !important;
        text-decoration:none;
    }
    #pricing-confirm-addons form label {
        width: 100%;
        border: 2px solid #d9d9d9;
        border-radius: 5px;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        transition: .4s;
    }
    #pricing-confirm-addons form label .title {
        font-weight: bold;
    }
    #pricing-confirm-addons form label .price {
        font-weight: bold;
        color: #6cc04a;
    }
    #pricing-confirm-addons form label:hover {
        border: 2px solid #082141;
    }
    #pricing-confirm-addons form label:hover .title {
        color: #082141;
    }
    #pricing-confirm-addons form .form-sep span {
        color: #092142;
        margin-bottom: 5px;
        font-weight: bold;
        display: block;
    }
    #pricing-confirm-addons form .form-sep hr {
        height: 2px;
        margin-bottom: 15px;
    }
    #pricing-confirm-addons .addon-card {
        border: 2px solid #d9d9d9;
        border-radius: 5px;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        transition: .4s;
    }
    #pricing-confirm-addons .addon-card:hover {
        border: 2px solid #082141;
    }
    #pricing-confirm-addons .addon-card:hover .title {
        color: #082141;
    }
    #pricing-confirm-addons .addon-card .title {
        font-weight: bold;
    }
    #pricing-confirm-addons .addon-card .price {
        font-weight: bold;
        color: #6cc04a;
    }
</style>

<script>
    jQuery(function($) {
        $(window).on("load", function(e) {
            var delay = 2000;

            e.preventDefault();
             
            // User Information
            var first_name  = $('#first-name').val();
            var last_name   = $('#last-name').val();
            var email       = $('#email').val();
            var phone       = $('#phone').val();
            var company     = $('#company').val();

            // Required Services
            var first_month_onboarding      = $('#first-month-onboarding').val();
            var monthly_management          = $('#monthly-management').val();

            // Additional Services
            var recruitment_marketing       = $('#recruitment-marketing').val();
            var hiring_process_dev          = $('#hiring-process-dev').val();
            var monthly_freelance_referrals = $('#monthly-freelance-referrals').val();
            var exit_interviews             = $('#exit-interviews').val();
            var weekly_consultation         = $('#weekly-consultation').val();
            var hiring_process_management   = $('#hiring-process-management').val();
            
            var url = '<?php echo get_stylesheet_directory_uri(); ?>/pricing-form/form-handler.php'
            $.ajax({
                type: "POST",
                url: url,
                data: "first-name="+first_name+"&last-name="+last_name+"&email="+email+"&phone="+phone+"&company="+company+"&first-month-onboarding="+first_month_onboarding+"&monthly-management="+monthly_management+"&recruitment-marketing="+recruitment_marketing+"&hiring-process-dev="+hiring_process_dev+"&monthly-freelance-referrals="+monthly_freelance_referrals+"&exit-interviews="+exit_interviews+"&weekly-consultation="+weekly_consultation+"&hiring-process-management="+hiring_process_management,
                beforeSend: function() {
                    $('.message_box').html(
                        '<img src="Loader.gif" width="25" height="25"/>'
                    );
                },		 
                success: function(data) {
                    setTimeout(function() {
                        $('.message_box').html(data);
                    }, delay);
                }
            });

        });
    });

</script>

<script>
    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
        el.addEventListener("click", function() {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
    }

    for (const el of closeEls) {
        el.addEventListener("click", function() {
            this.parentElement.parentElement.parentElement.classList.remove(isVisible);
        });
    }

    document.addEventListener("click", e => {
        if (e.target == document.querySelector(".schedule-modal.is-visible")) {
            document.querySelector(".schedule-modal.is-visible").classList.remove(isVisible);
        }
    });

    document.addEventListener("keyup", e => {
        // if we press the ESC
        if (e.key == "Escape" && document.querySelector(".schedule-modal.is-visible")) {
            document.querySelector(".schedule-modal.is-visible").classList.remove(isVisible);
        }
    });
</script>
