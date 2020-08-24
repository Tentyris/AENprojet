<?php

require_once 'connect_db.php';

if (isset($_POST['update'])) {
    echo  $cap_carbu = htmlspecialchars($_POST['cap_carbu']);
    if (!empty($_POST['model']) && !empty($_POST['ga']) && !empty($_POST['type']) && !empty($_POST['nbp'])  && !empty($_POST['park']) && !empty($_POST['cap_carbu']) && !empty($_POST['conso_carbu'])) {

        $model = htmlspecialchars($_POST['model']);
        $ga = htmlspecialchars($_POST['ga']);
        $type = htmlspecialchars($_POST['type']);
        $nbp = htmlspecialchars($_POST['nbp']);
        $park = htmlspecialchars($_POST['park']);
        $cap_carbu = htmlspecialchars($_POST['cap_carbu']);
        $conso_carbu = htmlspecialchars($_POST['conso_carbu']);


        $q = 'INSERT INTO avion (model,groupe_acoustique,type, nb_place,stationnement, reservoir_carburant, consomation_carburant) VALUES (?,?,?,?,?,?,?)';

        $req = $db->prepare($q);
        $req->execute(array(
            $model, $ga, $type, $nbp, $park, $cap_carbu, $conso_carbu
        ));

    } else {

        echo '<div color=red>' . $error = "Veuillez remplir tous les champs  " . '</div>';


    }
}