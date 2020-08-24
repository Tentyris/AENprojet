<?php
require_once './connect_db.php';
$quer = $db->prepare("SELECT model,loueur ,disponibilite,Stationnement,reservoir_carburant,consomation_carburant FROM  ulm where id = ?");
$quer->execute(array($_GET['id']));
$a = $quer->fetch();

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="verifUlm.php">
    <fieldset>

        <!-- Form Name -->
        <legend>ULM </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Modèle</label>
            <div class="col-md-4">
                <input id="model" name="model" type="text" placeholder="Modèle" class="form-control input-md" required="" value="<?= $a['model']?>">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Loueur</label>
            <div class="col-md-4">
                <input id="rent" name="rent" type="text" placeholder="Loueur " class="form-control input-md" required="" value="<?=$a['loueur']?>">

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="age">Stationement </label>
                <div class="col-md-4">
                    <input id="park" name="park" type="text" placeholder="nbp" class="form-control input-md" required="" value=" <?=$a['Stationnement']?>">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Disponibilité</label>
                <div class="col-md-4">
                    <input id="dispo" name="dispo" type="text" placeholder="email" class="form-control input-md" required="" value="<?=$a['disponibilite']?>">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="add1">capacité carburant </label>
                <div class="col-md-4">
                    <input id="cap_carbu" name="cap_carbu" type="text" placeholder="réservoir" class="form-control input-md" required="" value="<?=$a['reservoir_carburant']?>">

                </div>
            </div>



            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="city">Consomation carburant</label>
                <div class="col-md-4">
                    <input id="ville" name="ville" type="text" placeholder="city" class="form-control input-md" required="" value="<?=$a['consomation_carburant']?>">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Mettre à jour</button>

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary"> suppression</button>

                </div>
            </div>

    </fieldset>
</form>