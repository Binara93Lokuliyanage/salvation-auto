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
						'container'      => false,
					)
				);
				?>

				<a href="#" class="button">Book Now</a>
			</div>
		</div>
	</section>
<?php wp_body_open(); ?>
