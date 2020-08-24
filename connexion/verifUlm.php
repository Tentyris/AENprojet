<?php
require_once 'connect_db.php';



    var_dump($_POST['dispo']);
    if (!empty($_POST['model']) && !empty($_POST['rent'])  && !empty($_POST['dispo'] ) || $_POST['dispo'] ==0  && !empty($_POST['parking']) && !empty($_POST['cap_carbu']) && !empty($_POST['conso_carbu'])) {
        $id = htmlspecialchars($_GET['id']);
        $dispo = htmlspecialchars($_GET['dispo']);
        $rent = htmlspecialchars($_GET['rent']);
        $model = htmlspecialchars($_GET['model']);
        $parking = htmlspecialchars($_GET['parking']);
        $cap_carbu = htmlspecialchars($_GET['cap_carbu']);
        $conso_carbu = htmlspecialchars($_GET['conso_carbu']);


        if ( $dispo == '0'){
            $dispo = 0;
        }else{
            $dispo = 1;
        }
        $q = 'UPDATE ulm SET model = ?, disponible = ?, stationnement = ?, reservoir_carburant = ?, consomation_carburant = ? WHERE id = ?';
        $req = $db->prepare($q);
        $req->execute(array(
            $model,  $dispo, $parking, $cap_carbu, $conso_carbu, $id
        ));

    } else {

        echo '<div color=red>' . $error = "Veuillez remplir tous les champs  " . '</div>';



}


