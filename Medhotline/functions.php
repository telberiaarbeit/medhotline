<?php

//Child Theme Functions File

add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme" );

function enqueue_wp_child_theme() 

{

    if((esc_attr(get_option("childthemewpdotcom_setting_x")) != "Yes")) 

    {

		//This is your parent stylesheet you can choose to include or exclude this by going to your Child Theme Settings under the "Settings" in your WP Dashboard

		wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css" );

    }



	// Add bootstrap CSS.

	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');

	// Add bootstrap JS.

	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);

	// Add custom CSS.

	wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css');

	// Add responsive CSS.
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');

	// Add custom JS.

	wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', array('jquery'), false, true);

}




if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/* Custom page login */
function filter_login_form_middle( $text, $args ) { 
    $text = '<div class="privacy-text">Indem ich fortfahre, bestätige ich, dass ich über 18 Jahre alt bin und den <strong>Nutzungsbedingungen</strong> und <strong>Datenschutzbestimmungen</strong> von MedHotline zustimme.</div>';
    return $text; 
}; 
add_filter( 'login_form_middle', 'filter_login_form_middle', 10, 2 ); 

function filter_login_form_top( $text, $args ) { 
    $text = '<div class="order-email">oder per E-Mail</div>';
    return $text; 
}; 
add_filter( 'login_form_top', 'filter_login_form_top', 10, 2 ); 

function my_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			// redirect them to the default place
			return admin_url();
		} else {
			return home_url('/besuche');
		}
	} else {
		return $redirect_to;
	}
}
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

function redirect_login_page() {
    $login_page  = home_url( '/sign-up/' );
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}
add_action('init', 'redirect_login_page');

function login_failed() {
    $login_page  = home_url( '/sign-up/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'login_failed' );  
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/sign-up/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}
add_filter( 'wc_add_to_cart_message_html', '__return_false' );

//********* Register widget *********//
register_sidebar( array(
    'name' => __( 'Footer Logo', 'medhotline' ),
    'id' => 'footer-logo',
    'description' => __( 'Widgets in this area will be displayed logo in the footer.', 'medhotline' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
register_sidebar( array(
    'name' => __( 'Copyright', 'medhotline' ),
    'id' => 'footer-copyright',
    'description' => __( 'Widgets in this area will be displayed copyright in the footer.', 'medhotline' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
register_sidebar( array(
    'name' => __( 'Footer #3', 'medhotline' ),
    'id' => 'footer-3',
    'description' => __( 'Widgets in this area will be displayed in the three column in the footer.', 'medhotline' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
register_sidebar( array(
    'name' => __( 'Footer #4', 'medhotline' ),
    'id' => 'footer-4',
    'description' => __( 'Widgets in this area will be displayed in the four column in the footer.', 'medhotline' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

/********************** Shortcode product home page ************************/
function list_product_custom(){
    ob_start();
    $args = array( 
        'post_type' => 'product', 
        'posts_per_page' => '3',
        'order' => 'ASC'
    );
    $products = new WP_Query($args);
    if ( $products->have_posts() ){
        while ( $products->have_posts() ) : $products->the_post();
            global $product;
            $price_html = $product->get_price_html();
            $new_price = preg_replace('/.00/', '', $price_html);
            $url = get_home_url();
            ?>
            <div class="col-md-4 col-12">
                <div class="single-product" id="product-<?php echo $product->get_id(); ?>">
                    <div class="content">
                        <h2 class="title"><a href="<?php echo $product->get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <div class="description"><?php echo get_the_content(); ?></div>
                        <div class="price"><?php echo $new_price; ?></div>
                        <div class="btn-get-started add-to-cart"><a href="<?php echo $url; ?>/cart/?add-to-cart=<?php echo $product->get_id(); ?>">KAUFEN</a></div>
                    </div>
                </div>
            </div>
        <?php    
        endwhile;
    }
    ?>
    <script type="text/javascript">
		jQuery('.subscription-details').text("/year");
	</script>
<?php 
	wp_reset_postdata();	
    $list_post = ob_get_contents();
    ob_end_clean();
    return $list_post;
}
add_shortcode('list_product','list_product_custom');