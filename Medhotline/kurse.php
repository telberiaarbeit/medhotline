<?php
/**
* Template Name: Kurse
*
**/
get_header();
$kurse_hero_title = get_field('title_page');
$kurse_hero_description = get_field('description_hero');
$training_class_image = get_field('training_class_image');
$biker_image = get_field('biker_image');
$kurse_register_form = get_field('register_form');
?>
<main id="site-content">
    <div class="kurse">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <?php
                    if($kurse_hero_title){
                    echo '<h1 class="title-page d-none d-lg-block">'.$kurse_hero_title.'</h1>';
                    }
                    ?>
                </div>
            </div>
            <!-- Title Page -->
            <div class="hero-section">
                <div class="row">
                    <div class="col-lg-9 col-sm-7 col-12">
                        <div class="col-md-12 col-12 kurs-title-mobile">
                            <h1 class="title-page d-block d-lg-none">Lernen Sie helfen</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <?php
                                if($kurse_hero_description){
                                echo $kurse_hero_description;
                                }
                                ?>
                            </div>
                            <div class="col-lg-7 col-12">
                                <?php
                                if($training_class_image){
                                echo '<img class="training-image border-16" src="'.$training_class_image.'" alt="training_class_image" />';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-12">
                        <?php
                        if($biker_image){
                        echo '<img class="biker-image border-16" src="'.$biker_image.'" alt="biker_image" />';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Hero Section -->
            <?php
            $remote_area_title = get_field('title_remote_areas');
            $remote_area_img = get_field('image_remote_areas');
            $remote_area_content = get_field('content_remote_areas');
            $course_title = get_field('course_title');
            $course_content = get_field('course_content');
            $course_date = get_field('date');
            $course_duration = get_field('duration');
            $course_cost = get_field('cost');
            $course_location = get_field('course_location');
            // $course_register_button_link = get_field('register_button_link');
            $course_register_button_text = get_field('register_button_text');
            $course_date_img = get_stylesheet_directory_uri() . '/assets/images/calendar.png';
            $course_duration_img = get_stylesheet_directory_uri() . '/assets/images/lock.png';
            $course_cost_img = get_stylesheet_directory_uri() . '/assets/images/dollar.png';
            ?>
            <div class="remote-areas d-none d-lg-block">
                <div class="title-section">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <?php
                            if($remote_area_title){
                            echo '<h2 class="title-underline">'.$remote_area_title.'</h2>';
                            // echo '<div class="border-underline"></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="description-section">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <?php
                            if($remote_area_img){
                            echo '<img class="border-16" src="'.$remote_area_img.'" alt="remote_area_img" />';
                            }
                            ?>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="content">
                                <?php
                                if($remote_area_content){
                                echo $remote_area_content;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <?php
                            if($course_title){
                            echo '<h3 class="sub-title">'.$course_title.'</h3>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Course title -->
                    <div class="list-course">
                        <div class="row">
                            <?php
                            if($course_content){
                            foreach($course_content as $course_single){
                            echo '<div class="col-lg-4 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$course_single['name_course'].'</p></div></div>';
                            }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- List course -->
                    <div class="date-time">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <?php
                                if($course_date){
                                echo '<div class="infor date"><img class="d-inline" src="'.$course_date_img.'" alt="course_date_img"/><span class="d-inline">Daten: <strong>'.$course_date.'</strong></span></div>';
                                }
                                if($course_duration){
                                echo '<div class="infor duration"><img class="d-inline" src="'.$course_duration_img.'" alt="course_duration_img"/><span class="d-inline">Kursdauer: <strong>'.$course_duration.' h</strong></span></div>';
                                }
                                if($course_cost){
                                echo '<div class="infor cost"><img class="d-inline" src="'.$course_cost_img.'" alt="course_cost_img"/><span class="d-inline">Kosten:<strong> € '.$course_cost.'</strong></span></div>';
                                }
                                ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <?php
                                if($course_location){
                                echo '<div class="location">'.$course_location.'</div>';
                                }
                                ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div id="accordion" class="accordion">
                                    <div id="headingOne">
                                        <button class="btn-get-started" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php
                                        if($course_register_button_text){
                                        echo $course_register_button_text;
                                        }
                                        ?>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="contact-form register-popup">
                                            <button type="button" class="close" data-toggle="collapse" data-target="#collapseOne" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php
                                            if($kurse_register_form){
                                            echo $kurse_register_form;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Date Time -->
                </div>
                <!-- Course -->
                
            </div>
            <div class="remote-areas d-block d-lg-none">
                <div class="title-section">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <?php
                            if($remote_area_title){
                            echo '<h2 class="title-underline">'.$remote_area_title.'</h2>';
                            // echo '<div class="border-underline"></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="description-section">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <?php
                                if($remote_area_img){
                                echo '<img class="border-16" src="'.$remote_area_img.'" alt="remote_area_img" />';
                                }
                                ?>
                                <?php
                                if($remote_area_content){
                                echo $remote_area_content;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <?php
                            if($course_title){
                            echo '<h3 class="sub-title">'.$course_title.'</h3>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Course title -->
                    <div class="list-course">
                        <div class="row">
                            <?php
                            if($course_content){
                            foreach($course_content as $course_single){
                            echo '<div class="col-lg-4 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$course_single['name_course'].'</p></div></div>';
                            }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- List course -->
                    <div class="date-time">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <?php
                                if($course_date){
                                echo '<div class="infor date"><img class="d-inline" src="'.$course_date_img.'" alt="course_date_img"/><span class="d-inline">Daten: <strong>'.$course_date.'</strong></span></div>';
                                }
                                if($course_duration){
                                echo '<div class="infor duration"><img class="d-inline" src="'.$course_duration_img.'" alt="course_duration_img"/><span class="d-inline">Kursdauer: <strong>'.$course_duration.' h</strong></span></div>';
                                }
                                if($course_cost){
                                echo '<div class="infor cost"><img class="d-inline" src="'.$course_cost_img.'" alt="course_cost_img"/><span class="d-inline">Kosten:<strong> € '.$course_cost.'</strong></span></div>';
                                }
                                ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <?php
                                if($course_location){
                                echo '<div class="location">'.$course_location.'</div>';
                                }
                                ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div id="accordion" class="accordion">
                                    <div id="headingOne">
                                        <button class="btn-get-started" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php
                                        if($course_register_button_text){
                                        echo $course_register_button_text;
                                        }
                                        ?>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="contact-form register-popup">
                                            <button type="button" class="close" data-toggle="collapse" data-target="#collapseOne" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php
                                            if($kurse_register_form){
                                            echo $kurse_register_form;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Date Time -->
                </div>
                <!-- Course -->
                
            </div>
        </div>
    </div>
    <!-- kurse -->
    <?php
    $grundkurs_16_title = get_field('title_grundkurs_16');
    $grundkurs_16_img = get_field('image_grundkurs_16');
    $grundkurs_16_content = get_field('content_grundkurs_16');
    $grundkurs_16_sub_title = get_field('kursinhalte_title_grundkurs_16');
    $grundkurs_16_course = get_field('course_grundkurs_16');
    $grundkurs_16_date = get_field('date_grundkurs_16');
    $grundkurs_16_duration = get_field('duration_grundkurs_16');
    $grundkurs_16_cost = get_field('cost_grundkurs_16');
    $grundkurs_16_course_location = get_field('course_location_grundkurs_16');
    // $grundkurs_16_register_bt_link = get_field('register_button_link_grundkurs_16');
    $grundkurs_16_register_bt_text = get_field('register_button_text_grundkurs_16');
    ?>
    <div class="course-16 p-75">
        <div class="container">
            <div class="title-section">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($grundkurs_16_title){
                        echo '<h2 class="title-underline">'.$grundkurs_16_title.'</h2>';
                        // echo '<div class="border-underline"></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Title section -->
            <div class="description-section">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <?php
                        if($grundkurs_16_img){
                        echo '<img class="border-16" src="'.$grundkurs_16_img.'" alt="grundkurs_16" />';
                        }
                        ?>
                    </div>
                    <div class="col-md-7 col-12 d-flex align-items-center">
                        <div class="content">
                            <?php
                            if($grundkurs_16_content){
                            echo $grundkurs_16_content;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Description section  -->
            <div class="course">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($grundkurs_16_sub_title){
                        echo '<h3 class="sub-title">'.$grundkurs_16_sub_title.'</h3>';
                        }
                        ?>
                    </div>
                </div>
                <div class="list-course">
                    <div class="row">
                        <?php
                        if($grundkurs_16_course){
                        foreach($grundkurs_16_course as $grundkurs_16_single){
                        echo '<div class="col-lg-4 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$grundkurs_16_single['name_course_grundkurs_16'].'</p></div></div>';
                        }
                        }
                        ?>
                    </div>
                </div>
                <!-- List course -->
                <div class="date-time">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <?php
                            if($grundkurs_16_date){
                            echo '<div class="infor date"><img class="d-inline" src="'.$course_date_img.'" alt="course_date_img"/><span class="d-inline">Daten: <strong>'.$grundkurs_16_date.'</strong></span></div>';
                            }
                            if($grundkurs_16_duration){
                            echo '<div class="infor duration"><img class="d-inline" src="'.$course_duration_img.'" alt="course_duration_img"/><span class="d-inline">Kursdauer: <strong>'.$grundkurs_16_duration.' h</strong></span></div>';
                            }
                            if($grundkurs_16_cost){
                            echo '<div class="infor cost"><img class="d-inline" src="'.$course_cost_img.'" alt="course_cost_img"/><span class="d-inline">Kosten:<strong> € '.$grundkurs_16_cost.'</strong></span></div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <?php
                            if($grundkurs_16_course_location){
                            echo '<div class="location">'.$grundkurs_16_course_location.'</div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div id="accordiontwo" class="accordion">
                                <div id="headingTwo">
                                    <button class="btn-get-started" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <?php
                                    if($grundkurs_16_register_bt_text){
                                    echo $grundkurs_16_register_bt_text;
                                    }
                                    ?>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordiontwo">
                                    <div class="contact-form register-popup">
                                        <button type="button" class="close" data-toggle="collapse" data-target="#collapseTwo" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php
                                        if($kurse_register_form){
                                        echo $kurse_register_form;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Date Time -->
            </div>
        </div>
    </div>
    <!-- Course 16 -->
    <?php
    $grundkurs_6_title = get_field('title_grundkurs_6');
    $grundkurs_6_img = get_field('image_grundkurs_6');
    $grundkurs_6_content = get_field('content_grundkurs_6');
    $grundkurs_6_date = get_field('date_grundkurs_6');
    $grundkurs_6_duration = get_field('duration_grundkurs_6');
    $grundkurs_6_cost = get_field('cost_grundkurs_6');
    $grundkurs_6_location = get_field('location_grundkurs_6');
    // $grundkurs_6_register_button_link = get_field('register_button_link_grundkurs_6');
    $grundkurs_6_register_button_text = get_field('register_button_text_grundkurs_6');
    ?>
    <div class="course course-6 p-75">
        <div class="container">
            <div class="title-section">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($grundkurs_6_title){
                        echo '<h2 class="title-underline">'.$grundkurs_6_title.'</h2>';
                        // echo '<div class="border-underline"></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Title Section -->
            <div class="description-section">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <?php
                        if($grundkurs_6_img){
                        echo '<img class="border-16" src="'.$grundkurs_6_img.'" alt="grundkurs_6" />';
                        }
                        ?>
                    </div>
                    <div class="col-md-7 col-12 d-flex align-items-center">
                        <div class="content">
                            <?php
                            if($grundkurs_6_content){
                            echo $grundkurs_6_content;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Description Section -->
            <div class="date-time">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <?php
                        if($grundkurs_6_date){
                        echo '<div class="infor date"><img class="d-inline" src="'.$course_date_img.'" alt="course_date_img"/><span class="d-inline">Daten: <strong>'.$grundkurs_6_date.'</strong></span></div>';
                        }
                        if($grundkurs_6_duration){
                        echo '<div class="infor duration"><img class="d-inline" src="'.$course_duration_img.'" alt="course_duration_img"/><span class="d-inline">Kursdauer: <strong>'.$grundkurs_6_duration.' h</strong></span></div>';
                        }
                        if($grundkurs_6_cost){
                        echo '<div class="infor cost"><img class="d-inline" src="'.$course_cost_img.'" alt="course_cost_img"/><span class="d-inline">Kosten:<strong> € '.$grundkurs_6_cost.'</strong></span></div>';
                        }
                        ?>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <?php
                        if($grundkurs_6_location){
                        echo '<div class="location">'.$grundkurs_6_location.'</div>';
                        }
                        ?>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <div id="accordionthree" class="accordion">
                            <div id="headingThree">
                                <button class="btn-get-started" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <?php
                                if($grundkurs_16_register_bt_text){
                                echo $grundkurs_16_register_bt_text;
                                }
                                ?>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionthree">
                                <div class="contact-form register-popup">
                                    <button type="button" class="close" data-toggle="collapse" data-target="#collapseThree" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php
                                    if($kurse_register_form){
                                    echo $kurse_register_form;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Date Time -->
        </div>
    </div>
    <!-- Course 6 -->
    <?php
    $kindern_title = get_field('title_kindern');
    $kindern_img = get_field('image_kindern');
    $kindern_content = get_field('content_kindern');
    $kindern_sub_title = get_field('kursinhalte_title_kindern');
    $kindern_courses = get_field('kursinhalte_course_kindern');
    $kindern_date = get_field('date_kindern');
    $kindern_duration = get_field('duration_kindern');
    $kindern_cost = get_field('cost_kindern');
    $kindern_location = get_field('location_kindern');
    // $kindern_register_button_link = get_field('register_button_link_kindern');
    $kindern_register_button_text = get_field('register_button_text_kindern');
    ?>
    <div class="course-16 kindern p-75">
        <div class="container">
            <div class="title-section">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($kindern_title){
                        echo '<h2 class="title-underline">'.$kindern_title.'</h2>';
                        // echo '<div class="border-underline"></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Title Section -->
            <div class="description-section">
                <div class="row">
                    <div class="col-lg-5 col-md-7 col-12">
                        <?php
                        if($kindern_img){
                        echo '<img class="border-16" src="'.$kindern_img.'" alt="kindern_img" />';
                        }
                        ?>
                    </div>
                    <div class="col-lg-7 col-md-5 col-12 d-flex align-items-center">
                        <div class="content">
                            <?php
                            if($kindern_content){
                            echo $kindern_content;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Description Section -->
            <div class="course">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($kindern_sub_title){
                        echo '<h3 class="sub-title">'.$kindern_sub_title.'</h3>';
                        }
                        ?>
                    </div>
                </div>
                <div class="list-course">
                    <div class="row">
                        <?php
                        if($kindern_courses){
                        foreach($kindern_courses as $key => $kindern_course){
                        // echo '<div class="col-lg-4 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$kindern_course['name_course_kindern'].'</p></div></div>';
                        if ($key == 7 || $key == 6) {
                        echo '<div class="col-lg-6 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$kindern_course['name_course_kindern'].'</p></div></div>';
                        } else {
                        echo '<div class="col-lg-4 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$kindern_course['name_course_kindern'].'</p></div></div>';
                        }
                        }
                        }
                        ?>
                    </div>
                </div>
                <!-- List Course -->
                <div class="date-time">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <?php
                            if($kindern_date){
                            echo '<div class="infor date"><img class="d-inline" src="'.$course_date_img.'" alt="course_date_img"/><span class="d-inline">Daten: <strong>'.$kindern_date.'</strong></span></div>';
                            }
                            if($kindern_duration){
                            echo '<div class="infor duration"><img class="d-inline" src="'.$course_duration_img.'" alt="course_duration_img"/><span class="d-inline">Kursdauer: <strong>'.$kindern_duration.' h</strong></span></div>';
                            }
                            if($kindern_cost){
                            echo '<div class="infor cost"><img class="d-inline" src="'.$course_cost_img.'" alt="course_cost_img"/><span class="d-inline">Kosten:<strong> € '.$kindern_cost.'</strong></span></div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <?php
                            if($kindern_location){
                            echo '<div class="location">'.$kindern_location.'</div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div id="accordionfour" class="accordion">
                                <div id="headingFour">
                                    <button class="btn-get-started" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <?php
                                    if($kindern_register_button_text){
                                    echo $kindern_register_button_text;
                                    }
                                    ?>
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionfour">
                                    <div class="contact-form register-popup">
                                        <button type="button" class="close" data-toggle="collapse" data-target="#collapseFour" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php
                                        if($kurse_register_form){
                                        echo $kurse_register_form;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Date Time -->
            </div>
            <!-- Course -->
        </div>
    </div>
    <!-- Kindern -->
    <?php
    $diver_title = get_field('title_diver');
    $diver_img = get_field('image_diver');
    $diver_content = get_field('content_diver');
    $diver_sub_title = get_field('kursinhalte_title_diver');
    $diver_courses = get_field('course_diver');
    $diver_packages = get_field('diver_packages');
    $diver_date = get_field('date_diver');
    $diver_duration = get_field('duration_diver');
    $diver_cost = get_field('cost_diver');
    $diver_location = get_field('location_diver');
    // $diver_register_button_link = get_field('register_button_link_diver');
    $diver_register_button_text = get_field('register_button_text_diver');
    ?>
    <div class="diver p-75">
        <div class="container">
            <div class="title-section">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($diver_title){
                        echo '<h2 class="title-underline">'.$diver_title.'</h2>';
                        // echo '<div class="border-underline"></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Title Section -->
            <div class="description-section d-none d-lg-block">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <?php
                        if($diver_img){
                        echo '<img class="border-16" src="'.$diver_img.'" alt="diver_img" />';
                        }
                        ?>
                    </div>
                    <div class="col-md-7 col-12 d-flex align-items-center">
                        <div class="content">
                            <?php
                            if($diver_content){
                            echo $diver_content;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description-section d-block d-lg-none">
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <div class="content">
                            <?php
                            if($diver_img){
                            echo '<img class="border-16" src="'.$diver_img.'" alt="diver_img" />';
                            }
                            ?>
                            <?php
                            if($diver_content){
                            echo $diver_content;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Description Section -->
            <div class="course">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                        if($diver_sub_title){
                        echo '<h3 class="sub-title">'.$diver_sub_title.'</h3>';
                        }
                        ?>
                    </div>
                </div>
                <div class="list-course">
                    <div class="row">
                        <?php
                        if($diver_courses){
                        foreach($diver_courses as $diver_course){
                        echo '<div class="col-lg-4 col-md-6 col-12"><div class="single-course border-32"><span class="circle"></span><p class="name">'.$diver_course['diver_pack_title'].'</p></div></div>';
                        }
                        }
                        ?>
                    </div>
                </div>
                <!-- List Course -->
                <div class="driver-package">
                    <div class="row">
                        <?php
                        if($diver_packages){
                        foreach($diver_packages as $diver_package){
                        echo '<div class="col-lg-6 col-12">';
                            echo '<div class="diver-single">';
                                echo '<div class="row">';
                                    if($diver_package['icon']){
                                    echo '<div class="col-md-2">';
                                        echo '<div class="icon">';
                                            echo '<img src="'.$diver_package['icon'].'" />';
                                        echo '</div>';
                                    echo '</div>';
                                    }
                                    if($diver_package['name_diver_package']){
                                    echo '<div class="col-md-10">';
                                        echo '<div class="content-package">';
                                            echo '<h3 class="sub-title">'.$diver_package['name_diver_package'].'</h3>';
                                            echo $diver_package['description_diver_package'];
                                        echo '</div>';
                                    echo '</div>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        }
                        }
                        ?>
                    </div>
                </div>
                <!-- Driver Package -->
                <div class="date-time">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <?php
                            if($diver_date){
                            echo '<div class="infor date"><img class="d-inline" src="'.$course_date_img.'" alt="course_date_img"/><span class="d-inline">Daten: <strong>'.$diver_date.'</strong></span></div>';
                            }
                            if($diver_duration){
                            echo '<div class="infor duration"><img class="d-inline" src="'.$course_duration_img.'" alt="course_duration_img"/><span class="d-inline">Kursdauer: <strong>'.$diver_duration.' h</strong></span></div>';
                            }
                            if($diver_cost){
                            echo '<div class="infor cost"><img class="d-inline" src="'.$course_cost_img.'" alt="course_cost_img"/><span class="d-inline">Kosten:<strong> € '.$diver_cost.'</strong></span></div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <?php
                            if($diver_location){
                            echo '<div class="location">'.$diver_location.'</div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div id="accordionfive" class="accordion">
                                <div id="headingFive">
                                    <button class="btn-get-started" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <?php
                                    if($diver_register_button_text){
                                    echo $diver_register_button_text;
                                    }
                                    ?>
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionfive">
                                    <div class="contact-form register-popup">
                                        <button type="button" class="close" data-toggle="collapse" data-target="#collapseFive" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php
                                        if($kurse_register_form){
                                        echo $kurse_register_form;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Date Time -->
            </div>
            <!-- Course -->
        </div>
    </div>
    <!-- Diver -->
</main>
<?php get_footer('no-review'); ?>