<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mySite
 */

?>

	

		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>My Site <a href="<?php echo esc_url(home_url('/')) ; ?>">Sailor</a></li>
					</ul>
				</div>
			</section>

</div>
<!-- div.wrapper end -->
<?php wp_footer(); ?>

</body>
</html>
