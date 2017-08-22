<?php 
/**
 * Template Name: Static Front Page
 *
 */

// header
get_header(); 

?>
<!-- header -->
<!-- Header -->
    

		<!-- Wrapper -->
			

			<!-- Main -->
				<div id="main">

					<!-- One -->
						<section id="one">
							<div class="container">
								<header class="major">
									<h2>Welcome!</h2>
									<p>This is web developer Shafi's personal internet space<br />
									</p>
								</header>
								<p>I ❤ surfing and desiging websites</p>
							</div>
						</section>

					<!-- Two -->
						<section id="two">
							<div class="container">
								<h3>Things I Can Do</h3>
								<ul class="feature-icons">
									<li class="fa-code">Write all the code</li>
									<li class="fa-cubes">Stack small boxes</li>
									<li class="fa-book">Read books and stuff</li>
									<li class="fa-coffee">Drink much coffee</li>
									<li class="fa-bolt">Code Lightning bolt websites</li>
								</ul>
							</div>
						</section>

					<!-- Three -->
						<section id="three">
							<div class="container">
								<h3>My skills</h3>
								<p>I have pretty solid understanding about these technologies</p>
								<div class="features">
									<article>
										<a href="#" class="image"><i class="fa fa-html5" aria-hidden="true"></i>
</a>
										<div class="inner">
											<h4>HTML</h4>
											<p>The markup language that every web browser understands. </p>
										</div>
									</article>
									<article>
										<a href="#" class="image"><i class="fa fa-css3" aria-hidden="true"></i>
</a>
										<div class="inner">
											<h4>CSS</h4>
											<p>The beauty rules of web browsers!</p>
										</div>
									</article>
									<article>
										<a href="#" class="image"><i class="fa fa-code" aria-hidden="true"></i>
</a>
										<div class="inner">
											<h4>JavaScript</h4>
											<p>The logic behind all interactions happening inside browsers.</p>
										</div>
									</article>
								</div>
							</div>
						</section>

					<!-- Four -->
						<section id="four">
							<div class="container">
								<h3>Contact Me</h3>
								<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
								<?php echo do_shortcode( '[contact-form-7 id="1720" title="Contact form 1"]' )?>
								
							</div>
						</section>

				</div>

			<!-- Footer -->

		

      <!-- footer -->
      <?php get_footer(); ?>
      <!-- footer -->