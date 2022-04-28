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
                            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                <?php
                                    if($partner['partner_content']){
                                        echo '<div class="content">';
                                            echo $partner['partner_content'];
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
    ?>
    <!-- End partner -->
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
                <div class="col-md-8 col-12">
                    <dl class="faqs">
                        <?php
                            $prices_of_services = get_field('prices_of_services');
                            foreach($prices_of_services as $prices_of_service){
                                echo '<div class="line">';
                                    if($prices_of_service['service_name']){
                                        echo '<dt><span class="name">'.$prices_of_service['service_name'].'</span><span class="price">'.$prices_of_service['service_price'].'</span><span class="plusup"></span></dt>';
                                    }
                                    if($prices_of_service['service_content']){
                                        echo '<dd>'.$prices_of_service['service_content'].'</dd>';
                                    }
                                echo '</div>';
                            }
                        ?>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer('no-review'); ?>