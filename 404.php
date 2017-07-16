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
		<section class="error-404 not-found">
			<div class="container">
				<header class="page-header entry-header">
					<h2 class="page-title entry-title">
						<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mysite' ); ?>
					</h2>
				</header>
				<!-- .page-header -->

				<div class="page-content entry-content">
					<p>
						<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mysite' ); ?>
					</p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
					?>

 						<div class="widget widget_categories">
							<h2 class="widget-title">
								
					 <?php // esc_html_e( 'Most Used Categories', 'mysite' ); ?> 
 							</h2>
							<ul>
								<?php
/*    							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
 */ 					?>
      							</ul>
						</div>
 						<!-- .widget -->
  
						<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'mysite' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div>
				<!-- .page-content -->
			</div>
			<!-- div.container -->
		</section>
		<!-- .error-404 -->
	</div>
	<!-- div#main -->
	<!-- Wrapper end -->
	<?php
// get_sidebar();
get_footer();