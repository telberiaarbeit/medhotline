<?php

/* 

Template Name: Bestellungen

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
                    <div class="group-subscription">
                        <h1 class="title title-main">Besuche</h1>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#einkaufswagen">Einkaufswagen</a></li>
                        <li><a data-toggle="tab" href="#abgeschlossene">Abgeschlossene Aufträge</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="einkaufswagen" class="tab-pane active" >
                            <table class="wrap-table">
                                <thead>
                                    <tr>
                                        <th>Titel</th>
                                        <th>Preis</th>
                                        <th>Quantität</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PCR Test</td>
                                        <td class="price">€ 135</td>
                                        <td><div class="input-group inline-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-minus">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input class="form-control quantity" min="0" name="quantity" value="1" type="number">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-plus">
                                            <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        </div></td>
                                        <td><a href="javascript:void(0);" class="btn-delete"><img src="https://www.telberia.com/projects/medhotline/wp-content/uploads/2022/05/Group.png" alt=""></a></div></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            <div class="wrap-form">
                                <div class="form-group">
                                    <label for="">Datum auswählen</label>
                                    <input type="date" placeholder="Mo, March 28th">
                                </div>
                                <div class="form-group">
                                    <label for="">Wählen Sie Ihren Standort</label>
                                    <select name="" id="">
                                        <option value="">Graz</option>
                                    </select>
                                </div>
                            </div>
                            <div class="gradient bottom-gradient">
                                <a href="javascript:void(0);" class="border-gradient">bestätigen</a>
                            </div>
                        </div>
                        <div id="abgeschlossene" class="tab-pane">
                            <table class="wrap-table">
                                <thead>
                                    <tr>
                                        <th>Titel</th>
                                        <th>Daten</th>
                                        <th>Betrag</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PCR Test</td>
                                        <td>15.04.2022</td>
                                        <td class="price">€ 135</td>
                                        <td><a href="javascript:void(0);" class="icon-success"><img src="https://www.telberia.com/projects/medhotline/wp-content/uploads/2022/05/check-circle.png" alt=""></a></div></td>
                                    </tr>
                                    <tr>
                                        <td>PCR Test</td>
                                        <td>15.04.2022</td>
                                        <td class="price">€ 135</td>
                                        <td><a href="javascript:void(0);" class="icon-success"><img src="https://www.telberia.com/projects/medhotline/wp-content/uploads/2022/05/check-circle.png" alt=""></a></div></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery('.btn-plus, .btn-minus').on('click', function(e) {
        const isNegative = jQuery(e.target).closest('.btn-minus').is('.btn-minus');
        const input = jQuery(e.target).closest('.input-group').find('input');
        if (input.is('input')) {
            input[0][isNegative ? 'stepDown' : 'stepUp']()
        }
})
</script>