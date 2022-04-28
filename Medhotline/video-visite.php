<?php
/**
 * Template Name: Video Visite
 *
**/
get_header();
$video_med_help_title = get_field('med_help_title');
$video_med_help_description = get_field('med_help_description');
$video_med_help_image = get_field('med_help_image');
$video_group_contact_medhotline = get_field('group_contact_medhotline');
$video_sub_title_section = get_field('sub_title_section');
$video_image_section = get_field('image_section');
$video_content_left = get_field('content_left');
$video_content_right = get_field('content_right');
?>
<main id="site-content" class="video-visite">
    <div class="container">
        <div class="hero-section">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php
                        if($video_med_help_title){
                            echo '<h1 class="title-page m-0">'.$video_med_help_title.'</h1>';
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <?php
                        if($video_med_help_description){
                            echo $video_med_help_description;
                        }
                    ?>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <?php
                        if($video_med_help_image){
                            echo '<img src="'.$video_med_help_image.'" alt="video_visite_image" class="border-16" />';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Hero Section -->
        <div class="list-course">
            <div class="row">
                <?php
                    if($video_group_contact_medhotline){
                        foreach($video_group_contact_medhotline as $single_video){
                            echo '<div class="col-lg-4 col-md-6 col-sm-6 col-12">';
                                echo '<div class="single-course border-32">';
                                    if($single_video['image_number']){
                                        echo '<img src="'.$single_video['image_number'].'"  alt="single_contact_medhotline"/>';
                                    }
                                    if($single_video['name_contact']){
                                        echo '<p class="name">'.$single_video['name_contact'].'</p>'; 
                                    }
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
        <!-- List Course -->
        <div class="eyes-ears">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <?php
                        if($video_sub_title_section){
                            echo '<div class="sub-title"><h2>'.$video_sub_title_section.'</h2></div>';
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <?php
                        if($video_content_left){
                            echo '<div class="content-left">'.$video_content_left.'</div>';
                        }
                    ?>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <?php
                        if($video_image_section){
                            echo '<img class="img-section" src="'.$video_image_section.'" alt="video-image" />';
                        }
                        if($video_content_right){
                            echo '<div class="content-right">'.$video_content_right.'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Eyes Ears -->
    </div>
</main>
<?php get_footer('no-review'); ?>