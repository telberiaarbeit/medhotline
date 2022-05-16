<?php

/**

 * Header file for the Twenty Twenty WordPress default theme.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Twenty

 * @since Twenty Twenty 1.0

 */



?><!DOCTYPE html>



<html class="no-js" <?php language_attributes(); ?>>



	<head>



		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0" >



		<link rel="profile" href="https://gmpg.org/xfn/11">


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
		<?php wp_head(); ?>



	</head>



	<body <?php body_class(); ?>>



		<?php

		wp_body_open();

		?>



		<header id="header" class="fixed-top header-all header-account">



			<div class="container">

				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-6 col-12">

						<?php twentytwenty_site_logo(); ?>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-12">

						<div class="row">

							<div class="col-lg-5 col-md-5 col-sm-5 col-12 text-right">

								<!-- Header phone -->

								<?php dynamic_sidebar( 'header-phone' ); ?>

								<!-- Header phone -->

							</div>

							<div class="col-lg-7 col-md-7 col-sm-7 col-12 text-center">

								<?php

									$current_user = wp_get_current_user();

									$user_display_name = $current_user->display_name;

									$user_firstname = $current_user->user_firstname;

									$user_lastname = $current_user->user_lastname;

									$user_fullname = $current_user->user_firstname.' '.$current_user->user_lastname;

								?>

								<!-- Check user login -->

								<?php if ( is_user_logged_in() ) { ?>

									<div class="row">

										<div class="col-lg-9 col-md-9 col-sm-9 col-12">

											<div class="logged">

												<span class="d-inline-block"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/user.svg" alt="" width="32px" height="32px" /></span>

												<span class="d-inline-block">

												<?php

													if($user_fullname){

														echo $user_fullname;

													}else{

														echo $user_display_name;

													}

												?>

												</span>

											</div>

										</div>

										<div class="col-lg-3 col-md-3 col-sm-3 col-12">

											<div class="logout">

												<a href="<?php echo wp_logout_url();?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/log-out.png" alt="" width="32px" height="32px"></a>

											</div>

										</div>

									</div>

										<?php }else{ ?>

									<a href="<?php echo wp_login_url(); ?>">Log in</a>

								<?php } ?>

								<!-- Check user login -->

							</div>

						</div>

					</div>

				</div>

			</div><!-- .container -->

		</header><!-- #site-header -->

