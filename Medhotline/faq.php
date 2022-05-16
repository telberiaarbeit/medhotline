<?php

/**

 * Template Name: FAQs

 *

**/

get_header();



?>

<main id="site-content">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-12"><h1 class="title-page m-0"><?php echo get_the_title(); ?></h1></div>

        </div>

        <div class="row">

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 list-faqs">

                <dl class="faqs">

                    <?php

                        $faqs = get_field('faq_field');

                        foreach($faqs as $faq){

                            echo '<div class="line">';

                                if($faq['faq_title']){

                                    echo '<dt>'.$faq['faq_title'].'<span class="plusminus"></span></dt>';

                                }

                                if($faq['faq_description']){

                                    echo '<dd>'.$faq['faq_description'].'</dd>';

                                }

                            echo '</div>';

                        }

                    ?>

                </dl>

            </div>

        </div>

    </div>

</main>

<?php get_footer('no-review'); ?>