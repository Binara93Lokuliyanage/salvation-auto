<?php
/**
 * Contact page template.
 *
 * @package SalvationAuto
 */

get_header();
?>

<section class="section-padding-top section-padding-bottom bg-gradient">
    <div class="container page-hero-container">
        <h2 class="title">Contact Us</h2>
        <h4>Get in touch with our team for any inquiries or to schedule a service</h4>
    </div>
</section>
<section class="section-padding-top section-padding-bottom" id="contact-form-section">
    <div class="container contact-container">
        <div class="contact-form-wrapper">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
        </div>
        <div class="contact-info">
            <h3>Get In Touch</h3>
            <div class="contact-info-item">
                <div class="contact-info-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/phone.svg" alt="Phone Icon">
                </div>
                <div class="contact-info-text">
                    <span class="contact-info-label">Phone</span>
                    <a href="tel:+61470616952" class="contact-info-link">(+61) 470 616 952</a>
                    <p class="contact-info-description">Available Monday to Friday, 8:00 AM - 6:00 PM</p>
                </div>
            </div>
            <div class="contact-info-item">
                <div class="contact-info-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/email.svg" alt="Email Icon">
                </div>
                <div class="contact-info-text">
                    <span class="contact-info-label">Email</span>
                    <a href="mailto:office@salvationauto.com.au" class="contact-info-link">office@salvationauto.com.au</a>
                    <p class="contact-info-description">We'll respond to your inquiry within 24 hours</p>
                </div>
            </div>
            <div class="contact-info-item">
                <div class="contact-info-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/location.svg"
                        alt="Location Icon">
                </div>
                <div class="contact-info-text">
                    <span class="contact-info-label">Address</span>
                    <p class="contact-info-link">Melbourne, Australia</p>
                    <p class="contact-info-description">Visit us for expert automotive services and consultations</p>
                </div>
            </div>
            <div class="contact-info-item">
                <div class="contact-info-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/clock.svg" alt="Clock Icon">
                </div>
                <div class="contact-info-text">
                    <span class="contact-info-label">Business Hours</span>
                    <p class="contact-info-link">Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p class="contact-info-description">Closed on weekends and public holidays</p>
                </div>
            </div>
            <div class="card bg-gradient contact-card">
                <h4>Emergency Service</h4>
                <p>Need immediate assistance? Our 24/7 emergency service is available for urgent repairs.</p>
                <a href="tel:+61470616952" class="button button-white">Call Emergency Line</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
