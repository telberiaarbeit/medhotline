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

                                <span class="name">Videoassistierte Visite</span>

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

                                <span class="name">Leistungen gegen Aufpreis</span>

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

                                <span class="name">COVID-19 Tests</span>

                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="17" number_post="3"]');

                                ?>

                            </dd>

                        </div>

                        <!-- Not product -->

                        <div class="line">

                            <dt>

                                <span class="name">Berechnung der Anfahrt</span>

                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <div class="product-infor">

                                    <span class="name">Zone 1 - bis 5 km</span>

                                    <span class="price">€ 35</span>

                                </div>

                                <div class="product-infor">

                                    <span class="name">Zone 2 - bis 10 km</span>

                                    <span class="price">€ 45</span>

                                </div>

                                <div class="product-infor">

                                    <span class="name">Zone 3 - bis 15 km</span>

                                    <span class="price">€ 55</span>

                                </div>

                                <div class="product-infor">

                                    <span class="name">Zone 4 - bis 20 km</span>

                                    <span class="price">€ 65</span>

                                </div>

                                <div class="product-infor">

                                    <span class="name">Zone 5 - über 20 km</span>

                                    <span class="price">€ 75</span>

                                </div>

                            </dd>

                        </div>

                        <!-- End Not product -->

                        <div class="line">

                            <dt>

                                <span class="name">Antikörper Tita Bestimmung</span>

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

                                <span class="name">Weitere Angebote <small>(für Jahreskunden inkludiert)</small></span>

                                <span class="plusup"></span>

                            </dt>

                            <dd>

                                <?php

                                    echo do_shortcode('[list_product_by_category category="29" number_post="-1"]');

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