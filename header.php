<?php

/**
 * The header template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sol_Ballesi
 */

?>
<?php

global $succes;


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Site favicon -->
	<!-- 		<link rel="icon" href="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/favicon.ico'); ?>" type="image/x-icon"> -->
	<?php wp_site_icon(); ?>
	<?php wp_head(); ?>
</head>

<body <?php sol_ballesi_print_body_class(); ?> id="body-home">
	<header class="main-theme-header">
		<div class="inner-container">
			<a href="<?php bloginfo('url'); ?>" class="site-icon" aria-label="Ir a la sección de inicio del sitio">Sol Ballesi
			</a>
			<?php sol_ballesi_print_menu('header'); ?>
			<button id="hamburger-menu-toggler">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</button>
			<div id="hamburger-menu-container">
				<?php sol_ballesi_print_menu('hamburger'); ?>
			</div>
		</div>
	</header>
	<main>