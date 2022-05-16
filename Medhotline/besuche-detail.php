<?php

/* 

Template Name: Besuche detail

*/

acf_form_head();

get_header('account');

?>
<div id="profile" class="profile main">
    <div class="container-fluid">
        <div class="row">
            <?php include('sider-bar.php'); ?>
            <div class="col-md-9 col-12 wrap-content">
                <div class="col-md-12 col-12 plandetails-subscription">
                    <div class="back-besuche">
                        <a href="javascript:void(0);"><img src="https://www.telberia.com/projects/medhotline/wp-content/uploads/2022/05/back-besuche.png"> Zurück zu allen Besuchen</a>
                    </div>
                    <div class="group-subscription">
                        <h1 class="title title-main">Besuchsdetails</h1>
                    </div>
                    <div class="group-date">
                        <div class="form-group">
                            <div class="left">
                                <span>Datum</span>
                            </div>
                            <div class="right">
                                <span>14.10.2021</span>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="left">
                                <span>Zeit</span>
                            </div>
                            <div class="right">
                                <span>18:56</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="left">
                                <span>Arzt</span>
                            </div>
                            <div class="right">
                                <span>Darlene Robertson</span>
                            </div>
                        </div>
                    </div>
                    <div class="group-bottom">
                        <div class="form-group">
                            <h3>BESCHWERDEGRÜNDE</h3>
                            <p>Kopfschmerzen, Bluthochdruck.</p>
                        </div>
                        <div class="form-group">
                            <h3>DIAGNOSE</h3>
                            <p>Hypertonie</p>
                        </div>
                        <div class="form-group">
                            <h3>DIENSTLEISTUNGEN</h3>
                            <p>Ärztliche Beratung per Telefon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

// get_footer();

?>