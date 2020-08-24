<?php
require_once './connect_db.php';



?>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form method="POST" class="form-horizontal" action="verif_inscription.php">
    <fieldset>

        <!-- Form Name -->
        <h3>Inscription </h3>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Prénom</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Prénom" class="form-control input-md" required="" value="<?php if(isset($fn)

                ) {echo $fn;}?>">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Nom de famille</label>
            <div class="col-md-4">
                <input id="ln" name="ln" type="text" placeholder="Nom de Famille" class="form-control input-md" required="" value="<?php if(isset($ln)

                ) {echo $ln;}?>">

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="age">age</label>
                <div class="col-md-4">
                    <input id="age" name="age" type="text" placeholder="age" class="form-control input-md" required="" value="<?php if(isset($age)

                    ) {echo $age;}?>">

                </div>
            </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="mail" placeholder="email" class="form-control input-md" required="" value="<?php if(isset($mail)

                ) {echo $mail;}?>">

            </div>
        </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Confirmez votre email</label>
                <div class="col-md-4">
                    <input id="emailconfim" name="emailconfirm" type="mail" placeholder="email" class="form-control input-md" required="" value="<?php if(isset($mailconfirm)
                    ) {echo $mailconfirm;}?>">
                </div>
            </div>


            <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add1">Adresse </label>
            <div class="col-md-4">
                <input id="add" name="add" type="text" placeholder="Adresse" class="form-control input-md" required="" value="<?php if(isset($add)

                ) {echo $add;}?>">

            </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">Ville</label>
            <div class="col-md-4">
                <input id="ville" name="ville" type="text" placeholder="city" class="form-control input-md" required="" value="<?php if(isset($city)

                ) {echo $city;}?>">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="zip">Code postal</label>
            <div class="col-md-4">
                <input id="zip" name="zip" type="number" placeholder="Code postal" class="form-control input-md" required="" value="<?php if(isset($zip)

                ) {echo $zip;}?>">

            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="phone">Numéro de téléphone</label>
            <div class="col-md-4">
                <input id="phone" name="phone" type="number" placeholder="téléphone" class="form-control input-md" required="" value="<?php if(isset($phone)

                ) {echo $phone;}?>"
                >

            </div>
        </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="phone">Mot de passe</label>
                <div class="col-md-4">
                    <input id="mdp" name="mdp" type="password" placeholder="mot de passe" class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="phone">Confirmez votre Mot de passe</label>
                <div class="col-md-4">
                    <input id="mdpconfirm" name="mdpconfirm" type="password" placeholder="mot de passe" class="form-control input-md" required="">

                </div>
            </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="forminsciption" type="submit" class="btn btn-primary">SUBMIT</button>

            </div>
        </div>

    </fieldset>
</form>

</html>