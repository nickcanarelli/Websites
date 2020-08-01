<?php
/**
 * Template Name: Page: Pricing
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

<section id="unicorn-pricing">
    <div class="container">
        <div class="section-form">
            <form id="pricing-form-inquiry" action="/pricing-confirm" method="POST" role="form">
                <div class="row">
                    <div class="col-12">
                        <div class="form-sep">
                            <span>Required</span>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="first-month-onboarding" id="first-month-onboarding" class="checkbox-input" value="2495" readonly/>
                        <label for="first-month-onboarding" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Getting To Know You</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Discovery meetings with your hiring managers to learn more about culture, ideal candidate profiles, hiring processes, benefits, most frequently hired positions.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="monthly-management" id="monthly-management" class="checkbox-input" value="1495" readonly/>
                        <label for="monthly-management" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Monthly Service</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Setup and optimize company pages; Glassdoor, Indeed, LinkedIn, Facebook Jobs, etc.</li>
                                        <li>Screen inbound applicants and present qualified candidates.</li>
                                        <li>Promotion of Active Job Listings to Shyft Premium Job Boards and Network.</li>
                                        <li>Job Description development, 2-3 as needed per month.</li>
                                        <li>Monthly report and consultation.</li>
                                        <li>The client retains ownership of candidates and applicants.</li>
                                        <li>ATS Vendor Selection, Setup, Training. A central hub for candidates managed by Shyft to provide an exceptional experience from the moment an applicant applies.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-sep">
                            <span>Additional Services</span>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="hiring-process-management" id="hiring-process-management" class="checkbox-input" value="495"/>
                        <label for="hiring-process-management" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Hiring Process Management</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Shyft owns the hiring process. Coordinating interviews and disseminating information to multiple stakeholders throughout the hiring process, offer negotiation, and quarterly process evaluation and refinement with your hiring team.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="recruitment-marketing" id="recruitment-marketing" class="checkbox-input" value="995"/>
                        <label for="recruitment-marketing" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Recruitment Marketing</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Aggressively increase the volume of applicants. We manage your Job Board Subscriptions and Paid Advertising on Indeed, Glassdoor, LinkedIn, Google, and more to drastically increase application conversions. *Price does not include advertising budget with publishers. We make budget recommendations based on your specific needs.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="hiring-process-dev" id="hiring-process-dev" class="checkbox-input" value="1495"/>
                        <label for="hiring-process-dev" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Hiring Process Development</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Using best practices to tailor a documented hiring process that fits your organization’s current culture and needs. We train staff on the agreed-upon hiring process, set expectations, and hold everyone accountable (even ourselves).</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="monthly-freelance-referrals" id="monthly-freelance-referrals" class="checkbox-input" value="495"/>
                        <label for="monthly-freelance-referrals" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Monthly Freelance Referrals</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Tap into our extensive freelance network to fill any gaps in your current staff. Engage ongoing and hire at your own pace for no additional fee.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="exit-interviews" id="exit-interviews" class="checkbox-input" value="395"/>
                        <label for="exit-interviews" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Exit Interviews</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>Using a third party to conduct exit interviews fosters a more honest feedback session that organizations can use to become better.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="checkbox" name="weekly-consultation" id="weekly-consultation" class="checkbox-input" value="395"/>
                        <label for="weekly-consultation" class="checkbox-label">
                            <div class="checkbox-text">
                                <p class="checkbox-text--title">Weekly Consultation</p>
                                <div class="checkbox-text--description">
                                    <ul>
                                        <li>For aggressive growth needs or fast-moving organizations, weekly meetings may be the secret to success. During our meetings, we will evaluate changes within the organization that impact hiring or staffing needs, touch base on open positions as well as the applicant/candidate pipeline.</li>
                                    </ul>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn-blue-outlined" data-open="modal1">Calculate Price</button>
                    </div>
                </div>
                <!-- Modal --> 
                <div class="pricing-modal" id="modal1" data-animation="slideInOutLeft">
                    <div class="modal-dial">
                        <header class="modal-head">
                            <h1>You’re almost there!</h3>
                            <span>We just need a little more information finalize your price.</span>
                            <a class="close-modal" aria-label="close modal" data-close></a>
                        </header>
                        <section class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="" placeholder="First Name" name="first-name" required data-error="First Name is required."> 
                                </div>
                                <div class="col">
                                    <input type="text" class="" placeholder="Last Name" name="last-name" required data-error="Last Name is required."> 
                                </div>
                            </div>
                            <input type="email" class="" placeholder="Email Address" name="email" required data-error="Email Address is required.">
                            <input type="text" class="" placeholder="Company" name="company" id="company">
                            <input type="text" class="" placeholder="Phone Number" name="phone" id="phone">
                            
                            <div class="row">
                                <div class="col text-center">
                                </div>
                            </div>
                        </section>
                        <footer class="modal-foot">
                            <input type="submit" class="pricing-form-submit" value="Calculate" name="submit">
                        </footer>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>

<script>
    $("#phone").inputmask({"mask": "(999) 999-9999"});
</script>

<script>
    $(document).ready(function() {
        $('#first-month-onboarding').prop('checked', true);
        $('#monthly-management').prop('checked', true);  
    });
</script>

<script>
    jQuery(document).ready(function($) {
        $('.checkbox-text--description > ul').readmore({
            speed: 1,
            collapsedHeight: 88,
            embedCSS: false
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
        if (e.target == document.querySelector(".pricing-modal.is-visible")) {
            document.querySelector(".pricing-modal.is-visible").classList.remove(isVisible);
        }
    });

    document.addEventListener("keyup", e => {
        // if we press the ESC
        if (e.key == "Escape" && document.querySelector(".pricing-modal.is-visible")) {
            document.querySelector(".pricing-modal.is-visible").classList.remove(isVisible);
        }
    });
</script>
