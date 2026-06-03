<?php
/**
 * Front page template.
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
		<div class="container home-hero-container">
			<div class="content-wrapper">
				<h1 class="title">Professional Vehicle Care You Can Trust</h1>
				<h4 class="description">Your trusted partner for quality used cars. Explore our wide selection and find
					your perfect ride today!</h4>
				<div class="btn-wrapper">
					<a href="contact#contact-form-section" class="button button-white">Book Appointment</a>
					<a href="services" class="button button-blank">Our Services</a>
				</div>
			</div>
			<div class="image-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.jfif" alt="Hero Car Image">
			</div>
		</div>
	</section>
	<section class="section-padding-top section-padding-bottom">
		<div class="container statictics-container">
			<div class="statistic-item">
				<h2 class="statistic-number">500+</h2>
				<p class="statistic-description">Satisfied Customers</p>
			</div>
			<div class="statistic-item">
				<h2 class="statistic-number">10+</h2>
				<p class="statistic-description">Years of Experience</p>
			</div>
			<div class="statistic-item">
				<h2 class="statistic-number">1000+</h2>
				<p class="statistic-description">Vehicles Serviced</p>
			</div>
			<div class="statistic-item">
				<h2 class="statistic-number">50+</h2>
				<p class="statistic-description">Expert Technicians</p>
			</div>
		</div>
	</section>
	<section class="section-padding-top section-padding-bottom bg-secondary">
		<div class="container about-container">
			<div class="common-content-wrapper">
				<h2 class="title">Why Choose Salvation Auto?</h2>
				<p>We combine expertise, quality, and customer service to deliver the best auto care experience.</p>
			</div>
			<div class="cards-4">
				<div class="card">
					<div class="card-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/shield.svg"
							alt="Shield Icon">
					</div>
					<h4 class="card-title">Expert Technicians</h4>
					<p class="card-description">Our team of certified technicians has the expertise to handle all your
						vehicle's needs.</p>
				</div>
				<div class="card">
					<div class="card-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/clock.svg"
							alt="Clock Icon">
					</div>
					<h4 class="card-title">Fast Service</h4>
					<p class="card-description">Quick turnaround times without compromising on quality.</p>
				</div>
				<div class="card">
					<div class="card-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/circle-check.svg"
							alt="Circle Check Icon">
					</div>
					<h4 class="card-title">Quality Parts</h4>
					<p class="card-description">We use only the highest quality parts to ensure your vehicle's longevity and performance.</p>
				</div>
				<div class="card">
					<div class="card-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/users.svg"
							alt="Users Icon">
					</div>
					<h4 class="card-title">Customer First</h4>
					<p class="card-description">Your satisfaction is our priority with transparent pricing and service</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section-padding-top section-padding-bottom">
		<div class="container img-with-text-container">
			<div class="image-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-choose-us.jfif"
					alt="Why Choose Us Image">
			</div>
			<div class="content-wrapper">
				<h2 class="title">State-of-the-Art Facilities</h2>
				<p>Our workshop is equipped with the latest diagnostic tools and equipment to ensure accurate and efficient service for all vehicle types. From routine maintenance to complex repairs, we have the technology and expertise to handle it all.</p>
				<div class="list-wrapper">
					<div class="list-item">
						<div class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/circle-check-blue.svg" alt="Check Icon">
						</div>

						<p>Advanced diagnostic equipment</p>
					</div>
					<div class="list-item">
						<div class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/circle-check-blue.svg" alt="Check Icon">
						</div>

						<p>Clean and organized workspace</p>
					</div>
					<div class="list-item">
						<div class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/circle-check-blue.svg" alt="Check Icon">
						</div>

						<p>Comfortable waiting area</p>
					</div>
					<div class="list-item">
						<div class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/circle-check-blue.svg" alt="Check Icon">
						</div>

						<p>Transparent service process</p>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<section class="section-padding-top section-padding-bottom bg-secondary-gradient">
		<div class="container cta-container">
			<h2 class="title">Ready to Get Started?</h2>
			<h4>Schedule your appointment today and experience the Salvation Auto difference.</h4>
			<a href="contact#contact-form-section" class="button button-white">Book Appointment</a>
		</div>
	</section>
</main>

<?php
get_footer();
