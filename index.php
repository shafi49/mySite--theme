<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mySite
 */

get_header(); ?>
<!-- div.wrapper in header.php -->
		<!-- Main -->
		<div id="main">
<?php if (have_posts() ) :?>
					<?php if (is_home() && ! is_front_page() ) : ?>
					<header class="major">
						<h2><?php single_post_title(); ?></h2>
						<?php endif; 
							/* start the loop */
								while (have_posts() ) : the_post();
get_template_part('template-parts/content', get_post_format() );

endwhile;
the_posts_navigation(); 

else : 

get_template_part ('template_parts/content', 'none');

endif; 
?>

	</div>
	<!-- Wrapper end -->
	<?php
// get_sidebar();
get_footer();