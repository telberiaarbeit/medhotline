<?php

/* 

Template Name: Profile 

*/

get_header('account');

?>
<style>
    .logged {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    #profile .wrap-content {
        padding-bottom: 89px;
    }
    .select2-container .select2-selection--single,
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 40px;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 24px;
        padding: 0;
    }
    .select2-container .select2-selection--single {
        border: 1px solid #A5A5A5;
        padding: 7px 16px;
        letter-spacing: 0;
        border-radius: 8px;
    }
    #profile textarea {
        border: 1px solid #A5A5A5;
        padding: 7px 16px;
        letter-spacing: 0;
        resize: none;
    }
    #profile #land ~ .select2-container--default .select2-selection--single .select2-selection__arrow {
        display: none;
    }
    .title-h2 {
        font-family: 'DM Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 1em;
        letter-spacing: -0.165px;
        color: #000000;
    }
    .medical-information .select-type-medical span {
        width: 154px;
        position: relative;
    }
    .medical-information .select-type-medical span::before {
        content: ' ';
        display: block;
    }
    .medical-information .select-type-medical input[type="radio"] {
        opacity: 0;
        visibility: hidden;
        z-index: -20;
        position: absolute;
    }
</style>
<div id="profile" class="profile main">
    <div class="container-fluid">
        <div class="row">
            <?php
                include('sider-bar.php');
            ?>
            <form action="#" method="">
                <div class="col-lg-9 col-md-9 col-sm-9 col-12 wrap-content">
                    <div class="row plandetails-subscription">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 group-subscription">
                            <h1 class="title title-main"><?php _e("Mein Profil", "medhotline"); ?></h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 group-subscription">
                            <div class="gradient"><a href="javascript:void(0);" class="border-gradient"><span>Profil bearbeiten</span></a></div>
                        </div>
                    </div>
                    <!-- Mein Profil -->
                    <div class="row plandetails-subscription full-name">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <label for="name">Name</label>
                            <input class="border-8" type="text" id="name" name="name" value="John" />
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <label for="first-name">Vorname</label>
                            <input class="border-8" type="text" id="first-name" name="first-name" value="Smith" />
                        </div>
                    </div>
                    <!-- Full-name  -->
                    <div class="row plandetails-subscription date">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12"><label>Geburtsdatum</label></div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!-- <div class="row sub-field">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    <label for="day">DD</label>
                                    <input class="border-8" type="text" id="day" name="day" value="25" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    <label for="month">MM</label>
                                    <input class="border-8" type="text" id="month" name="month" value="09" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    <label for="year">YYYY</label>
                                    <input class="border-8" type="text" id="year" name="year" value="1985" />
                                </div>
                            </div> -->
                            <div class="row sub-field">
                                <div class="col-sm-6">
                                    <label for="day">DD/MM/YYYY</label>
                                    <input class="border-8" type="text" id="day" name="day" value="25/09/1985" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Date  -->
                    <div class="row plandetails-subscription sex">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                            <label for="sex">Sex</label>
                            <select id="sex" class="border-8">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <!-- Sex -->
                    <div class="row plandetails-subscription email">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                            <label for="email">E-Mail</label>
                            <input class="border-8" type="email" id="email" name="email" value="john.smith@mymail.com" />
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="row plandetails-subscription password">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                            <label for="pwd">Passwort</label>
                            <input class="border-8" type="password" id="pwd" name="pwd" minlength="8" />
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="row plandetails-subscription phone">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                            <label for="phone">Telefonnummer</label>
                            <input class="border-8" type="text" id="phone" name="phone" value="54 654 54 87" />
                        </div>
                    </div>
                    <!-- Password -->
                    <!-- Address -->
                    <div class="row plandetails-subscription address">
                        <div class="col-md-3 col-sm-5">                            
                            <label for="land">Land</label>
                            <select name="land" id="land" class="select2-field">
                                <option value="">Wählen Sie ein Land / eine Region...</option>
                                <?php $country = arg_country();
                                foreach($country as $country_item) {
                                    echo '<option value="'.$country_item['key'].'">'.$country_item['value'].'</option>';
                                }
                                 ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-5">                            
                            <label for="city">Stadt</label>
                            <input class="border-8" type="text" id="city" name="city" value="" />
                        </div>
                        <div class="col-md-3 col-sm-5">                            
                            <label for="address">Adresse</label>
                            <input class="border-8" type="text" id="address" name="address" value="" />
                        </div>
                    </div>
                    <!-- Address -->
                    <!-- Medical information -->
                    <div class="row plandetails-subscription medical-information">
                        <div class="col-md-12">
                            <h2 class="title-h2">FREIWILLIGE MEDIZINISCHE ANGABEN</h2>
                            <div class="row">
                                <div class="col-sm-5 select-type-medical">
                                    <label>
                                        <input type="radio" name="type_check" value="Allergien" checked>
                                        <span>Allergien</span>
                                    </label>
                                    <div class="field-text">
                                        <input class="border-8" type="text" value="" name="allergies_text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 select-type-medical">
                                    <label>
                                        <input type="radio" value="Medikamente" name="type_check">
                                        <span>Medikamente</span>
                                    </label>
                                    <div class="d-none field-text">
                                        <input class="border-8" type="text" value="" name="medication_text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 select-type-medical">
                                    <label>
                                        <input type="radio" name="type_check" value="Voroperationen">
                                        <span>Voroperationen</span>
                                    </label>
                                    <div class="d-none field-text">
                                        <input class="border-8" type="text" value="" name="previous_operations_text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 text-information">
                                    <label>Voroperationen</label>
                                    <textarea class="border-8" name="text_info"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Medical information -->
                </div>
            </form>
        </div>
    </div>
</div>

<?php

get_footer('no-review');

?>
<script>
    jQuery(document).ready(function($){
        if($('.select2-field').length) {
            $('.select2-field').select2();
        }
        if($('#sex').length) {
            $('#sex').select2({
                minimumResultsForSearch: -1
            });
        }
    });
</script>