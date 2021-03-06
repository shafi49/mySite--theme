<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mySite
 */

get_header(); ?>

	<div id="main" class="site-main">
		<!-- 		date.php
 -->
		<?php
	if ( have_posts() ) : ?>
			<header class="page-header">
				<div class="container">
					<?php 
					$modified_title = str_replace('Day:', '', get_the_archive_title());
					printf ('<h2 class="page-title">Posted on: %s</h2>', $modified_title);

					the_archive_description ('<div class="archive-description">', '</div>');

		?>

				</div>
			</header>


			<?php 	
		// If comments are open or we have at least one comment, load up the comment template.
	
	while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', get_post_format() );

	endwhile; // End of the loop.

	the_posts_navigation(  );

	else :  

	get_template_part( 'template_parts/content', 'none' );

	endif;
	?>

	</div>
	<!-- #main -->

	<?php
// get_sidebar();
get_footer();