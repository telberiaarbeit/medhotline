<?php
/**
 * Template Name: Uber uns
 *
 **/
get_header();
$title_contact_med = get_field('title_contact_medhotline');
$group_contact_medhotline = get_field('group_contact_medhotline');
$med_help_title = get_field('med_help_title');
$med_help_description = get_field('med_help_description');
$med_help_image = get_field('med_help_image');
$sub_group_contact_medhotline = get_field('sub_group_contact_medhotline');
?>
<main id="site-content" class="uber-uns">
    <div class="container">
        <div class="hero-section">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <?php
                        if($med_help_title){
                            echo '<h1 class="title-page">'.$med_help_title.'</h1>';
                        }
                        if($med_help_description){
                            echo $med_help_description;
                        }
                    ?>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <?php
                        if($med_help_image){
                            echo '<img src="'.$med_help_image.'" alt="med_help_image" class="border-16"/>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="title-section">
            <div class="row">
                <div class="col-md-12 col-12">
                    <?php
                        if($title_contact_med){
                            echo '<div class="sub-title"><h2>'.$title_contact_med.'</h2></div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Title Section -->
        <div class="list-course">
            <div class="row">
                <?php
                    if($group_contact_medhotline){
                        foreach($group_contact_medhotline as $single_contact_medhotline){
                            echo '<div class="col-lg-4 col-md-6 col-sm-6 col-12">';
                                echo '<div class="single-course border-32">';
                                    if($single_contact_medhotline['image_number']){
                                        echo '<img src="'.$single_contact_medhotline['image_number'].'"  alt="single_contact_medhotline"/>';
                                    }
                                    if($single_contact_medhotline['name_contact']){
                                        echo '<p class="name">'.$single_contact_medhotline['name_contact'].'</p>'; 
                                    }
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
            <div class="row">
                <?php
                    if($sub_group_contact_medhotline){
                        foreach($sub_group_contact_medhotline as $sub_group){
                            echo '<div class="sub_group col-lg-4 col-md-6 col-sm-6 col-12">';
                                echo '<div class="single-course border-32">';
                                    if($sub_group['name_sub_contact']){
                                        echo '<p class="name">'.$sub_group['name_sub_contact'].'</p>'; 
                                    }
                                echo '</div>';
                            echo '</div>';
                            
                        }
                    }
                ?>
            </div>
        </div>
        <!-- List Course -->
    </div>
</main>
<?php get_footer('no-review'); ?>