<?php
/**
 * Services page template.
 *
 * @package SalvationAuto
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
    <section class="section-padding-top section-padding-bottom bg-gradient">
        <div class="container page-hero-container">
            <h2 class="title">Our Services</h2>
            <h4>Comprehensive vehicle maintenance and repair services delivered by certified professionals</h4>
        </div>
    </section>
    <section class="section-padding-top section-padding-bottom">
        <div class="container services-container">
            <div class="cards-3">
                <div class="card" id="on-site">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cog-wheel.svg"
                            alt="Cog Wheel Icon">
                    </div>
                    <h4 class="card-title">On-site Diagnostics</h4>
                    <p class="card-description">
                        Advanced on-site diagnostics to quickly identify and resolve vehicle issues, saving you time and hassle.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price"></span>
                        <a href="contact#contact-form-section" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card" id="warranty-safe">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/car.svg"
                            alt="Car Icon">
                    </div>
                    <h4 class="card-title">Warranty-Safe Logbooks Services</h4>
                    <p class="card-description">
                        Comprehensive logbook services to maintain your vehicle's warranty and ensure proper maintenance records.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price"></span>
                        <a href="contact#contact-form-section" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card" id="pre-purchase">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/speedo.svg"
                            alt="Speedo Icon">
                    </div>
                    <h4 class="card-title">Pre-Purchase & Safety Inspections</h4>
                    <p class="card-description">
                        Comprehensive pre-purchase inspections to ensure you make informed decisions about your next vehicle.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price"></span>
                        <a href="contact#contact-form-section" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card" id="electrical">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/thunder.svg"
                            alt="Thunder Icon">
                    </div>
                    <h4 class="card-title">Electrical Work</h4>
                    <p class="card-description">
                        Comprehensive electrical system diagnostics and repairs to keep your vehicle's wiring and components functioning properly.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price"></span>
                        <a href="contact#contact-form-section" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card" id="full-system">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/wind.svg"
                            alt="Wind Icon">
                    </div>
                    <h4 class="card-title">Full System Fault Scanning</h4>
                    <p class="card-description">
                        Comprehensive full system fault scanning to identify and address any issues affecting your vehicle's performance.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price"></span>
                        <a href="contact#contact-form-section" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card" id="general-repairs">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/wrench.svg"
                            alt="Wrench Icon">
                    </div>
                    <h4 class="card-title">General Repairs</h4>
                    <p class="card-description">
                        Comprehensive general repairs to keep your vehicle running smoothly.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price"></span>
                        <a href="contact#contact-form-section" class="card-button">Book Now →</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section-padding-top section-padding-bottom bg-secondary">
        <div class="container service-plans-container">
            <div class="service-plan-title-container">
                <h2 class="service-plan-title">Maintenance Plans</h2>
                <p>Save money and keep your vehicle in top condition with our comprehensive maintenance plans. Regular servicing prevents costly repairs and extends your vehicle's lifespan.</p>
            </div>
            <div></div>
            <div class="plans-list">
                <div class="card bg-primary">
                    <h4 class="card-title">Basic Plan</h4>
                    <p class="card-description">Ideal for routine maintenance and minor repairs, keeping your vehicle in top shape.</p>
                    <p><span class="plan-card-price">$299</span>/year</p>
                </div>
                <div class="card bg-primary">
                    <h4 class="card-title">Premium Plan</h4>
                    <p class="card-description">Everything in Basic plus brake service and diagnostics</p>
                    <p><span class="plan-card-price">$599.99</span>/year</p>
                </div>
                <div class="card bg-gradient">
                    <h4 class="card-title">Elite Plan</h4>
                    <p class="card-description">Complete coverage including all services and priority scheduling</p>
                    <p><span class="plan-card-price">$999.99</span>/year</p>
                </div>
            </div>
            <div class="plans-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maintenance-plans.jfif" alt="Maintenance Plans Image">
            </div>
        </div>
    </section>
    <section class="section-padding-top section-padding-bottom bg-secondary-gradient">
		<div class="container cta-container">
			<h2 class="title">Need Help Choosing a Service?</h2>
			<h4>Our expert team is here to help you find the right service for your vehicle.</h4>
			<a href="contact" class="button button-white">Call Now</a>
		</div>
	</section>
</main>

<?php
get_footer();
?>
