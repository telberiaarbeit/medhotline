<?php
/**
 * Template Name: Beratung
 *
**/
get_header();
$beratung_med_help_title = get_field('med_help_title');
$beratung_med_help_description = get_field('med_help_description');
$beratung_med_help_image = get_field('med_help_image');
?>
<main id="site-content" class="beratung">
    <div class="container">
        <div class="hero-section">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <?php
                        if($beratung_med_help_title){
                            echo '<h1 class="title-page m-0">'.$beratung_med_help_title.'</h1>';
                        }
                        if($beratung_med_help_description){
                            echo $beratung_med_help_description;
                        }
                    ?>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <?php
                        if($beratung_med_help_image){
                            echo '<img src="'.$beratung_med_help_image.'" alt="beratung_image" class="border-16" />';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Hero Section -->
        <?php
            $beratung_title_form = get_field('title_form');
            $beratung_description_form = get_field('description_form');
            $beratung_ctf_shortcode_form = get_field('add_shortcode_ctf');
        ?>
        <div class="contact-form">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <?php
                        if($beratung_title_form){
                            echo '<div class="title-main">'.$beratung_title_form.'</div>';
                        }
                        if($beratung_description_form){
                            echo '<div class="note">'.$beratung_description_form.'</div>';
                        }
                        if($beratung_ctf_shortcode_form){
                            echo $beratung_ctf_shortcode_form;
                        }
                    ?>
                </div>
            </div>
        </div> 
        <!-- Contact Form  -->
    </div>
</main>
<?php get_footer('no-review'); ?>