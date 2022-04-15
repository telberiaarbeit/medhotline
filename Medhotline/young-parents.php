<?php

/**

 * Template Name: Young parents

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

                <div class="col-md-12 col-12 col-padding">

                    <div class="hero-content">

                        <?php

                        if ($title) {

                            echo '<h2 class="title">' . $title . '</h2>';
                        }

                        if ($content) {

                            echo '<div class="content">' . $content . '</div>';
                        }

                        if ($link_button) {

                            echo '<a href="' . $link_button . '" class="btn-get-started">' . $text_button . '</a>';
                        }

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ======= Why Us Section ======= -->

    <section class="our-advantage">
        <div class="container">

            <div class="row">

                <?php

                $advantage_title = get_field('advantage_title');

                ?>

                <div class="col-md-12 col-12">
                    <h1 class="title title-main"><?php if ($advantage_title) {
                                                        echo $advantage_title;
                                                    } ?></h1>
                </div>

            </div>

            <div class="row">

                <?php

                $advantage_field = get_field('advantage_field');

                foreach ($advantage_field as $advantage) {

                    echo '<div class="col-md-3 col-12 text-center">';

                    echo '<div class="advantage">';

                    echo '<div class="icon">';

                    if ($advantage['advantage_icon']) {

                        echo '<img src="' . $advantage['advantage_icon'] . '">';
                    }

                    echo '</div>';

                    echo '<div class="sub-title">';

                    if ($advantage['advantage_sub_title']) {

                        echo '<h2>' . $advantage['advantage_sub_title'] . '</h2>';
                    }

                    echo '</div>';

                    echo '<div class="description description-main">';

                    if ($advantage['advantage_description']) {

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
    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <?php

    $schritte_1 = get_field('schritte_kann_1');
    $schritte_2 = get_field('schritte_kann_2');
    $schritte_3 = get_field('schritte_kann_3');
    $schritte_4 = get_field('schritte_kann_4');
    $schritte_5 = get_field('schritte_kann_5');
    ?>
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h1 class="title title-main"><?php the_field('titel_kann'); ?></h1>
                </div>
            </div>
            <?php if (isset($schritte_1)) { ?>
                <div class="row column left">
                    <?php foreach ($schritte_1 as $schritte_1) { ?>
                        <div class="step step-<?php echo $schritte_1['number_kann']; ?> d-flex col-md-3">
                            <p class="title"><?php echo $schritte_1['number_kann']; ?></p>
                            <p><?php echo $schritte_1['inhalt_kann']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($schritte_2)) { ?>
                <div class="row column column-2 right mt-90">
                    <?php foreach ($schritte_2 as $schritte_2) { ?>
                        <div class="step step-<?php echo $schritte_2['number_kann']; ?> d-flex col-md-3">
                            <p class="title"><?php echo $schritte_2['number_kann']; ?></p>
                            <p><?php echo $schritte_2['inhalt_kann']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($schritte_3)) { ?>
                <div class="row column column-3 left mt-90">
                    <?php foreach ($schritte_3 as $schritte_3) { ?>
                        <div class="step step-<?php echo $schritte_3['number_kann']; ?> d-flex col-md-3">
                            <p class="title"><?php echo $schritte_3['number_kann']; ?></p>
                            <p><?php echo $schritte_3['inhalt_kann']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if (isset($schritte_4)) { ?>
                <div class="row column column-4 right">
                    <?php foreach ($schritte_4 as $schritte_4) { ?>
                        <div class="step step-<?php echo $schritte_4['number_kann']; ?> d-flex col-md-3">
                            <p class="title"><?php echo $schritte_4['number_kann']; ?></p>
                            <p><?php echo $schritte_4['inhalt_kann']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($schritte_5)) { $i = 1; ?>
                <div class="row column column-5 left ">
                    <?php foreach ($schritte_5 as $schritte_5) { ?>

                        <?php if ($i == 2) { ?>
                            <div class="step step-10-center d-flex col-md-3">
                                <p><?php echo $schritte_5['inhalt_kann']; ?></p>
                            </div>
                        <?php } else { ?>
                            <div class="step d-flex col-md-3">
                                <p><?php echo $schritte_5['inhalt_kann']; ?></p>
                            </div>
                    <?php   }
                        $i++;
                    } ?>
                </div>
            <?php } ?>
        </div>

    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <?php $list_item_preise = get_field('package'); ?>
    <section id="counts" class="counts">
        <div class="container">
            <h1 class="title title-main"><?php the_field('price_title'); ?></h1>
            <?php if (isset($list_item_preise)) { ?>
                <div class="fix-width">
                    <div class="row">
                        <?php foreach ($list_item_preise as $item) { ?>
                            <div class="col-lg-4 col-12">
                                <div class="price">
                                    <h1 class="title"><?php echo $item['name_package']; ?></h1>
                                    <?php echo $item['description_package']; ?>
                                    <p class="text-price">€ <?php echo $item['price_package']; ?> </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Counts Section -->

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
                    if ($insurance_image) {
                        echo '<img src="' . $insurance_image . '" alt="insurance image"/>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <?php
                if ($insurance_title) {
                    echo '<h1 class="title title-main">' . $insurance_title . '</h1>';
                }
                if ($insurance_content) {
                    echo '<div class="content">' . $insurance_content . '</div>';
                }
                if ($insurance_link_button) {
                    echo '<a href="' . $insurance_link_button . '" class="btn-get-started">' . $insurance_text_button . '</a>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer('no-review'); ?>