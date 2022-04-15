<?php
/**
 * Template Name: Fallbeispiele
 *
**/
get_header();
?>
<main id="site-content">
    <div class="fallbeispiele">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12"><h1 class="title-page"><?php echo get_the_title(); ?></h1></div>
            </div>
        </div>
        <?php
            $section_top = get_field('section_top');
        ?>
        <div class="fallbeis fallbeis-top">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="content">
                        <?php if($section_top['title']){ echo '<h2>'.$section_top['title'].'</h2>'; } ?>
                        <?php if($section_top['description']){ echo $section_top['description']; } ?>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <?php if($section_top['image']){ ?>
                        <div class="thumbnail" style="background-image: url('<?php echo $section_top['image']; ?>')"></div>
                    <?php } ?>
                </div> 
            </div>
        </div>
        <?php
            $section_center = get_field('section_center');
        ?>
        <div class="fallbeis fallbeis-center">
            <div class="row">
                <div class="col-md-7 col-12">
                    <?php if($section_center['image']){ ?>
                        <div class="thumbnail" style="background-image: url('<?php echo $section_center['image']; ?>')"></div>
                    <?php } ?>
                </div>
                <div class="col-md-5 col-12">
                    <div class="content">
                        <?php if($section_center['title']){ echo '<h2>'.$section_center['title'].'</h2>'; } ?>
                        <?php if($section_center['description']){ echo $section_center['description']; } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $section_bottom = get_field('section_bottom');
        ?>
        <div class="fallbeis fallbeis-bottom">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="content">
                        <?php if($section_bottom['title']){ echo '<h2>'.$section_bottom['title'].'</h2>'; } ?>
                        <?php if($section_bottom['description']){ echo $section_bottom['description']; } ?>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <?php if($section_bottom['image']){ ?>
                        <div class="thumbnail" style="background-image: url('<?php echo $section_bottom['image']; ?>')"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>