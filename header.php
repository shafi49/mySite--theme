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
						<?php bloginfo ('name'); ?>
					</a>
				</h1>
				<?php endif; ?>
				<?php 
					//site description
					$description = get_bloginfo( 'description', 'display' );
					// print the description is description is available
					if ($description || is_customize_preview() ) : 
					?>
				<p>
					<?php echo $description; ?>
				</p>
				<?php endif; ?>
			</header>
			<?php 
			// getting menu items as an object
	function ms_get_menu_items($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);
		}
	}
// wp_nav_menu() arguments
$main_menu_args = array (
	'menu' => 'main_menu',
	'menu_class' => '',
	'menu_id' => '',
	'container' => 'nav',
	'container_class' => '',
	'container_id' => 'nav',
	'fallback_cb' => '',
	'before' => '',
	'after' => '',
	'link_before' => '',
	'link_after' => '',
	'echo' => true,
	'depth' => '',
	'walker' => '',
	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
);

?>
<?php wp_nav_menu( $main_menu_args ); ?>

			<?php 
			// footer menu 
			$social_links = ms_get_menu_items('social_links');

			?>
			<footer>
				<ul class="icons">
					<?php if (isset($social_links)) : ?>
					<?php foreach ($social_links as $key=>$social_link) : 
					// this is for fontawesome fonts
					// convert string to lowercase
					$title = strtolower($social_link->post_title);
					if ($title == "email") : 
						$title = "envelope";
					endif;
					?>
					<li><a href="<?php echo $social_link->url; ?>" class="icon fa-<?php echo $title; ?>"><span class="label"><?php echo $social_link->post_title; ?></span></a></li>
					<?php endforeach; endif; ?>
				</ul>
			</footer>
		</section>
			<!-- Wrapper -->
	<div id="wrapper">
