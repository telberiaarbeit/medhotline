<?php
/* 
Template Name: Profile 
*/
get_header('account');
global $woocommerce;
?>
<div id="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12 preisplan-sidebar">
                <ul>
                    <li><a href="#">Besuche</a></li>
                    <li><a href="#">Medizinische Dokumente</a></li>
                    <li><a href="#">Meine Rezepte</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Mitglieder</a></li>
                    <li><a href="#">Preisplan</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-12 preisplan-content">
                <div class="col-md-12 col-12 plandetails-subscription">
                    <div class="group-subscription">
                        <h1 class="title title-main">Mein Profil</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer('no-review');

?>