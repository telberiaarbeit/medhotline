<div class="col-md-3 col-12 preisplan-sidebar sidebar">
    <div id="nav">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> -->
            <?php
            wp_nav_menu( array(
                    'menu'              => 'Menu Profile',
                    'container'         => 'div',
                    'container_class'   => 'navbar-collapse collapse show',
                    'menu_class'        => 'nav navbar-nav'
                )
                );
            ?>
        </nav>
    </div><!-- #nav -->
</div>