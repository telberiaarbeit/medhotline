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

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="header" class="fixed-top header-all">

			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php twentytwenty_site_logo(); ?>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-8 text-right">
								<!-- Header phone -->
								<?php dynamic_sidebar( 'header-phone' ); ?>
								<!-- Header phone -->
							</div>
							<div class="col-md-2 text-center">
								<!-- Check user login -->
								<?php if ( is_user_logged_in() ) { ?>
									<a href="<?php echo wp_logout_url();?>" class="nav-user"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/user.svg" alt="" width="32px" height="32px"></a>
								<?php }else{ ?>
									<a href="<?php echo wp_login_url(); ?>" class="login-user">Log in</a>
								<?php } ?>
								<!-- Check user login -->
							</div>
							<div class="col-md-2 text-right">
								<div class="menu-dropdown">
									<a href="javascript:void(0)" class="nav-menu"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu" ></a>
								<?php
									if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
										?>

											<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

												<ul class="primary-menu reset-list-style">

												<?php
												if ( has_nav_menu( 'primary' ) ) {

													wp_nav_menu(
														array(
															'container'  => '',
															'items_wrap' => '%3$s',
															'theme_location' => 'primary',
														)
													);

												} elseif ( ! has_nav_menu( 'expanded' ) ) {

													wp_list_pages(
														array(
															'match_menu_classes' => true,
															'show_sub_menu_icons' => true,
															'title_li' => false,
															'walker'   => new TwentyTwenty_Walker_Page(),
														)
													);

												}
												?>

												</ul>

											</nav><!-- .primary-menu-wrapper -->

										<?php
									}
								?>
								</div>
							</div>
						</div>
					</div>

			</div><!-- .container -->

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
