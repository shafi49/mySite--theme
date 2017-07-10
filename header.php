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
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'mysite' ); ?>
			</a>

			<header>
<?php // if (has_custom_logo()) :  ?>
					<?php 
					// get and set the custom logo image
					// $custom_logo_id = get_theme_mod ('custom_logo');
					// $custom_logo_src = wp_get_attachment_image_src ($custom_logo_id, 'full');
					// custom logo alt 
					// get_post_meta ('id_of_post', 'data_to_retrieve', 'whether_the_value_or_an_array')
					// $custom_logo_alt = get_post_meta ($custom_logo_id, '_wp_attachment_image_alt', true);
        // if no alt text is set set the site title as the alt text
/*				if ( empty( $image_alt ) ) {
            $custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
        }
*/					
					?>
				<span class="image avatar">
<!--					<a href="<?php // esc_url (home_url('/')); ?>">
--><!--						<img src="<?php // echo $custom_logo_src[0]; ?>" alt="<?php // echo $custom_logo_alt; ?>">
-->
					
<!--					</a>
-->
					<?php the_custom_logo(); ?>


				</span>
				<?php // endif; ?>
				<!--front page title-->
				
				<?php if (is_front_page() && is_home() ) : ?>

				<h1 id="logo">
					<!--esc_url sanitizes the url provided by home_url -->
					<!--home_url provides the root url of the site-->
					<a href="<?php echo esc_url (home_url('/')); ?>" rel="home">
					 <?php bloginfo ('name'); ?></a>
					</h1>
					<?php endif; ?>
					<?php 
					//site description
					$description = get_bloginfo( 'description', 'display' );
					// print the description is description is available
					if ($description || is_customize_preview() ) : 
					?>
				<p><?php echo $description; ?></p>
				<?php endif; ?>
			</header>
			<?php 
			// getting menu items as an array

			
			?>
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