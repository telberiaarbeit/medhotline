<?php
    /* Template Name: Sign In */
    get_header('not-info');
    $signin_title = get_field('title');
    $signin_sub_title = get_field('sub_title');
    $signin_image = get_field('image');
?>
<div class="sign-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <?php
                    if($signin_title){
                        echo '<h1 class="title">'.$signin_title.'</h1>';
                    }
                    if($signin_sub_title){
                        echo '<div class="not-account">'.$signin_sub_title.'</div>';
                    }
                    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
                    if ( $login === "failed" ) {
                        echo '<p><strong>ERROR:</strong> Wrong username or password.</p>';
                    } elseif ( $login === "empty" ) {
                        echo '<p><strong>ERROR:</strong> Username and password cannot be left blank.</p>';
                    } elseif ( $login === "false" ) {
                        echo '<p><strong>ERROR:</strong> You\'re out.</p>';
                    }
                    $args = array(
                        // 'redirect' => site_url('/besuche'),
                        'label_username' => __( 'E-Mail' ),
                        'label_password' => __( 'Passwort' ),
                        'label_log_in'   => __( 'Zustimmen und weitermachen' ),
                        'remember' => false,
                    );
                    echo wp_login_form($args);
                ?>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="feature-image">
                    <?php 
                        if($signin_image){
                            echo '<img src="'.$signin_image.'" alt="signin-image" class="border-16" />';
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