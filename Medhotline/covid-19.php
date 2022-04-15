<?php

/**
 * Template Name: Covid 19
 *
**/
get_header();
?>



<main id="site-content">

    <?php
        $content_field = get_field('content_field');
        $content_image = get_field('content_image');
        $button_link = get_field('button_link');
        $button_text = get_field('button_text');
    ?>

	<div class="covid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <?php echo '<h1 class="title-page">'.get_the_title().'</h1>'; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="content-page">
                        <?php
                            foreach($content_field as $content){
                                if($content['title']){
                                    echo '<h2>'.$content['title'].'</h2>';
                                }
                                if($content['description']){
                                    echo $content['description'];
                                }
                            }
                            if($button_link){
                                echo '<a href="'.$button_link.'" class="btn-get-started">'.$button_text.'</a>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="thumbnail"><?php if($content_image){ echo '<img src="'.$content_image.'" />'; } ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-12">
                    <dl class="faqs">
                        <?php
                            $faqs = get_field('faq_covid');
                            foreach($faqs as $faq){
                                echo '<div class="line">';
                                    if($faq['title']){
                                        echo '<dt>'.$faq['title'].'<span class="plusminus">&plus;</span></dt>';
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
        </div>

    </div>

</main><!-- #site-content -->



<?php get_footer(); ?>