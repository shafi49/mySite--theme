
<?php 
/**
 * Theme Options Customizer Implementation.
 *
 * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
 *
 * @param WP_Customize_Manager $wp_customize Object that holds the customizer data.
 */
function mysite_register_theme_customizer( $wp_customize ){

	/*
	 * Failsafe is safe
	 */
	if ( ! isset( $wp_customize ) ) {
		return;
	}

	/**
	 * Add 'Home Top' Section.
	 */
	$wp_customize->add_section(
		// $id
		'mysite_section_home_top',
		// $args
		array(
			'title'			=> __( 'Home Top', 'mysite' ),
			// 'description'	=> __( 'Some description for the options in the Home Top section', 'mysite' ),
			'active_callback' => 'is_front_page',
		)
	);

	/**
	 * Add 'Home Top Background Image' Setting.
	 */
	$wp_customize->add_setting(
		// $id
		'mysite_home_top_background_image',
		// $args
		array(
			'default'		=> get_stylesheet_directory_uri() . './assets/images/banner.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);

	/**
	 * Add 'Home Top Background Image' image upload Control.
	 */
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			// $wp_customize object
			$wp_customize,
			// $id
			'mysite_home_top_background_image',
			// $args
			array(
				'settings'		=> 'mysite_home_top_background_image',
				'section'		=> 'mysite_section_home_top',
				'label'			=> __( 'Home Top Background Image', 'mysite' ),
				'description'	=> __( 'Select the image to be used for Home Top Background.', 'mysite' )
			)
		)
	);

}

// Settings API options initilization and validation.
add_action( 'customize_register', 'mysite_register_theme_customizer' );

/**
 * Writes the Home Top background image out to the 'head' element of the document
 * by reading the value from the theme mod value in the options table.
 */
function mysite_customizer_css() {
?>
	<style type="text/css">
		<?php
			if ( get_theme_mod( 'mysite_home_top_background_image' ) ) {
				$home_top_background_image_url = get_theme_mod( 'mysite_home_top_background_image' );
			} else {
				$home_top_background_image_url = get_stylesheet_directory_uri() . './assets/images/banner.jpg';
			}
			// if ( 0 < count( strlen( ( $home_top_background_image_url = get_theme_mod( 'mysite_home_top_background_image', sprintf( '%s/assets/images/banner.jpg', get_stylesheet_directory_uri() ) ) ) ) ) ) { ?>
			.home-top {
				background-image: url( <?php echo $home_top_background_image_url; ?> );
			}
		<?php // } // end if ?>
	 </style>
<?php
} // end mysite_customizer_css
add_action( 'wp_head', 'mysite_customizer_css');
/**
 * Registers the Theme Customizer Preview with WordPress.
 *
 * @package    mysite
 * @since      0.3.0
 * @version    0.3.0
 */
function mysite_customizer_live_preview() {
	wp_enqueue_script(
		'mysite-theme-customizer',
		get_stylesheet_directory_uri() . '/js/theme-customizer.js',
		array( 'customize-preview' ),
		'0.1.0',
		true
	);
} // end mysite_customizer_live_preview
add_action( 'customize_preview_init', 'mysite_customizer_live_preview' );