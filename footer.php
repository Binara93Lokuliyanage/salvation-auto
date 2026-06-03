<?php
/**
 * Site footer.
 *
 * @package SalvationAuto
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<section class="site-footer section-padding-top section-padding-bottom">
	<div class="container">
		<div class="footer-main">
			<div class="footer-block">
				<div class="footer-logo-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png"
						alt="Salvation Auto Logo" class="footer-logo">
				</div>
				<p>
					Professional vehicle maintenance and repair services you can trust.
				</p>
			</div>
			<div class="footer-block">
				<h5>Quick Links</h5>
				<div class="footer-links">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class' => 'footer-menu',
							'container' => false,
						)
					);
					?>
					<a href="privacy-policy">Privacy Policy</a>
					<a href="terms-and-conditions">Terms and Conditions</a>
				</div>
			</div>
			<div class="footer-block">
				<h5>Services</h5>
				<div class="footer-links">
					<ul>
						<li><a href="#">Oil Change</a></li>
						<li><a href="#">Brake Repair</a></li>
						<li><a href="#">Tire Services</a></li>
						<li><a href="#">Engine Diagnostics</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-block">
				<h5>Contact Info</h5>
				<div class="footer-links">
					<a href="tel:+1234567890">

						<span class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/phone.svg"
								alt="Phone Icon" class="contact-icon">
						</span>

						<span>(123) 456-7890</span>

					</a>
					<a href="mailto:info@salvationauto.com">

						<span class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/email.svg"
								alt="Email Icon" class="contact-icon">
						</span>

						<span>info@salvationauto.com</span>

					</a>
					<a href="https://goo.gl/maps/yourlocation" target="_blank">

						<span class="contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/location.svg"
								alt="Location Icon" class="contact-icon">
						</span>

						<span>123 Main St, Anytown, USA</span>
					</a>
				</div>
			</div>

		</div>
		<div class="footer-copyrights">
			<p>&copy; <?php echo date('Y'); ?> Salvation Auto. All rights reserved.</p>
			<p>Designed by <a href="https://complexbrains.com" target="_blank">Complex Brains Software Engineers</a></p>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
</body>

</html>
