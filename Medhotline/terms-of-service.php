<?php
/**
* *
* Template Name: Terms of Service
* *
**/
get_header();
$term_content = get_field('all_content');
?>
<main id="site-content" class="term-service">
    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php
                        if($term_content){
                            echo $term_content;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer('no-review'); ?>