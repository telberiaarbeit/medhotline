<?php

/**

 * Template Name: Fallbeispiele

 *

**/

get_header();

$case_studies = get_field('case_studies');

$sub_case_studies = get_field('sub_case_studies');

?>

<main id="site-content" class="fallbeispiele">

    <div class="container">

        <div class="row d-block">

            <div class="col-lg-12 col-sm-12 col-md-12 col-12"><h1 class="title-page m-0"><?php echo get_the_title(); ?></h1></div>

        </div>

        <?php

            if($case_studies){

                foreach($case_studies as $case){

                    echo '<div class="row">';

                        echo '<div class="col-lg-5 col-sm-12 col-md-12 col-12">';

                            if($case['title']){

                                echo '<div class="sub-title"><h2>'.$case['title'].'</h2></div>';

                            }

                            if($case['description']){

                                echo '<div class="content-top description mw-440">'.$case['description'].'</div>';

                            }

                        echo '</div>';

                        echo '<div class="col-lg-7 col-sm-12 col-md-12 col-12">';

                            if($case['image']){

                                echo '<img src="'.$case['image'].'" alt="case studies" class="border-16" />';

                            }

                        echo '</div>';

                        if($case['sub_case_studies']){

                            echo '<div class="col-lg-12 col-sm-12 col-md-12 col-12 sub-case">';

                                echo '<div class="row">';

                                    foreach($case['sub_case_studies'] as $sub_case){

                                        echo '<div class="col-lg-6 col-sm-12 col-md-12 col-12 sub_content">';

                                            if($sub_case['sub_title']){

                                                echo '<div class="sub-title"><h2>'.$sub_case['sub_title'].'</h2></div>';

                                            }

                                            if($sub_case['sub_description']){

                                                echo '<div class="mw-440 description">'.$sub_case['sub_description'].'</div>';

                                            }

                                        echo '</div>';

                                    }

                                echo '</div>';

                            echo '</div>';

                        }

                    echo '</div>';

                }

            }

        ?>

    </div>

</main>

<?php get_footer('no-review'); ?>