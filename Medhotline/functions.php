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

    //wp_enqueue_style("style-child", get_template_directory_uri()."/style.css" );

	// Add bootstrap CSS.

	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');

	// Add bootstrap JS.

	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);

	// Add custom CSS.

	wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css');

	// Add responsive CSS.
	// wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');

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
    $text = '<div class="privacy-text"><a href="#">Passwort vergessen?</a></div>';
    return $text; 
}; 
add_filter( 'login_form_middle', 'filter_login_form_middle', 10, 2 ); 

function filter_login_form_top( $text, $args ) {
    global $post;
    $order_per_mail = get_field('order_per_mail',$post->ID);
    $text = '<div class="order-email">'.$order_per_mail.'</div>';
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
    $login_page  = home_url( '/sign-in/' );
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}
add_action('init', 'redirect_login_page');

function login_failed() {
    $login_page  = home_url( '/sign-in/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'login_failed' );  
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/sign-in/' );
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
            $annual_subscription = $product->get_attribute( 'Annual Subscription' );
            ?>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="single-product" id="product-<?php echo $product->get_id(); ?>">
                    <div class="content">
                        <?php
                        echo '<p class="annual_subscription">';
                            if($annual_subscription){
                                echo $annual_subscription;
                            }
                        echo '</p>';
                        ?>
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

add_shortcode( 'wc_reg_form_bbloomer', 'bbloomer_separate_registration_form' );
    
function bbloomer_separate_registration_form() {
    global $post;
    $order_per_mail = get_field('order_per_mail',$post->ID);
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return;
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?>
      <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
 
         <?php do_action( 'woocommerce_register_form_start' ); ?>
         <?php echo '<div class="order-email">'.$order_per_mail.'</div>'; ?>
         <p class="login-username">
            <label for="reg_email"><?php esc_html_e( 'E-Mail', 'woocommerce' ); ?></label>
            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
         </p>
 
         <?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
 
            <p class="login-password">
               <label for="reg_password"><?php esc_html_e( 'Passwort erstellen', 'woocommerce' ); ?></label>
               <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
               <i class="bi bi-eye-slash" id="togglePassword"></i>
            </p>
 
         <?php else : ?>
 
            <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
 
         <?php endif; ?>
 
         <?php do_action( 'woocommerce_register_form' ); ?>
 
         <p class="login-submit">
            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Zustimmen und weitermachen', 'woocommerce' ); ?></button>
         </p>
 
         <?php do_action( 'woocommerce_register_form_end' ); ?>
 
      </form>
    <script>
        // Click show/hide password sign up form
        const togglePassword = document.getElementById("togglePassword");
        const password = document.getElementById("reg_password");
        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>
   <?php
     
   return ob_get_clean();
}

// // define the woocommerce_register_form callback 
function woocommerce_register_form_text() { 
    echo '<div class="register-text">Indem ich fortfahre, bestätige ich, dass ich über 18 Jahre alt bin und den <a href="#">Nutzungsbedingungen</a> und <a href="#">Datenschutzbestimmungen</a> von MedHotline zustimme.</div>';
};    
// add the action 
add_action( 'woocommerce_register_form', 'woocommerce_register_form_text', 10, 0 ); 


add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but() {
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = home_url('/cart');  // Set Cart URL
  
        ?>
        <a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
	    <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?>
        </a>
        <?php
	        
    return ob_get_clean();
 
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_but_count' );
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count( $fragments ) {
 
    ob_start();
    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = home_url('/cart');
    
    ?>
    <a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
	<?php
    if ( $cart_count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php            
    }
        ?></a>
    <?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}

add_filter( 'wp_nav_menu_top-menu_items', 'woo_cart_but_icon', 10, 2 ); // Change menu to suit - example uses 'top-menu'
/**
 * Add WooCommerce Cart Menu Item Shortcode to particular menu
 */
function woo_cart_but_icon ( $items, $args ) {
    $items .=  do_shortcode('[woo_cart_but]'); // Adding the created Icon via the shortcode already created
    return $items;
}