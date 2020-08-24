<?php

require_once 'connect_db.php';

if (isset($_POST['update'])) {
   echo  $cap_carbu = htmlspecialchars($_POST['cap_carbu']);
    if (!empty($_POST['model']) && !empty($_POST['ga']) && !empty($_POST['type']) && !empty($_POST['nbp']) && (!empty($_POST['dispo'])  || $_POST['dispo'] ==0)  && !empty($_POST['park']) && !empty($_POST['cap_carbu']) && !empty($_POST['conso_carbu'])) {
        $id = htmlspecialchars($_GET['id']);
        $model = htmlspecialchars($_POST['model']);
        $ga = htmlspecialchars($_POST['ga']);
        $type = htmlspecialchars($_POST['type']);
        $nbp = htmlspecialchars($_POST['nbp']);
        $dispo = htmlspecialchars($_POST['dispo']);
        $park = htmlspecialchars($_POST['park']);
        $cap_carbu = htmlspecialchars($_POST['cap_carbu']);
        $conso_carbu = htmlspecialchars($_POST['conso_carbu']);

        if ( $dispo == '0'){
            $dispo = 0;
        }else{
            $dispo = 1;
        }
        $q = 'UPDATE avion SET model = ?, groupe_acoustique = ?, type = ?, nb_place = ?, disponible = ?, stationnement = ?, reservoir_carburant = ?, consomation_carburant = ? WHERE id = ?';
        $req = $db->prepare($q);
        $req->execute(array(
            $model, $ga, $type, $nbp, $dispo, $park, $cap_carbu, $conso_carbu, $id
        ));

    } else {

        echo '<div color=red>' . $error = "Veuillez remplir tous les champs  " . '</div>';


    }
}


