<?php
/**
 * News page template.
 *
 * @package SalvationAuto
 */

get_header();
?>

<section class="section-padding-top section-padding-bottom bg-gradient">
    <div class="container page-hero-container">
        <div class="page-hero-img-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/instagram.svg" alt="News Icon">
        </div>
        <h2 class="title">Latest News</h2>
        <h4>Follow our journey on Instagram for the latest updates, projects, and behind-the-scenes</h4>
    </div>
</section>
<section class="section-padding-top section-padding-bottom">
    <div class="container news-container">
        <a class="button button-insta" href="#instagram-feed">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/instagram.svg" alt="News Icon"><span>Follow us on Instagram</span>
        </a>
       
        <div class="instagram-feed-wrapper" id="instagram-feed">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
    </div>
</section>
<section class="section-padding-top section-padding-bottom bg-secondary-gradient">
		<div class="container cta-container">
			<h2 class="title">Stay Connected</h2>
			<h4>Follow us on social media to stay updated with our latest work, special offers, and automotive tips.</h4>
			<a href="#instagram-feed" class="button button-insta">Follow Us Now</a>
		</div>
</section>

<?php
get_footer();
?>
