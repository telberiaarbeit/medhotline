<?php
    /* Template Name: Sign Up */
    get_header();
    $signup_title = get_field('title');
    $signup_sub_title = get_field('sub_title');
    $signup_order_per_mail= get_field('order_per_mail');
    $signup_image = get_field('image');
?>
<div class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <?php
                    if($signup_title){
                        echo '<h1 class="title">'.$signup_title.'</h1>';
                    }
                    if($signup_sub_title){
                        echo '<h3 class="sub-title">'.$signup_sub_title.'</h3>';
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12">
            
                <?php
                    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
                    if ( $login === "failed" ) {
                        echo '<p><strong>ERROR:</strong> Wrong username or password.</p>';
                    } elseif ( $login === "empty" ) {
                        echo '<p><strong>ERROR:</strong> Username and password cannot be left blank.</p>';
                    } elseif ( $login === "false" ) {
                        echo '<p><strong>ERROR:</strong> You\'re out.</p>';
                    }
                    $args = array(
                        'redirect' => site_url('/besuche'),
                        'label_username' => __( 'E-Mail' ),
                        'label_password' => __( 'Passwort' ),
                        'label_log_in'   => __( 'Zustimmen und weitermachen' ),
                        'remember' => false,
                    );
                    echo wp_login_form($args);
                ?>
                <p class="register">Sie haben bereits ein Konto? <a href="#">Anmelden!</a></p>
            </div>
            <div class="col-md-8 col-12">
                <div class="feature-image">
                    <?php 
                        if($signup_image){
                            echo '<img src="'.$signup_image.'" alt="signup-image">';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer('no-review');
?>