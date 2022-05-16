<?php

/**

 * Template Name: Home Page

 *

**/

get_header();

    $bg_default = get_stylesheet_directory_uri() . '/assets/images/portrait-doctor-1.png';

    $bg_image = get_field('background_image');

    $bg_image_tablet = get_field('background_image_tablet');

    $bg_image_mobile = get_field('background_image_mobile');

    $title = get_field('title');

    $content = get_field('content');

    $link_button = get_field('link_button');

    $text_button = get_field('text_button');

?>

<main id="site-content">

    <div class="hero d-lg-block d-md-none d-lg-flex" style="background-image:url('<?php if($bg_image){ echo $bg_image; }else{ echo $bg_default; } ?>');">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

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

    <!-- Hero Desktop -->

    <div class="hero hero-tablet d-lg-none d-md-block d-md-flex" style="background-image:url('<?php if($bg_image_tablet){ echo $bg_image_tablet; }else{ echo $bg_default; } ?>');">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

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

    <div class="hero hero-mobile d-lg-none d-md-block d-md-flex" style="background-image:url('<?php if($bg_image_mobile){ echo $bg_image_mobile; }else{ echo $bg_default; } ?>');display:none;">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

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

    <!-- Hero Tablet -->

    <?php

        $med_work_title = get_field('medhotline_work_title');

        $med_work_field = get_field('medhotline_work_field');

        $medhotline_work_button_link = get_field('medhotline_work_button_link');

        $medhotline_work_button_text = get_field('medhotline_work_button_text');

    ?>

    <div class="med-function">

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

    <?php

        $service_title = get_field('service_offers_title');

        $service_offers = get_field('service_offers');

    ?>

    <div class="we-offer">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-12"><h1 class="title title-main"><?php if($service_title){ echo $service_title; }?></h1></div>

            </div>

                <?php

                    if($service_offers){

                        foreach($service_offers as $service_offer){

                            echo '<div class="row">';

                                echo '<div class="col-lg-6 col-md-12 col-sm-12 col-12">';

                                    echo '<div class="service-content">';

                                        if($service_offer['service_title']){

                                            echo '<div class="sub-title"><h2>'.$service_offer['service_title'].'</h2></div>';

                                        }

                                        if($service_offer['service_content']){

                                            echo '<div class="content">'.$service_offer['service_content'].'</div>';

                                        }

                                        if($service_offer['service_button_link']){

                                            echo '<a href="'.$service_offer['service_button_link'].'" class="btn-get-started">'.$service_offer['service_button_text'].'</a>';

                                        }

                                    echo '</div>';

                                echo '</div>';

                                echo '<div class="col-lg-6 col-md-12 col-sm-12 col-12">';

                                    echo '<div class="service-feature">';

                                        if($service_offer['service_feature_image']){

                                            echo '<img src="'.$service_offer['service_feature_image'].'" alt="service_feature_image">';

                                        }

                                    echo '</div>';

                                echo '</div>';

                            echo '</div>';

                        }

                    }

                ?>

        </div>

    </div>

    <!-- We offer -->

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

    <!-- Product Package -->

    <?php

        $faq_title_section = get_field('faq_title_section');

        $faq_button_link = get_field('faq_button_link');

        $faq_button_text = get_field('faq_button_text');

    ?>

    <div class="home-faq">

        <div class="container">

            <div class="row">

                <?php

                    if($faq_title_section){

                        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-12"><h1 class="title title-main">'.$faq_title_section.'</h1></div>';

                    }

                ?>

            </div>

            <div class="row">

                <div class="col-lg-9 col-md-12 col-sm-12 col-12">

                    <dl class="faqs">

                        <?php

                            $faqs = get_field('faq_field');

                            foreach($faqs as $faq){

                                echo '<div class="line">';

                                    if($faq['faq_title']){

                                        echo '<dt>'.$faq['faq_title'].'<span class="plusminus"></span></dt>';

                                    }

                                    if($faq['faq_description']){

                                        echo '<dd>'.$faq['faq_description'].'</dd>';

                                    }

                                echo '</div>';

                            }

                        ?>

                    </dl>

                </div>

            </div>

            <div class="row">

                <?php

                    if($faq_button_link){

                        echo '<div class="col-md-12 col-12"><a href="'.$faq_button_link.'" class="btn-get-started">'.$faq_button_text.'</a></div>';

                    }

                ?>

            </div>

        </div>

    </div>

    <!-- FAQ Home -->

    <?php

        $bg_covid_default = get_stylesheet_directory_uri() . '/assets/images/covid-rapid-antigen-nasal-test-self-test-home-corona-test-station-3d-illustration 1.png';

        $covid_bg_image = get_field('covid_19_background_image');

        $covid_title = get_field('covid_19_title');

        $covid_content = get_field('covid_19_content');

        $covid_button_link = get_field('covid_19_button_link');

        $covid_button_text = get_field('covid_19_button_text');

    ?>

    <div class="hero covid-section" style="background-image:url('<?php if($covid_bg_image){ echo $covid_bg_image; }else{ echo $bg_covid_default; } ?>');">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="wrap">

                        <?php

                            if($covid_title){

                                echo '<h1 class="title title-main">'.$covid_title.'</h1>';

                            }

                            if($covid_content){

                                echo $covid_content;

                            }

                            if($covid_button_link){

                                echo '<a href="'.$covid_button_link.'" class="btn-get-started">'.$covid_button_text.'</a>';

                            }

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>  

    <!-- Covid Section  -->

    <?php

        $bg_download_default = get_stylesheet_directory_uri() . '/assets/images/download.png';

        $bg_download_der_app = get_field('background_download_der_app','option');

        $title_download_der_app = get_field('title_download_der_app','option');

        $download_google_play = get_field('download_google_play','option');

        $download_app_store = get_field('download_app_store','option');

        $download_button_link = get_field('download_button_link','option');

        $download_button_text = get_field('download_button_text','option');

        $image_download_der_app_mobile = get_field('image_download_der_app_mobile','option');

        $bg_download_der_app_mobile = get_field('background_download_der_app_mobile','option');

    ?>

    <div class="hero download" style="background-image:url('<?php if($bg_download_der_app){ echo $bg_download_der_app; }else{ echo $bg_download_default; } ?>');">

        <div class="container">   

        <div class="wrap"> 

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

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

                                echo '<div class="col-lg-2 col-md-4 col-sm-4 col-12"><a class="app" href="'.$download_gg_field['link'].'"><img src="'.$download_gg_field['image'].'"></a></div>';

                            }

                        }

                    }

                    if($download_app_store){

                        foreach($download_app_store as $download_app_field){

                            if($download_app_field['link']){

                                echo '<div class="col-lg-2 col-md-4 col-sm-4 col-12"><a class="app" href="'.$download_app_field['link'].'"><img src="'.$download_app_field['image'].'"></a></div>';

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


    <div class="hero download download-mobile" style="background-image:url('<?php if($bg_download_der_app_mobile){ echo $bg_download_der_app_mobile; }else{ echo $bg_download_default; } ?>');display:none;">

        <div class="container">   

        <div class="wrap"> 

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

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

                                echo '<div class="col-lg-2 col-md-4 col-sm-4 col-12"><a class="app" href="'.$download_gg_field['link'].'"><img src="'.$download_gg_field['image'].'"></a></div>';

                            }

                        }

                    }

                    if($download_app_store){

                        foreach($download_app_store as $download_app_field){

                            if($download_app_field['link']){

                                echo '<div class="col-lg-2 col-md-4 col-sm-4 col-12"><a class="app" href="'.$download_app_field['link'].'"><img src="'.$download_app_field['image'].'"></a></div>';

                            }

                        }

                    }
                    
                    

                ?>
                <?php if($image_download_der_app_mobile){ ?>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <div class="image-download-app">
                        <img src="<?php echo $image_download_der_app_mobile ?>" alt="">
                    </div>
                </div>
                <?php } else { ?>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <div class="image-download-app">
                        <img src="<?php echo $image_download_der_app_mobile ?>" alt="">
                    </div>
                </div>
                <?php } ?>
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

                <div class="col-lg-7 col-md-9 col-sm-9 col-12">

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