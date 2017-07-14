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
			<section id="one">
				<div class="container">
					<?php if (is_home() && ! is_front_page() ) : ?>
					<header class="major">
						<h2><?php single_post_title(); ?></h2>
						<?php endif; 
							/* start the loop */
								while (have_posts() ) : the_post();
						?>
						<p>Just an incredibly simple responsive site<br /> template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>
					</header>
					<p>Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan
						erat praesent faucibus commodo ac mi lacus. Adipiscing mi ac commodo. Vis aliquet tortor ultricies non ante erat nunc
						integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia
						elementum.</p>
				</div>
			</section>

	</div>
	<!-- Wrapper end -->
			<?php
// get_sidebar();
get_footer();