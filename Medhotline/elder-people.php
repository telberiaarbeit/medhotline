<?php

/**

 * Template Name: Elder People

 *

**/



get_header();

?>



<main id="site-content">

    <?php

        $bg_image = get_field('background_image');

        $title = get_field('title');

        $content = get_field('content');

        $link_button = get_field('link_button');

        $text_button = get_field('text_button');

    ?>

	<section class="hero" style="background-image: url('<?php echo $bg_image; ?>')">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-12">

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

    </section>

    <section class="our-advantage">

        <div class="container">

            <div class="row">

                <?php

                    $advantage_title = get_field('advantage_title');

                ?>

                <div class="col-md-12 col-12"><h1 class="title title-main"><?php if($advantage_title){ echo $advantage_title; }?></h1></div>

            </div>

            <div class="row">

            <?php

                $advantage_field = get_field('advantage_field');

                foreach($advantage_field as $advantage){

                    echo '<div class="col-md-3 col-12 text-center">';

                        echo '<div class="advantage">';

                            echo '<div class="icon">';

                                if($advantage['advantage_icon']){

                                    echo '<img src="'.$advantage['advantage_icon'].'">';

                                }

                            echo '</div>';

                            echo '<div class="sub-title">';

                                if($advantage['advantage_sub_title']){

                                    echo '<h2>'.$advantage['advantage_sub_title'].'</h2>';

                                }

                            echo '</div>';

                            echo '<div class="description description-main">';

                                if($advantage['advantage_description']){

                                    echo $advantage['advantage_description'];

                                }

                            echo '</div>';

                        echo '</div>';

                    echo '</div>';

                }

            ?>

            </div>

        </div>

    </section>

    <?php

        $med_help_title = get_field('med_help_title');

        $med_help_description = get_field('med_help_description');

        $med_help_image = get_field('med_help_image');

    ?>

    <section class="med-help p-0">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-12">

                    <h1 class="title title-main"><?php if($med_help_title){ echo $med_help_title; } ?></h1>

                    <div class="description description-main">

                        <?php if($med_help_description){ echo $med_help_description; } ?>

                    </div>

                </div>

                <div class="col-md-6 col-12">

                    <div class="image">

                        <?php 

                            if($med_help_image){

                                echo '<img src="'.$med_help_image.'" />';

                            }

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="med-function">

        <div class="container">

            <div class="row">

                <?php

                    $med_work_title = get_field('medhotline_work_title');

                ?>

                <div class="col-md-12 col-12"><h1 class="title title-main"><?php if($med_work_title){ echo $med_work_title; }?></h1></div>

            </div>

            <?php

                $med_work_field = get_field('medhotline_work_field');

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

            ?>

        </div>

    </section>

    <?php $list_item_preise = get_field('package'); ?>
    <section id="counts" class="counts">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h1 class="title title-main"><?php the_field('price_title'); ?></h1>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#month" role="tab">Month</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#year" role="tab">Year</a>
                    </li>
                </ul><!-- Tab panes -->
            </div>
            <div class="fix-width">
                <div class="tab-content">
                    <div class="tab-pane active" id="month" role="tabpanel">
                        <?php if(isset($list_item_preise)){ ?>
                            <div class="row">
                                <?php foreach($list_item_preise as $item) { ?>
                                <div class="col-lg-4 col-12">
                                    <div class="price">
                                        <h1 class="title"><?php echo $item['name_package']; ?></h1>
                                        <div class="content"><?php echo $item['description_package']; ?></div>
                                        <p class="text-price">€ <?php echo $item['price_package']; ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="year" role="tabpanel">
                        <?php if(isset($list_item_preise)){ ?>
                            <div class="row">
                                <?php foreach($list_item_preise as $item) { ?>
                                <div class="col-lg-4 col-12">
                                    <div class="price">
                                        <h1 class="title"><?php echo $item['name_package']; ?></h1>
                                        <div class="content"><?php echo $item['description_package']; ?></div>
                                        <p class="text-price">€ <?php echo $item['price_package']; ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ======= Services Section ======= -->
    <?php
    $inhalt_left = get_field('inhalt_left');
    $inhalt_right = get_field('inhalt_right');
    ?>
    <section id="services" class="services">
        <div class="container">
            <h1 class="title title-main"><?php the_field('titel_behandeln'); ?></h1>
            <div class="wrap-service">
                <div class="row">
                    <?php
                    if (isset($inhalt_left)) {

                    ?>
                        <div class="col-md-6 col-12">
                            <div class="content_behandeln">
                                <?php foreach ($inhalt_left as $inhalt_left) {
                                    echo '<p>' . $inhalt_left['inhalt_behandeln_left'] . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($inhalt_right)) {
                    ?>
                        <div class="col-md-6 col-12">
                            <div class="content_behandeln">
                                <?php foreach ($inhalt_right as $inhalt_right) {
                                    echo '<p>' . $inhalt_right['inhalt_behandeln_right'] . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <?php
        $insurance_image = get_field('insurance_image');
        $insurance_title = get_field('insurance_title');
        $insurance_content = get_field('insurance_content');
        $insurance_link_button = get_field('insurance_link_button');
        $insurance_text_button = get_field('insurance_text_button');
    ?>
    <section class="insurance">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="border-image">
                    <?php
                        if($insurance_image){
                            echo '<img src="'.$insurance_image.'" alt="insurance image"/>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <?php
                    if($insurance_title){
                        echo '<h1 class="title title-main">'.$insurance_title.'</h1>';
                    }
                    if($insurance_content){
                        echo '<div class="content">'.$insurance_content.'</div>';
                    }
                    if($insurance_link_button){
                        echo '<a href="'.$insurance_link_button.'" class="btn-get-started">'.$insurance_text_button.'</a>';
                    }
                ?>
            </div>
        </div>
    </section>
</main><!-- #site-content -->



<?php get_footer(); ?>

