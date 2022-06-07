<?php

/**
 * Template Name: Covid 19
 *
**/
get_header();
$content_field = get_field('content_field');
$content_image = get_field('content_image');
$covid_title_form = get_field('title_form');
// $covid_add_shortcode_ctf = get_field('add_shortcode_ctf');
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
                    <div class="col-lg-5 col-12">
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
                    <div class="col-lg-7 col-12">
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
                        ?>
                        <div class="order-your-test">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <label>Test auswählen</label>
                                    <?php
                                        $args = array(
                                            'post_type'     => 'product',
                                            'post_status'   => 'publish',
                                            'order' => 'ASC',
                                            'posts_per_page'=> -1,
                                            'tax_query'     => array(
                                                array(
                                                    'taxonomy'  => 'product_cat',
                                                    'field'     => 'tag_ID',
                                                    'terms'     => 30
                                                ) 
                                            )
                                        );
                                        $query = new WP_Query( $args );
                                        if ( $query->have_posts() ) :
                                            echo '<select name="product_name" id="product_name">';
                                                echo '<option selected>Wählen Sie Ihren Test</option>';
                                            while ( $query->have_posts() ) : $query->the_post();
                                                global $product;
                                                ?>
                                                    <option value="<?php echo esc_attr( $product->get_id() ); ?>" id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()) ?>"><?php the_title(); ?></option>
                                                <?php
                                            endwhile;
                                            echo '</select>';
                                        endif;
                                        wp_reset_postdata();
                                    ?>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <label>Datum auswählen</label>
                                    <span class="date-custom">
                                        <input type="date" name="date-custom">
                                    </span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <label>Wählen Sie Ihren Standort</label>
                                    <select name="attr_location" id="attr_location">
                                        <option selected>Wählen Sie Ihren Standort</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <label>Anzahl der Personen</label>
                                    <select name="attr_person" id="attr_person">
                                        <option selected>Anzahl der Personen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-right add-cart-custom">
                                    <a class="ajax_add_to_cart add_to_cart_button add-cart btn-get-started disabled" href="javascript:void(0)">In den Warenkorb</a>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-8 col-12">
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
<script>
    jQuery(document).ready(function () {
        // Select product name
        jQuery('#product_name').change(function () {
            var id_product = jQuery(this).val();
            if(id_product !='Wählen Sie Ihren Test'){
                jQuery.ajax({
                    type: "POST",
                    url: '<?php echo admin_url('admin-ajax.php');?>',
                    data: {
                        action: 'select_product_name',
                        id: id_product
                    },
                    beforeSend: function(){
                        jQuery('#attr_location').html('<option>Wählen Sie Ihren Standort</option>');
                        jQuery('#attr_person').html('<option>Anzahl der Personen</option>');
                    },
                    success: function(response){
                        var data = JSON.parse(response);
                        if(data.code == 200) {
                            var list_ids = data.data.list_ids;
                            jQuery.each( data.data.option, function( key, value ) {
                                jQuery('#attr_location').append('<option value="'+list_ids[value]+'">'+value+'</option>')
                            }); 
                        } else {
                            jQuery('#attr_location').html('<option>Wählen Sie Ihren Standort</option>');
                            jQuery('#attr_person').html('<option>Anzahl der Personen</option>');
                        }
                    }
                });
            }else{
                jQuery('#attr_location').html('<option>Wählen Sie Ihren Standort</option>');
                jQuery('#attr_person').html('<option>Anzahl der Personen</option>');
                jQuery('.add-cart-custom').html('<a class="ajax_add_to_cart add_to_cart_button add-cart btn-get-started disabled" href="javascript:void(0)">In den Warenkorb</a>');
            }
        });
        // Select location of product
        jQuery('#attr_location').change(function () {
            var current_id = jQuery('#product_name').val();
            var location = jQuery(this).find('option:selected'); 
            var location_id = location.attr("value");
            
            jQuery.ajax({
                type: "POST",
                url: '<?php echo admin_url('admin-ajax.php');?>',
                data: {
                    action: 'select_location_product',
                    product_id: current_id,
                    location_id: location_id
                },
                success: function(response){
                    jQuery('.add-cart-custom').html('<a class="ajax_add_to_cart add_to_cart_button add-cart btn-get-started disabled" href="javascript:void(0)">In den Warenkorb</a>');
                    jQuery('#attr_person').html(response);
                }
            });
        });

        jQuery('#attr_person').change(function () { 
            var current_id = jQuery('#product_name').val();
            var people = jQuery(this).find('option:selected').attr("value");
            if(people == undefined){
                jQuery('.add-cart-custom').html('<a class="ajax_add_to_cart add_to_cart_button add-cart btn-get-started disabled" href="javascript:void(0)">In den Warenkorb</a>');
            }else{
                jQuery('.add-cart-custom').html('<a class="add-cart-new btn-get-started">In den Warenkorb</a>');
            }
        });
        /* Add cart custom */
        jQuery(document).on('click', '.add-cart-new', function (e) {
            e.preventDefault();
            var product_id = jQuery('#product_name').val();
            var variation_id = jQuery('#attr_person').find('option:selected').attr("value");
            var date_product = jQuery('.date-custom input').val();
            var data = {
                action: 'woocommerce_ajax_add_to_cart',
                product_id: product_id,
                variation_id: variation_id,
                date_product: date_product
            };
            jQuery(document.body).trigger('adding_to_cart', [data]);
            jQuery.ajax({
                type: "POST",
                url: wc_add_to_cart_params.ajax_url,
                data: data,
                beforeSend: function (response) {
                    //data.removeClass('added').addClass('loading');
                },
                complete: function (response) {
                    //data.addClass('added').removeClass('loading');
                },
                success: function(response){
                    if (response.error && response.product_url) {
                        window.location = response.product_url;
                        return;
                    } else {
                        jQuery(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash]);
                    }
                },
            });
        });
    });
</script>
<?php get_footer('no-review'); ?>