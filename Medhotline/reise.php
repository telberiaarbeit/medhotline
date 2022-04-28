<?php
/**
* *
* Template Name: Reise
* *
**/
get_header();
$reise_help_title = get_field('med_help_title');
$reise_help_description = get_field('med_help_description');
$reise_help_image = get_field('med_help_image');
$reise_partner_title = get_field('partner_title');
$reise_partners_extra = get_field('partners_extra');
$reise_title_safely = get_field('title_safely');
$reise_description_safely = get_field('description_safely');
$reise_image_safely = get_field('image_safely');
?>
<main id="site-content" class="reise">
    <div class="container">
        <div class="hero-section">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php
                        if($reise_help_title){
                            echo '<h1 class="title-page m-0">'.$reise_help_title.'</h1>';
                        }
                        if($reise_help_description){
                            echo $reise_help_description;
                        }
                    ?>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php
                        if($reise_help_image){
                            echo '<img src="'.$reise_help_image.'" alt="reise_help_image" class="border-16"/>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Hero Section -->
        <div class="our-partner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm col-12">
                    <?php
                        if($reise_partner_title){
                            echo '<div class="sub-title"><h2>'.$reise_partner_title.'</h2></div>';
                        }
                    ?>
                </div>
            </div>
            <div class="list-partner">
                <div class="row">
                    <?php
                        if($reise_partners_extra){
                            foreach($reise_partners_extra as $partner_extra){
                                echo '<div class="col-lg-4 col-md-12 col-sm-12 col-12">';
                                    echo '<div class="single-partner">';
                                        echo '<a href="'.$partner_extra['link'].'"><img src="'.$partner_extra['image'].'" /></a>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Our partners -->
        <div class="safety">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <?php
                        if($reise_title_safely){
                            echo '<div class="sub-title">';
                                echo '<h2>'.$reise_title_safely.'</h2>';
                            echo '</div>';
                        }
                        if($reise_description_safely){
                            echo $reise_description_safely;
                        }
                    ?>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <?php
                        if($reise_image_safely){
                            echo '<img src="'.$reise_image_safely.'" alt="reise_safety_image" class="border-16"/>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Safety -->
    </div>
</main>
<?php get_footer('no-review'); ?>