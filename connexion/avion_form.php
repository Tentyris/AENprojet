<?php
require_once './connect_db.php';

$quer = $db->prepare("SELECT model, groupe_acoustique,type,nb_place,disponible,stationnement,image,utilisation,reservoir_carburant,consomation_carburant FROM  avion where id = ?");
$quer->execute(array($_GET['id']));
$a = $quer->fetch();


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php

var_dump($_GET['id']);

?>
<form method="POST" class="form-horizontal" action='verifAvion.php/?id=<?= $_GET['id']?>'>

    <fieldset>

        <!-- Form Name -->
        <legend>Avion </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Modèle</label>
            <div class="col-md-4">
                <input id="model" name="model" type="text" placeholder="Modèle" class="form-control input-md" required="" value="<?=$a['model']?>">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Groupe acoustique</label>
            <div class="col-md-4">
                    <input id="ga" name="ga" type="number" placeholder="Groupe Acoustique " class="form-control input-md" required="" value="<?=$a['groupe_acoustique']?>">

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="ln">Type</label>
                <div class="col-md-4">
                    <input id="type" name="type" type="text" placeholder="Groupe Acoustique " class="form-control input-md" required="" value="<?=$a['type']?>">

                </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="age">Nombre de place</label>
                <div class="col-md-4">
                    <input id="nbp" name="nbp" type="number" placeholder="nbp" class="form-control input-md" required="" value="<?=$a['nb_place']?>">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Disponibilité</label>
                <div class="col-md-4">
                    <input id="dispo" name="dispo" type="number" placeholder="email" class="form-control input-md" required="" value="<?=$a['disponible']?>">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="add1">Stationnement</label>
                <div class="col-md-4">
                    <input id="park" name="park" type="text" placeholder="hangar" class="form-control input-md" required=" value="<?=$a['stationnement']?>">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="zip">reservoir carburant</label>
                <div class="col-md-4">
                    <input id="cap_carbu" name="cap_carbu" type="number" placeholder="Code postal" class="form-control input-md" required=""value="<?=$a['reservoir_carburant']?>">

                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="phone">Consomation de Carburant</label>
                <div class="col-md-4">
                    <input id="conso_carbu" name="conso_carbu" type="number" placeholder="téléphone" class="form-control input-md" required=""value="<?=$a['reservoir_carburant']?>">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="update" class="btn btn-primary">Mettre à jour</button>

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="suppress" name="suppress" class="btn btn-primary"  formaction="suppress_plane.php?id=<?= $_GET['id']?>"> suppression</button>

                </div>
            </div>

    </fieldset>
</form>