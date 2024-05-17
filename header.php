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
if (
	isset($_POST['mail'])
	&& (isset($_POST['nombre']))
	&& (isset($_POST['consulta']))
) {
	$success = false;

	if (
		!empty(strip_tags($_POST['mail'])) &&
		!empty(strip_tags($_POST['nombre'])) &&
		!empty(strip_tags($_POST['consulta']))
	) {
		$to      = 'natimciraolo@gmail.com';
		// $to      = 'solballesi@gmail.com';
		$subject = 'Mensaje dejado en Formulario de Contacto';
		$message = 'Recibiste un mensaje en tu sitio web con la siguiente informaci&oacute;n:<br>
		Nombre: ' . strip_tags($_POST['nombre']) . '<br>
		Consulta: ' . strip_tags($_POST['consulta']) . '<br>
		Mail: ' . strip_tags($_POST['mail']) . '<br>
		IP: ' . $_SERVER['REMOTE_ADDR'];

		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: <noreply@solballesi.com>" . "\r\n";

		if (mail($to, $subject, $message, $headers)) {
			$success = true;
		}
	}
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!-- Site favicon -->
<!-- 		<link rel="icon" href="<?php echo esc_attr( get_stylesheet_directory_uri() . '/img/favicon.ico' ); ?>" type="image/x-icon"> -->
<?php wp_site_icon(); ?>
<?php wp_head(); ?>
	</head>
	<body <?php sol_ballesi_print_body_class(); ?>>
		<header class="main-theme-header">
			<div class="inner-container">
				<a href="<?php bloginfo( 'url' ); ?>" class="site-icon" aria-label="Ir a la sección de inicio del sitio">
				</a>
<?php sol_ballesi_print_menu( 'header' ); ?>
				<button id="hamburger-menu-toggler">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</button>
				<div id="hamburger-menu-container">
<?php sol_ballesi_print_menu( 'hamburger' ); ?>
				</div>
			</div>
		</header>
		<main>
