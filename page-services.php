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
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cog-wheel.svg"
                            alt="Cog Wheel Icon">
                    </div>
                    <h4 class="card-title">Engine Diagnostics & Repair</h4>
                    <p class="card-description">
                        Comprehensive engine diagnostics and expert repair services for all makes and models.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/drop.svg"
                            alt="Drop Icon">
                    </div>
                    <h4 class="card-title">Oil Change Service</h4>
                    <p class="card-description">
                        Quick and efficient oil changes using premium quality oils to keep your engine running smoothly.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/car.svg"
                            alt="Car Icon">
                    </div>
                    <h4 class="card-title">Brake Service</h4>
                    <p class="card-description">
                        Complete brake inspection, pad replacement, and rotor resurfacing for optimal safety.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/speedo.svg"
                            alt="Speedo Icon">
                    </div>
                    <h4 class="card-title">Tire Service</h4>
                    <p class="card-description">
                        Tire rotation, balancing, alignment, and replacement services to extend tire life.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/battery.svg"
                            alt="Battery Icon">
                    </div>
                    <h4 class="card-title">Battery Service</h4>
                    <p class="card-description">
                        Battery testing, replacement, and maintenance to ensure reliable starting and electrical performance.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/wind.svg"
                            alt="Wind Icon">
                    </div>
                    <h4 class="card-title">AC & Heating</h4>
                    <p class="card-description">
                        Comprehensive climate control services to keep you comfortable year-round.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/wrench.svg"
                            alt="Wrench Icon">
                    </div>
                    <h4 class="card-title">Transmission Service</h4>
                    <p class="card-description">
                        Comprehensive transmission services to ensure smooth shifting and optimal performance.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/thunder.svg"
                            alt="Thunder Icon">
                    </div>
                    <h4 class="card-title">Electrical Systems</h4>
                    <p class="card-description">
                        Comprehensive electrical system diagnostics and repairs to keep your vehicle's wiring and components functioning properly.
                    </p>
                    <div class="card-price-wrapper">
                        <span class="card-price">From $99.99</span>
                        <a href="#" class="card-button">Book Now →</a>
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