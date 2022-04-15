<?php

/**

 * Template Name: Uber uns

 *

 **/



get_header();
$inhalt_introduce = get_field('inhalt_introduce');
$image_introduce = get_field('image_introduce');
?>
<main id="site-content" class="introduce">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h1 class="title-page">
                    Über uns
                </h1>
            </div>
        </div>
        <div class="wrap-header">
            <div class="row">
                <?php if(isset($inhalt_introduce)){ ?>
                <div class="col-md-5 col-12">
                    <div class="content">
                       <?php echo $inhalt_introduce; ?>
                    </div>
                </div>
                <?php } if(isset($image_introduce)){?>
                <div class="col-md-7 col-12"> 
                    <div class="image">
                        <img src="<?php echo $image_introduce; ?>" alt="">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php

        $schritte_1 = get_field('schritte_kann_1');
        $schritte_2 = get_field('schritte_kann_2');
        $schritte_3 = get_field('schritte_kann_3');
        $schritte_4 = get_field('schritte_kann_4');
        $schritte_5 = get_field('schritte_kann_5');
        ?>
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h3 class="title-page"><?php the_field('titel_kann'); ?></h3>
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
                <?php if (isset($schritte_5)) {
                    $i = 1; ?>
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
        </div>
        <div class="alone">
            <span>Wir lassen Sie nicht allein. </span>
        </div>
    </div>

</main>


<?php get_footer(); ?>