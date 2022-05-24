<?php

/**

* *

* Template Name: Preislisten Und Pakete

* *

**/

get_header();

$description_package = get_field('description_package');

?>

<main id="site-content" class="preislisten-und-pakete">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                <h1 class="title-page m-0"><?php echo get_the_title(); ?></h1>

            </div>

        </div>

    </div>

    <!-- We offer -->

    <div class="product-package not-bg">

        <div class="container">

            <div class="row">

                <?php echo do_shortcode('[list_product]'); ?>

            </div>

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="descript">

                        <?php

                            if($description_package){

                                foreach($description_package as $description){

                                    echo $description['content'];

                                }

                            }

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End counts package -->

    <?php

        $bg_partner_default = get_stylesheet_directory_uri() . '/assets/images/healthcare-min1.png';

        $partner_field = get_field('partner');

        if($partner_field){

            foreach($partner_field as $partner){ ?>

                <div class="partner" style="background-image:url('<?php if($partner['partner_background']){ echo $partner['partner_background']; }else{ echo $bg_partner_default;}?>')">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-md-7 col-sm-6 col-12">

                                <div class="partner_row">

                                    <?php

                                        if($partner['partner_icon']){

                                            echo '<div class="col-lg-3 col-md-12 col-sm-12 col-12 icon">';

                                                echo '<img src="'.$partner['partner_icon'].'" />';

                                            echo '</div>';

                                        }

                                        if($partner['partner_content']){

                                            echo '<div class="col-lg-9 col-md-12 col-sm-12 col-12 content">';

                                                echo $partner['partner_content'];

                                            echo '</div>';

                                        }

                                    ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            <?php

            }

        }

    ?>

    <!-- End partner -->

    <!-- Price Service -->

    <div class="price-service">

        <div class="container">

            <?php $service_title = get_field('services_title'); ?>

            <div class="row">

                <div class="col-md-12 col-12">

                    <?php

                        if($service_title){

                            echo '<div class="sub-title"><h2>'.$service_title.'</h2></div>';

                        }

                    ?>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-9 col-md-12 col-sm-12 col-12">

                    <dl class="faqs">

                        <div class="line">

                            <dt>

                                <?php
                                    $cat_videoassistierte_visite = get_term_by('name', 'Videoassistierte Visite', 'product_cat');
                                    echo '<span class="name">'.$cat_videoassistierte_visite->name.'</span>';
                                ?>
                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="25" number_post="-1"]');

                                ?>

                            </dd>

                        </div>

                        <div class="line">

                            <dt>

                                <?php
                                    $cat_leistungen_gegen_aufpreis= get_term_by('name', 'Leistungen gegen Aufpreis', 'product_cat');
                                    echo '<span class="name">'.$cat_leistungen_gegen_aufpreis->name.'</span>';
                                ?>
                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="26" number_post="-1"]');

                                ?>

                            </dd>

                        </div>

                        <div class="line">

                            <dt>

                                <?php
                                    $cat_covid_19_tests= get_term_by('name', 'COVID-19 Tests', 'product_cat');
                                    echo '<span class="name">'.$cat_covid_19_tests->name.'</span>';
                                ?>
                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="17" number_post="3"]');

                                ?>

                            </dd>

                        </div>

                        <div class="line">

                            <dt>
                                <?php
                                    $category = get_term_by('name', 'Berechnung der Anfahrt', 'product_cat');
                                    echo '<span class="name">'.$category->name.'</span>';
                                ?>
                                <span class="plusup"></span>
                            </dt>

                            <dd>
                                <div class="product-description"><?php echo $category->description; ?></div>
                            </dd>

                        </div>

                        <div class="line">

                            <dt>

                                <?php
                                    $cat_tita_bestimmung = get_term_by('name', 'Antikörper Tita Bestimmung', 'product_cat');
                                    echo '<span class="name">'.$cat_tita_bestimmung->name.'</span>';
                                ?>
                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="28" number_post="-1"]');

                                ?>

                            </dd>

                        </div>

                        <div class="line">

                            <dt>
                                
                                <?php
                                    $cat_weitere_angebote = get_term_by('name', 'Weitere Angebote der Medhotline', 'product_cat');
                                    echo '<span class="name">'.$cat_weitere_angebote->name.'</span>';
                                ?>
                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="29" number_post="-1"]');

                                ?>

                            </dd>

                        </div>

                        <div class="line">

                            <dt>

                                <?php
                                    $cat_impfungen = get_term_by('name', 'Impfungen', 'product_cat');
                                    echo '<span class="name">'.$cat_impfungen->name.'</span>';
                                ?>

                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php
                                    echo do_shortcode('[list_product_by_category category="32" number_post="-1"]');
                                    echo '<div class="cat-description">'.$cat_impfungen->description.'</div>';
                                ?>

                            </dd>

                        </div>
                        
                        <div class="line">

                            <dt>

                                <?php
                                    $cat_services_at_extra_charge = get_term_by('name', 'Leistungen wo der Preis auf Anfrage', 'product_cat');
                                    echo '<span class="name">'.$cat_services_at_extra_charge->name.'<small>( Dauer ,Kosten Material ,Medikamente )</small></span>';
                                ?>

                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php
                                    echo do_shortcode('[list_product_by_category category="33" number_post="-1"]');
                                    echo '<div class="cat-description">'.$cat_services_at_extra_charge->description.'</div>';
                                ?>

                            </dd>

                        </div>

                        <div class="line">

                            <dt>

                                <?php
                                    $cat_telemedizinische_beratung = get_term_by('name', 'Telemedizinische Beratung', 'product_cat');
                                    echo '<span class="name">'.$cat_telemedizinische_beratung->name.'<small>'.$cat_telemedizinische_beratung->description.'</small></span>';
                                ?>

                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php
                                    echo do_shortcode('[list_product_by_category category="35" number_post="-1"]');
                                ?>

                            </dd>

                        </div>

                    </dl>

                </div>

            </div>

        </div>

    </div>

    <!-- End Price Service -->

</main>

<?php get_footer('no-review'); ?>