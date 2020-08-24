


<?php
require_once '../connexion/src/bootsrap.php';
require_once '../views/header.php';
require_once './connect_db.php';
session_start();


if(!empty($_POST['name'])&& !empty($_POST['firstname']) && !empty($_POST['day']) && !empty($_POST['hour'])) {


    $name = htmlspecialchars($_POST['name']);
    $firstName =htmlspecialchars( $_POST['firstname']);
    $day =htmlspecialchars( $_POST['day']);
    $hour = htmlspecialchars( $_POST['hour'].':00');
    $price = 300;


    $service = "bapteme";


    $timezone = date_default_timezone_set('Europe/Paris');

    $today = date('Y-m-d');




    if ($day>$today){

        $resaTime = $day.' '.$hour;

        $quer= $db->prepare('SELECT horraire_debut, horraire_fin FROM service where nom_service = ?  and horraire_debut = ?');


        $quer->execute(array(
            $service,$resaTime
        ));
        $result = $quer->rowCount();
        var_dump($result);

        if ($result ===0){

            echo 'bite';

            header('Location: payment.php?name='.$name.'&firstname='.$firstName.'&price='.$price);

        }else {
            echo 'pas possible y a déjà une leçon à cette heure là ';
            header('Location: reservation.php ');
        }


    }
    else{

        header('Location: reservation.php ');
    }

}


?>


