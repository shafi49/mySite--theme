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
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one">
				<div class="container">
					<header class="major">
						<h2>Read Only</h2>
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
get_sidebar();
get_footer();