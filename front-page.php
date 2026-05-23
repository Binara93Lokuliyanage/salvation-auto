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
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	endif;
	?>
	<section class="section-padding-top section-padding-bottom bg-gradient">
		<div class="container home-hero-container">
			<div class="content-wrapper">
				<h1 class="title">Professional Vehicle Care You Can Trust</h1>
				<h4 class="description">Your trusted partner for quality used cars. Explore our wide selection and find your perfect ride today!</h4>
				<div class="btn-wrapper">
					<a href="#" class="button button-white">Book Appointment</a>
					<a href="#" class="button button-blank">Our Services</a>
				</div>
			</div>
			<div class="image-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.jfif" alt="Hero Car Image">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
