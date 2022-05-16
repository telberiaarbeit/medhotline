<?php

/* 

Template Name: Profile 

*/

get_header('account');

?>

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
                            <div class="row sub-field">
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
                </div>
            </form>
        </div>
    </div>
</div>

<?php

//get_footer('no-review');



?>