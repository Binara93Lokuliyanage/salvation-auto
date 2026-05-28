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
        <a class="button button-insta" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/instagram.svg" alt="News Icon"><span>Follow us on Instagram</span>
        </a>
        <!-- <div class="cards-3">
            <div class="card insta-card">
                <div class="insta-card-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.jfif" alt="Instagram Post 1">
                </div>
                <div class="insta-card-content">
                    <p>Quality service, every time. 🔧 #SalvationAuto #AutoRepair</p>
                </div>
                <div class="insta-card-feedback">
                    <div class="feedback-item">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/heart.svg" alt="Heart Icon"> 120</span>
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/comments.svg" alt="Comments Icon"> 15</span>
                    </div>
                    <div class="feedback-item">
                        <span>2 days ago</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="instagram-feed-wrapper">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
    </div>
</section>
<section class="section-padding-top section-padding-bottom bg-secondary-gradient">
		<div class="container cta-container">
			<h2 class="title">Stay Connected</h2>
			<h4>Follow us on social media to stay updated with our latest work, special offers, and automotive tips.</h4>
			<a href="contact" class="button button-insta">Follow Us Now</a>
		</div>
</section>

<?php
get_footer();
?>