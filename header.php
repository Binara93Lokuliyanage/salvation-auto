<?php
/**
 * Site header.
 *
 * @package SalvationAuto
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<section class="site-header">
		<div class="container">
			<div class="img-wrapper">
				<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				echo '<h1 class="site-title">' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
			}
			?>
			</div>
			<div class="nav-bar">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'nav-menu',
						'menu_id'        => 'primary-navigation',
						'container'      => false,
					)
				);
				?>

				<!-- <a href="contact#contact-form-section" class="button">Book Now</a> -->
			</div>
			<div class="mobile-nav-bar">
				<button class="mobile-nav-icon" type="button" aria-controls="primary-navigation" aria-expanded="false">
					<span class="mobile-nav-icon-open" aria-hidden="true">
						<?php echo file_get_contents(get_template_directory() . '/assets/images/svg/menu.svg'); ?>
					</span>
					<span class="mobile-nav-icon-close" aria-hidden="true">
						<?php echo file_get_contents(get_template_directory() . '/assets/images/svg/menu-close.svg'); ?>
					</span>
					<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'salvation-auto' ); ?></span>
				</button>
			</div>
		</div>
	</section>
