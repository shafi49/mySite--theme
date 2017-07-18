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
	<div id="main" class="site-main">
		<?php if (have_posts() ) :?>
		<header class="page-header">
			<div class="container">
				<?php 
				// strip the Day: output in the_archive_title
				the_archive_title('<h2 class="page-title"> Posted on the ', '</h2>');
				the_archive_description( '<div class="archive-description">', '</div>' );		
				?>
			</div>
			<!-- .container -->
		</header>
		<?php 
							/* start the loop */
								while (have_posts() ) : the_post();
get_template_part('template-parts/content', get_post_format() );

endwhile;

the_posts_navigation(); 

else : 

get_template_part ('template-parts/content', 'none');

endif; 
?>

	</div>
	<!-- #main end -->
	<?php
// get_sidebar();
get_footer();