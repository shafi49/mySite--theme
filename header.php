<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mySite
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
	</head>
	<body <?php body_class();?> >

		<!-- Header -->
			<section id="header">
					<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mysite' ); ?></a>

				<header>
					<span class="image avatar">
<?php 
// get and set the custom logo image
$custom_logo_id = get_theme_mod ('custom_logo');
$custom_logo_src = wp_get_attachment_image_src ($custom_logo_id, 'full');
?>

						<img src="<?php echo $custom_logo_src[0]; ?>" alt="" /></span>
					<h1 id="logo"><a href="#">Willis Corto</a></h1>
					<p>I got reprogrammed by a rogue AI<br />
					and now I'm totally cray</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#two">Things I Can Do</a></li>
						<li><a href="#three">A Few Accomplishments</a></li>
						<li><a href="#four">Contact</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>
