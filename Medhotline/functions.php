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

	wp_enqueue_style( 'select-2-css', get_stylesheet_directory_uri() . '/assets/css/select2.min.css');

	wp_enqueue_script('select-2-js', get_stylesheet_directory_uri().'/assets/js/select2.min.js', array('jquery'), false, true);

	// Add custom CSS.

	wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css');

	// Add responsive CSS.
	wp_enqueue_style( 'responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css');

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
    $forgot_pw  = home_url( '/my-account/lost-password' );
    $text = '<div class="privacy-text"><a href="'.$forgot_pw.'">Passwort vergessen?</a></div>';
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
			return home_url('/my-account');
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

// function verify_username_password( $user, $username, $password ) {
//     $login_page  = home_url( '/sign-in/' );
//     if( $username == "" || $password == "" ) {
//         wp_redirect( $login_page . "?login=empty" );
//         exit;
//     }
// }
// add_filter( 'authenticate', 'verify_username_password', 1, 3);



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
            // $url = get_home_url();
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
                        <div class="price"><?php echo $new_price; ?>
                        <?php
                            if($annual_subscription){
                                echo '<span class="subscription-details">/Jahr</span>';
                            }
                        ?>
                        </div>
                        <!-- <div class="btn-get-started add-to-cart"> -->
                            <a href="<?php echo $product->add_to_cart_url() ?>" value="<?php echo esc_attr( $product->get_id() ); ?>" class="ajax_add_to_cart add_to_cart_button add-cart btn-get-started add-to-cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()) ?>">KAUFEN</a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        <?php    
        endwhile;
    }
    ?>
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
/******************* Redirect after sign up success *****************/ 
function custom_registration_redirect_after_registration() {
    return home_url('/my-account');
}
add_action('woocommerce_registration_redirect', 'custom_registration_redirect_after_registration', 2);

// // define the woocommerce_register_form callback 
function woocommerce_register_form_text() { 
    echo '<div class="register-text">Indem ich fortfahre, bestätige ich, dass ich über 18 Jahre alt bin und den <a href="https://www.telberia.com/projects/medhotline/allgemeine-geschaftsbedingungen/">Nutzungsbedingungen</a> von MedHotline zustimme.</div>';
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
        $cart_url = home_url('/warenkorb');  // Set Cart URL
  
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
    $cart_url = home_url('/warenkorb');
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

/**
 * Shortcode get product by category
**/
add_shortcode( 'list_product_by_category' , 'display_product_by_category' );
function display_product_by_category($atts) {
    ob_start();
    global $product;
    $atts = shortcode_atts( array(
        'category' => '',
        'number_post' => ''
    ), $atts );
    $categories  = explode(',' , $atts['category']);
    $number_post  = $atts['number_post'];
    $args = array(
        'post_type'     => 'product',
        'post_status'   => 'publish',
        'order' => 'ASC',
        'posts_per_page'=> $number_post,
        'tax_query'     => array(
            array(
                'taxonomy'  => 'product_cat',
                'field'     => 'tag_ID',
                'terms'     => $categories
            ) 
        )
    );
    $query = new WP_Query( $args );
    
    if( ! $query->have_posts() ) {
        return false;
    }
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
            global $product;
            $price_html = $product->get_price_html();
            $new_price = preg_replace('/.00/', '', $price_html);
            $product_description = $product->description;
            // $product_short_description = $product->short_description;
            $product_extra_price_text = get_field('extra_price_text');
            ?>
                <div class="product-infor">
                    <span class="name"><?php the_title(); ?></span>
                    <span class="price"><?php echo $new_price.$product_extra_price_text; ?></span>
                    <?php if($new_price){ ?>
                        <span class="add-to-cart"><a href="<?php echo $product->add_to_cart_url() ?>" value="<?php echo esc_attr( $product->get_id() ); ?>" class="ajax_add_to_cart add_to_cart_button add-cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()) ?>"><span>KAUFEN</span></a></span>
                    <?php } ?>
                </div>
                <?php
                    if($product_description){
                        echo '<div class="product-description">'.$product_description.'</div>';
                    }
                ?>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
}

/**
 * Shortcode get product by category: Medical Services
**/
add_shortcode( 'list_product_by_category_medical' , 'display_product_by_category_medical' );

function display_product_by_category_medical() {
    ob_start();
    // $atts = shortcode_atts( array(
    //     'category' => '',
    //     'number_post' => ''
    // ), $atts );
    // $categories  = explode(',' , $atts['category']);
    // $number_post  = $atts['number_post'];
    $args = array(
        'post_type'     => 'product',
        'post_status'   => 'publish',
        'order' => 'ASC',
        'posts_per_page'=> -1,
        'tax_query'     => array(
            array(
                'taxonomy'  => 'product_cat',
                'field'     => 'tag_ID',
                'terms'     => 30
            ) 
        )
    );

    $query = new WP_Query( $args );
    // var_dump($query);
    if( ! $query->have_posts() ) {
        return false;
    }
    if ( $query->have_posts() ) :
        echo '<select name="category_medical" id="category_medical">';
            echo '<option selected>Wählen Sie Ihren Test</option>';
        while ( $query->have_posts() ) : $query->the_post();
            global $product;
            ?>
                <option value="<?php echo esc_attr( $product->get_id() ); ?>" id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()) ?>"><?php the_title(); ?></option>
            <?php
        endwhile;
        echo '</select>';
        // echo '<a href="?add-to-cart=" value="" class="ajax_add_to_cart add_to_cart_button add-cart btn-get-started add-to-cart" data-product_id="" data-product_sku="">BESTELLEN</a>';
    endif;
    wp_reset_postdata();
}
/****** Popup add to cart success *******/
// Wordpress Ajax: Get different cart items count
add_action( 'wp_ajax_nopriv_checking_cart_items', 'checking_cart_items' );
add_action( 'wp_ajax_checking_cart_items', 'checking_cart_items' );
function checking_cart_items() {
    if( isset($_POST['added']) ){
        // For 2 different cart items
        echo json_encode( sizeof( WC()->cart->get_cart() ) );
    }
    die(); // To avoid server error 500
}
// The Jquery script
add_action( 'wp_footer', 'custom_popup_script' );
function custom_popup_script() {
    $checkout_url = home_url('/kasse');
    $login_url = home_url('/sign-in');
    $add_success = get_stylesheet_directory_uri() . '/assets/images/added.svg';
    $close = get_stylesheet_directory_uri() . '/assets/images/close.svg';
    ?>
    <!-- Modal -->
    <div class="modal fade" id="added_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered border-0" role="document">
            <div class="modal-content border-0">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo $close; ?>" /></span></button>
                </div>
                <div class="modal-body p-0">
                    <img src="<?php echo $add_success; ?>" alt="add_success" />
                    <p>Artikel wird dem Einkaufswagen hinzugefügt</p>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="btn-continue" data-dismiss="modal" aria-label="Close"><a href="javascript:void(0)"><span>FORTSETZEN</span></a></div>
                    <?php
                        if ( is_user_logged_in() ) {
                            echo '<a href="'.$checkout_url.'" class="btn-get-started">BESTELLEN</a>';
                        }else{
                            echo '<a href="'.$login_url.'" class="btn-get-started">BESTELLEN</a>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    jQuery( function($){
        // The Ajax function
        $(document.body).on('added_to_cart', function() {
            $.ajax({
                type: 'POST',
                url: wc_add_to_cart_params.ajax_url,
                data: {
                    'action': 'checking_cart_items',
                    'added' : 'yes'
                },
                success: function(response){
                    $('#added_product').modal('show')
                    //$('.added_to_cart').hide();
                }
            });
        });
    });
    </script>
    <?php
}
/************** Show pop-up message after successful email sending *****************/
add_action( 'wp_footer', 'mycustom_wp_footer' );
function mycustom_wp_footer() {
    $add_success = get_stylesheet_directory_uri() . '/assets/images/added.svg';
    $close = get_stylesheet_directory_uri() . '/assets/images/close.svg';
?>
<!-- Modal -->
<div class="modal fade" id="email_sending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered border-0" role="document">
        <div class="modal-content border-0">
            <div class="modal-header p-0 border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo $close; ?>" /></span></button>
            </div>
            <div class="modal-body p-0">
                <img src="<?php echo $add_success; ?>" alt="add_success" />
                <p>Vielen Dank, dass Sie sich für den Kurs angemeldet haben. Bitte überprüfen Sie Ihre E-Mail.</p>
            </div>
            <div class="modal-footer p-0 border-0">
                <!-- <a href="#" class="btn-get-started">Schließen</a> -->
                <button type="button" class="btn-get-started" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ( '851' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
                jQuery('#email_sending').modal('show'); //this is the bootstrap modal popup id
            }
        }, false );
    </script>
<?php  }

/**************** Change text alert cart page **************/
add_filter('gettext', 'change_update_cart_text', 10, 3);
function change_update_cart_text($translation, $text, $domain) {
    if ($domain == 'woocommerce') {
        if ($text == 'Cart updated.') {
            $translation = 'Warenkorb aktualisiert.';
        }
    }
    return $translation;
}
require_once( get_stylesheet_directory() . '/inc/customize.php' );

// add_action( 'woocommerce_email_before_order_table', 'bbloomer_add_content_specific_email', 20, 4 );
  
// function bbloomer_add_content_specific_email( $order, $sent_to_admin, $plain_text, $email ) {
//    if ( $email->id == 'customer_processing_order' ) {
//       echo '<h2 class="email-upsell-title">You can login on the App and make calls.</h2><p class="email-upsell-p">* If you do not have an account: We will create an account and send you a link to change your password, which you can then use to log in.</p>';
//    }
// }

/**************** Change text place order in checkout page **************/
add_filter( 'woocommerce_order_button_text', 'codemenschen_custom_button_text' );
function codemenschen_custom_button_text( $button_text ) {
	return 'Zahlungspflichtig bestellen';
}
/**************** Change text Lost Password in page /my-account/lost-password/ **************/
add_filter( 'gettext', 'change_lost_your_password' );
function change_lost_your_password($text) {
    if ($text == 'Lost password'){
        $text = 'Passwort vergessen';
    }
    return $text;
}

/**************** Change text verify new password /my-account/lost-password/ (password-reset) **************/
add_filter( 'woocommerce_get_script_data', 'strength_meter_settings', 20, 2 );
function strength_meter_settings( $params, $handle  ) {

	if( 'wc-password-strength-meter' === $handle ) {
		$params[ 'i18n_password_error' ] = 'Sehr schwach - Bitte geben Sie ein stärkeres Passwort ein.';
		$params[ 'i18n_password_hint' ] = 'Tipp: Das Passwort sollte mindestens zwölf Zeichen lang sein. Um es sicherer zu machen, verwenden Sie Groß- und Kleinbuchstaben, Zahlen und Symbole wie ! " ? $ % ^ & ).';
	}
	
	return $params;

}
/* Ajax load attribute location of product name */
add_action('wp_ajax_select_product_name', 'select_product_name');
add_action('wp_ajax_nopriv_select_product_name', 'select_product_name'); 
function select_product_name () {
    $id_product = $_POST['id'];
    $data = [];
    if(isset($id_product) && (!empty($id_product))){
        $product = wc_get_product($id_product);
        if ($product->is_type( 'variable' )) {
            
            $avail_vars = $product->get_available_variations();

            $list_option = [];
            $list_ids = [];
            $count_id = 0;
            foreach($avail_vars as $value){
                $attr = $value['attributes'];
                $attr_location = $attr['attribute_pa_choose-your-location'];

                $id_option = $value['variation_id'];
                
                if(!in_array(ucwords($attr_location), $list_option)) {
                    $list_option[] = ucwords($attr_location);
                } 
                $list_ids[ucwords($attr_location)] .= $id_option.',';
            }

            $data['option'] = $list_option;
            $data['list_ids'] = $list_ids;

            $data = [
                'msg' => 'Done',
                'code' => 200,
                'data' => $data
            ];

        }else{
            $data = [
                'msg' => 'Cannot have product',
                'code' => 200,
                'data' => '<option>Wählen Sie Ihren Standort</option>',
            ];
        }
    } else {
        $data = [
            'msg' => 'Not have product',
            'code' => 500,
            'data' => ''
        ];
    }
    echo json_encode($data);
    die;
}
/* Ajax click location of product load attribute person */
add_action('wp_ajax_select_location_product', 'select_location_product');
add_action('wp_ajax_nopriv_select_location_product', 'select_location_product');
function select_location_product(){
    // $current_id = (isset($_POST['product_id'])) ? $_POST['product_id'] : '';
    $location_id = (isset($_POST['location_id'])) ? $_POST['location_id'] : '';
    if(!empty($location_id)){
        $list_ids = explode(',', $location_id);
        $string_id = '<option>Anzahl der Personen</option>';
        if($list_ids) {
            foreach($list_ids as $id) {
                if(!empty($id)) {
                    $product = wc_get_product($id);
                    $person = $product->get_attribute( 'pa_number-of-people' );
                    $string_id .= '<option value="'.$id.'">'.$person.'</option>'; 
                }
            }
        }
        echo $string_id;        
    }else{
        echo '<option >Anzahl der Personen</option>';
    }
    die;
}