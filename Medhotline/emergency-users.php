<?php

/**

 * Template Name: Emergency users

 *

**/

get_header();
?>

<main id="site-content">

<?php

$bg_image = get_field('background_image');

$title = get_field('title');

$content = get_field('content');

$link_button = get_field('link_button');

$text_button = get_field('text_button');

?>

<div class="hero5" style="background-image: url('<?php echo $bg_image; ?>')">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-12">

            <div class="hero-content">

                <?php

                    if($title){

                        echo '<h2 class="title">'.$title.'</h2>';

                    }

                    if($content){

                        echo '<div class="content">'.$content.'</div>';

                    }

                    if($link_button){

                        echo '<a href="'.$link_button.'" class="btn-get-started">'.$text_button.'</a>';

                    }

                ?>

            </div>

        </div>

    </div>

</div>

</div>


    <!-- ======= Why Us Section ======= -->

    <section class="our-advantage2" style="margin-top: 42px;">
        <div class="container">

            <div class="row">

                <?php

                $advantage_title = get_field('advantage_title');

                ?>

                <div class="col-md-12 col-12">
                    <h1 class="title title-main"><?php if ($advantage_title) {
                                                        echo $advantage_title;
                                                    } ?></h1>
                </div>

            </div>

            <div class="service">
                <div class="row">

                    <?php

                    $advantage_field = get_field('advantage_field');

                    foreach ($advantage_field as $advantage) {

                        echo '<div class="col-md-6 col-12 text-left">';

                        echo '<div class="advantage" style="margin-left:24px; margin-top:24px">';

                        echo '<div class="icon">';

                        if ($advantage['advantage_icon']) {

                            echo '<img src="' . $advantage['advantage_icon'] . '">';
                        }

                        echo '</div>';

                        echo '<div class="sub-title">';

                        if ($advantage['advantage_sub_title']) {

                            echo '<h2>' . $advantage['advantage_sub_title'] . '</h2>';
                        }

                        echo '</div>';

                        echo '<div class="description description-main">';

                        if ($advantage['advantage_description']) {

                            echo $advantage['advantage_description'];
                        }

                        echo '</div>';

                        echo '</div>';

                        echo '</div>';
                    }

                    ?>

                </div>
            </div>                                          

        </div>
    </section>


    <?php

$med_help_title = get_field('med_help_title');

$med_help_description = get_field('med_help_description');

$med_help_image = get_field('med_help_image');

?>

<section class="med-help p-0" style="margin-top: 23px; margin-bottom: 40px;">

<div class="container">

    <div class="row">

        <div class="col-md-6 col-12">

            <h1 class="title title-main"><?php if($med_help_title){ echo $med_help_title; } ?></h1>

            <div class="description description-main">

                <?php if($med_help_description){ echo $med_help_description; } ?>

            </div>

        </div>

        <div class="col-md-6 col-12">

            <div class="image">

                <?php 

                    if($med_help_image){

                        echo '<img src="'.$med_help_image.'" />';

                    }

                ?>

            </div>

        </div>

    </div>

</div>

</section>

    <!-- End Why Us Section -->

    <?php

$med_work_title = get_field('medhotline_work_title');

$med_work_field = get_field('medhotline_work_field');

$medhotline_work_button_link = get_field('medhotline_work_button_link');

$medhotline_work_button_text = get_field('medhotline_work_button_text');

?>

<div class="med-function2">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-12"><h1 class="title title-main"><?php if($med_work_title){ echo $med_work_title; }?></h1></div>

    </div>

    <?php

        if($med_work_field){

            foreach($med_work_field as $med_work){

                echo '<div class="work-column">';

                if($med_work['medhotline_work_number']){

                    echo '<img src="'.$med_work['medhotline_work_number'].'" />';

                }

                if($med_work['medhotline_work_description']){

                    echo $med_work['medhotline_work_description'];

                }

                echo '</div>';

            }

        }

        if($medhotline_work_button_link){

            echo '<div class="row"><div class="col-md-12 col-12 text-right"><a href="'.$medhotline_work_button_link.'" class="btn-get-started">'.$medhotline_work_button_text.'</a></div></div>';

        }

    ?>

</div>

</div>

<!-- Med function -->

<!-- Product Package -->
<div class="product-package">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-12">

            <h1 class="title title-main">Preise</h1>

        </div>

    </div>

    <div class="row">

        <?php echo do_shortcode('[list_product]'); ?>

    </div>

</div>

</div>

<!-- End Product Package -->

<!-- Sie wollen sich später entscheiden? -->

<?php
        $register_image = get_field('register_image');
        $register_title = get_field('register_title');
        $register_content = get_field('register_content');
        $register_icons_instagram = get_field('register_icons_instagram');
        $register_icons_facebook = get_field('register_icons_facebook');
        $add_register_ctf = get_field('add_register_ctf');
    ?>

    <div class="register-address" style="background-image: url('<?php echo $register_image; ?>')">
        <div class="container">
            <div class="row">
                    <div class="col-md-6 col-6">
                        <div class="register-content">
                            <?php
                                if($register_title){
                                    echo '<h2 class="register_title">'.$register_title.'</h2>';
                                }
                                if($register_content){
                                    echo '<div class="register_content">'.$register_content.'</div>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="register_information">
                            <div class="register_mail">
                                <?php
                                    if($add_register_ctf){
                                        echo $add_register_ctf;
                                    }
                                ?>
                            </div>
                            <div class="register_icons">
                                <div class="row">
                                    <div class="icons_1">
                                        <?php
                                            if($register_icons_instagram){
                                                echo '<img src="' .$register_icons_instagram. '">';
                                            } 
                                        ?>
                                    </div>
                                    <div class="icons_2">
                                        <?php
                                            if($register_icons_facebook){
                                                echo '<img src="' .$register_icons_facebook. '">';
                                            } 
                                        ?>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    

<!-- End Sie wollen sich später entscheiden? -->


<?php

    $bg_download_default = get_stylesheet_directory_uri() . '/assets/images/download.png';

    $bg_download_der_app = get_field('background_download_der_app','option');

    $title_download_der_app = get_field('title_download_der_app','option');

    $download_google_play = get_field('download_google_play','option');

    $download_app_store = get_field('download_app_store','option');

    $download_button_link = get_field('download_button_link','option');

    $download_button_text = get_field('download_button_text','option');

?>

<div class="hero download" style="background-image:url('<?php if($bg_download_der_app){ echo $bg_download_der_app; }else{ echo $bg_download_default; } ?>');">

    <div class="container">   

        <div class="wrap"> 

            <div class="row">

                <div class="col-md-12 col-12">

                    <?php

                        if($title_download_der_app){

                            echo '<h1 class="title title-main">'.$title_download_der_app.'</h1>';

                        }

                    ?>

                </div>

            </div>

            <div class="row">

                <?php

                    if($download_google_play){

                        foreach($download_google_play as $download_gg_field){

                            if($download_gg_field['link']){

                                echo '<div class="col-md-2 col-12"><a class="app" href="'.$download_gg_field['link'].'"><img src="'.$download_gg_field['image'].'"></a></div>';

                            }

                        }

                    }

                    if($download_app_store){

                        foreach($download_app_store as $download_app_field){

                            if($download_app_field['link']){

                                echo '<div class="col-md-2 col-12"><a class="app" href="'.$download_app_field['link'].'"><img src="'.$download_app_field['image'].'"></a></div>';

                            }

                        }

                    }

                ?>

            </div>

            <?php

                if($download_button_link){

                    echo '<a href="'.$download_button_link.'" class="btn-get-started">'.$download_button_text.'</a>';

                }

            ?>

        </div>

    </div>

</div>

<!-- Download der App -->


<?php
        $title_form = get_field('title_form');
        $description_form = get_field('description_form');
        $ctf_shortcode_form = get_field('add_shortcode_ctf');
    ?>
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <?php
                        if($title_form){
                            echo '<div class="title-main">'.$title_form.'</div>';
                        }
                        if($description_form){
                            echo '<div class="note">'.$description_form.'</div>';
                        }
                        if($ctf_shortcode_form){
                            echo $ctf_shortcode_form;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div> 
    <!-- Contact Form  -->



</main>



<?php get_footer('no-review'); ?>

