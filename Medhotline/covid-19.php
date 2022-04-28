<?php

/**
 * Template Name: Covid 19
 *
**/
get_header();
$content_field = get_field('content_field');
$content_image = get_field('content_image');
$covid_title_form = get_field('title_form');
$covid_add_shortcode_ctf = get_field('add_shortcode_ctf');
?>
<main id="site-content">
	<div class="covid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <?php echo '<h1 class="title-page m-0">'.get_the_title().'</h1>'; ?>
                </div>
            </div>
            <div class="hero-section">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="content-page">
                            <?php
                            if($content_field){
                                foreach($content_field as $content){
                                    echo '<div class="sub-content">';
                                        if($content['title']){
                                            echo '<h2>'.$content['title'].'</h2>';
                                        }
                                        if($content['description']){
                                            echo $content['description'];
                                        }
                                    echo '</div>';
                                }
                            }  
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <?php if($content_image){ echo '<img src="'.$content_image.'" alt="covid-image" class="border-16" />'; } ?>
                    </div>
                </div>
            </div>
            <!-- Hero Section -->
            <div class="register-form">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                            if($covid_title_form){
                                echo '<div class="sub-title"><h2>'.$covid_title_form.'</h2></div>';
                            }
                            if($covid_add_shortcode_ctf){
                                echo $covid_add_shortcode_ctf;
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Register Form -->
            <?php
                $covid_price_detail_title = get_field('prices_and_details_title');
                $covid_prices_details = get_field('prices_and_details');
            ?>
            <div class="price-details">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                            if($covid_price_detail_title){
                                echo '<div class="sub-title"><h2>'.$covid_price_detail_title.'</h2></div>';
                            } 
                        ?>
                    </div>
                </div>
                <div class="table-price">
                    <div class="head">
                        <div class="row">
                            <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-md-none d-sm-none d-none"></div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-lg-block d-md-none d-sm-none d-none">Beschreibung</div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-lg-block d-md-none d-sm-none d-none">Preis in €</div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-lg-block d-md-none d-sm-none d-none">Dauer</div>
                        </div>
                    </div>
                    <?php
                        if($covid_prices_details){
                            echo '<div class="body">';
                                foreach($covid_prices_details as $detail_package){
                                    echo '<div class="row">';
                                        echo '<div class="col-lg-2 col-md-12 col-sm-12 col-12">';
                                            echo '<div class="name-package text-center">';
                                                echo '<h3>'.$detail_package['name_package_covid'].'</h3>';
                                                echo '<p>'.$detail_package['sub_name_package_covid'].'</p>';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-12">';
                                            echo '<div class="description-package">';
                                                echo '<div class="d-lg-none d-md-block d-sm-block d-block"><strong>Beschreibung</strong></div>';
                                                echo $detail_package['description_package_covid'];
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-lg-3 col-md-12 col-sm-12 col-12">';
                                            echo '<div class="prices-package">';
                                                echo '<div class="d-lg-none d-md-block d-sm-block d-block"><strong>Preis in €</strong></div>';
                                                echo $detail_package['price_package_covid'];
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-lg-3 col-md-12 col-sm-12 col-12">';
                                            echo '<div class="duration-package">';
                                                echo '<div class="d-lg-none d-md-block d-sm-block d-block"><strong>Dauer</strong></div>';
                                                echo $detail_package['duration_package_covid'];
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                }
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
            <!-- Price Details -->
            <div class="travel-expense">
            <!-- <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div id="map"></div> -->
                <script>
//                     const citymap = {
//   chicago: {
//     center: { lat: 41.878, lng: -87.629 },
//     population: 2714856,
//   },
//   newyork: {
//     center: { lat: 40.714, lng: -74.005 },
//     population: 8405837,
//   },
//   losangeles: {
//     center: { lat: 34.052, lng: -118.243 },
//     population: 3857799,
//   },
//   vancouver: {
//     center: { lat: 49.25, lng: -123.1 },
//     population: 603502,
//   },
// };

// function initMap() {
//   // Create the map.
//   const map = new google.maps.Map(document.getElementById("map"), {
//     zoom: 4,
//     center: { lat: 37.09, lng: -95.712 },
//     mapTypeId: "terrain",
//   });

//   // Construct the circle for each value in citymap.
//   // Note: We scale the area of the circle based on the population.
//   for (const city in citymap) {
//     // Add the circle for this city to the map.
//     const cityCircle = new google.maps.Circle({
//       strokeColor: "#FF0000",
//       strokeOpacity: 0.8,
//       strokeWeight: 2,
//       fillColor: "#FF0000",
//       fillOpacity: 0.35,
//       map,
//       center: citymap[city].center,
//       radius: Math.sqrt(citymap[city].population) * 100,
//     });
//   }
// }

// window.initMap = initMap;
                </script>
                <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQpcWM8t360rzLTlPs7RNzt9e4rqtEPsw&callback=initMap"></script> -->
    
            <!-- </div> -->
                <?php
                    $covid_travel_expenses = get_field('travel_expenses');
                    if($covid_travel_expenses){
                        foreach($covid_travel_expenses as $travel_expense){
                            echo '<div class="row">';
                                if($travel_expense['map']){
                                    echo '<div class="col-lg-7 col-md-12 col-sm-12 col-12">';
                                        echo '<div class="map-travel">';
                                            echo '<img src="'.$travel_expense['map'].'"  alt="expense map" />';
                                        echo '</div>';
                                    echo '</div>';
                                }
                                if($travel_expense['price']){
                                    echo '<div class="col-lg-5 col-md-12 col-sm-12 col-12 d-flex align-self-center">';
                                        echo '<div class="price-travel">';
                                            echo $travel_expense['price'];
                                        echo '</div>';
                                    echo '</div>';
                                }
                            echo '</div>';
                            echo '<div class="row">';
                                if($travel_expense['description_map']){
                                    echo '<div class="col-lg-6 col-md-12 col-sm-12 col-12">';
                                        echo '<div class="description-map">';
                                            echo $travel_expense['description_map'];
                                        echo '</div>';
                                    echo '</div>';
                                }
                            echo '</div>';
                        }
                    }
                ?>
            </div>
            <!-- Travel Expense -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <dl class="faqs">
                        <?php
                            $faqs = get_field('faq_covid');
                            foreach($faqs as $faq){
                                echo '<div class="line">';
                                    if($faq['title']){
                                        echo '<dt>'.$faq['title'].'<span class="plusminus"></span></dt>';
                                    }
                                    if($faq['content']){
                                        echo '<dd>'.$faq['content'].'</dd>';
                                    }
                                echo '</div>';
                            }
                        ?>
                    </dl>
                </div>
            </div>
            <!-- FAQs -->
        </div>
    </div>
</main><!-- #site-content -->
<?php get_footer('no-review'); ?>