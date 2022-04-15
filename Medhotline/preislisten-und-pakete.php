<?php
/**
* *
* Template Name: Preislisten Und Pakete
* *
**/
get_header();
?>
<main id="site-content">
    <div class="preislisten-und-pakete">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h1 class="title-page"><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
        <?php
            $package_monthly = get_field('package_monthly');
            $package_yearly = get_field('package_yearly');
        ?>
        <div class="counts package">
            <div class="container">
                <div class="row">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#month" role="tab">Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#year" role="tab">Year</a>
                        </li>
                    </ul><!-- Tab panes -->
                </div>
                <div class="fix-width">
                    <div class="tab-content">
                        <div class="tab-pane" id="month" role="tabpanel">
                            <?php if($package_monthly){ ?>
                                <div class="row">
                                    <?php foreach($package_monthly as $package_month) { ?>
                                    <div class="col-lg-4 col-12">
                                        <div class="price">
                                            <?php if($package_month['name']){ ?>
                                                <h1 class="title"><?php echo $package_month['name']; ?></h1>
                                            <?php } ?>
                                            <?php if($package_month['description']){ ?>
                                                <div class="content"><?php echo $package_month['description']; ?></div>
                                            <?php } ?>
                                            <?php if($package_month['price']){ ?>
                                                <p class="text-price"><?php echo $package_month['price']; ?></p>
                                            <?php } ?>
                                            <?php if($package_month['link_button']){ ?>
                                                <a href="<?php echo $package_month['link_button']; ?>" class="btn-get-started"><?php echo $package_month['text_button']; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="tab-pane active" id="year" role="tabpanel">
                            <?php if($package_yearly){ ?>
                                <div class="row">
                                    <?php foreach($package_yearly as $package_year) { ?>
                                    <div class="col-lg-4 col-12">
                                        <div class="price">
                                            <?php if($package_year['name']){ ?>
                                                <h1 class="title"><?php echo $package_year['name']; ?></h1>
                                            <?php } ?>
                                            <?php if($package_year['description']){ ?>
                                                <div class="content"><?php echo $package_year['description']; ?></div>
                                            <?php } ?>
                                            <?php if($package_year['price']){ ?>
                                                <p class="text-price"><?php echo $package_year['price']; ?></p>
                                            <?php } ?>   
                                            <?php if($package_year['link_button']){ ?>
                                                <a href="<?php echo $package_year['link_button']; ?>" class="btn-get-started"><?php echo $package_year['text_button']; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <?php
                                $description_package = get_field('description_package');
                                if($description_package){
                                    foreach($description_package as $description){
                                        echo '<div class="sub-desc">'.$description['content'].'</div>';
                                    }
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counts package -->
        <div class="partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12">
                        <?php
                            $partner_text = get_field('partner');
                            if($partner_text){
                                echo $partner_text;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End partner -->
        <div class="price-service">
            <div class="container">
                <?php $service_title = get_field('services_title'); ?>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?php
                            if($service_title){
                                echo '<div class="content"><h2>'.$service_title.'</h2></div>';
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
    </div>
</main>
<?php get_footer(); ?>