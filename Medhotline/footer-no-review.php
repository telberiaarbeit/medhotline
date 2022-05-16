<?php



/**



 * The template for displaying the footer



 * Contains the opening of the #site-footer div and all content after.



 */

?>

		<footer id="site-footer" class="header-footer-group">

			<div class="container">

				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12 col-12">

						<div class="logo-ft"><?php dynamic_sidebar( 'footer-logo' ); ?></div>

					</div>

				</div> <!-- .logo-ft -->

				<div class="row">

					<div class="col-md-6 col-12">

						<div class="row first-row">

							<div class="col-md-4 col-12"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>

							<div class="col-md-8 col-12"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>

						</div>

					</div>

					<div class="col-md-6 col-12">
						<div class="row sider-bar-right">
							<div class="col-md-6 col-12 column-row sb-first">

								<div class="link-app">

									<h2 class="sub-title">App</h2>

									<?php dynamic_sidebar( 'footer-3' ); ?>

								</div>

							</div>

							<div class="col-md-6 col-12 column-row sb-two">

								<div class="information">

									<?php dynamic_sidebar( 'footer-4' ); ?>

								</div>

							</div>
						</div>
					</div>
				</div><!-- .row -->

				<div class="row">

					<div class="col-md-12 col-12">

						<div class="copyright"><?php dynamic_sidebar( 'footer-copyright' ); ?></div>

					</div>

				</div> <!-- .copyright -->

			</div><!-- .container -->

		</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>

</html>



