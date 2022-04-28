<?php
    /* Template Name: Sign Up */
    get_header('not-info');
    $signup_title = get_field('title');
    $signup_sub_title = get_field('sub_title');
    $signup_image = get_field('image'); 
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<div class="sign-in sign-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <?php
                    if($signup_title){
                        echo '<h1 class="title">'.$signup_title.'</h1>';
                    }
                    if($signup_sub_title){
                        echo '<div class="not-account">'.$signup_sub_title.'</div>';
                    }
                    echo do_shortcode('[wc_reg_form_bbloomer]');
                ?>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="feature-image">
                    <?php 
                        if($signup_image){
                            echo '<img src="'.$signup_image.'" alt="signin-image" class="border-16" />';
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