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
			<footer class="main_footer">
				<section id="footer">
					<div class="container">
						<ul class="copyright">
							<li>&copy; Shafi. All rights reserved.</li><li>My Site by <a href="<?php echo esc_url(home_url('/')) ; ?>">Sailor</a></li>
						</ul>
					</div>
				</section>
			</footer>

</div>
<!-- div.wrapper end -->
<?php wp_footer(); ?>

</body>
</html>
