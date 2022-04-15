<?php

/**

 * The template for displaying the footer

 *

 * Contains the opening of the #site-footer div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Twenty

 * @since Twenty Twenty 1.0

 */


$informations = get_field('information', 'option');
?>
			<footer id="site-footer" class="header-footer-group">
				<div id="testimonials" class="testimonials">
					<div class="container">
						<h1 class="title title-main">
							
							<?php the_field('titel_bewertungen', 'option'); ?>
						</h1>
						<div class="row">
							<?php 
							if( $informations ) {
								foreach( $informations as $information ) {
							?>
								<div class="col-md-4 col-12">
									<div class="testimonial-item">
										<div class="info d-flex">
											<img src="<?php echo $information['image']; ?>" class="testimonial-img" alt="">
											<div class="sub-info">
												<p class="name"><?php echo $information['name']; ?></p>
												<p class="age"><?php echo $information['zeitalter']; ?> Jahre alt</p>
											</div>
										</div>
										<p class="sub-title"><?php echo $information['titel']; ?></p>
										<p class="content">
										<?php echo $information['inhalt']; ?>
										</p>
									</div>
								</div>
							<?php 	
								}
							}	?>
						</div>
					</div>
				</div>
				<?php 
				$download_google_play = get_field('download_google_play', 'option')[0];
				$download_google_app = get_field('download_google_app', 'option')[0];
				?>
				<div id="download">
					<div class="wrap-banner" style="background-image:url('<?php the_field('background_download','option'); ?>')">
						<div class="container">
							<div class="wrap-content">
								<h1 class="white-title"><?php the_field('titel_download','option'); ?></h1>
								<div class="row">
									<div class="col-md-12 col-12">
										<div class="download-img">
											<a href="<?php echo $download_google_play['link'] ?>"><img src="<?php echo $download_google_play['image'];?>" alt=""></a>
											<a href="<?php echo $download_google_app['link'] ?>"><img src="<?php echo $download_google_app['image']; ?>" alt=""></a>
										</div>
									</div>
									<div class="col-md-12 col-12">
										<a href="<?php the_field('download','option'); ?>" class="btn-get-started scrollto">ANMELDEN</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-12"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>

						<div class="col-md-6 col-12"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
					</div><!-- .row -->
				</div><!-- .container -->
			</footer><!-- #site-footer -->
		<?php wp_footer(); ?>
	</body>

</html>

