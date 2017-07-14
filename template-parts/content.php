<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mySite
 */

?>
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<header class="entry-header">
				<?php 
					if ( is_singular() ) : 
						the_title ('<h1 class="entry-title">', '</h1>');
						else : 
						the_title ('<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '"rel="bookmark">', '</a></h2>');
					endif;

					// check if any post exists
			if ( 'post' === get_post_type() ) : ?>	
			<div class="entry-meta">
			<?php 
			// display the time the post was posted
			mysite_posted_on(); ?>
			</div>
			<!-- .entry-meta  -->
			<?php endif; ?>
			</header>
			<!-- .entry-header -->
			<div class="entry-content">
				<?php 
					the_excerpt(
						/* translators: %s: Name of current post. Only visible to screen readers */
						sprintf (
							wp_kses (__('Continue reading<span class="screen-reader-text">"%s"</span>', 'mysite'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
							), 
							get_the_title()
						)
					);
wp_link_pages(
	array(
		'before' => '<div class="page-links">' .esc_html__(
			'Pages: ', 'mysite'
		),
		'after' => '</div>',
	)
);
?>
</div>
<!-- .entry-content -->
		</div>
		<!-- .container -->
	</section>

