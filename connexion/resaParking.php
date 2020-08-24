<?php


require_once '../connexion/src/bootsrap.php';
require_once '../views/header.php';
require_once './connect_db.php';
session_start();


if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['day']) && !empty($_POST['hour'])&& !empty($_POST['envergure'])&& !empty($_POST['longueur'])&& !empty($_POST['masse'])) {


    $name = htmlspecialchars($_POST['name']);
    $firstName = htmlspecialchars($_POST['firstname']);
    $day = htmlspecialchars($_POST['day']);
    $hour = htmlspecialchars($_POST['hour'] . ':00');
    $wingspan = htmlspecialchars($_POST['envergure']);
    $length = htmlspecialchars($_POST['longueur']);
    $mass = htmlspecialchars($_POST['masse']);
    $category = '';
    $size = $wingspan*$length;
    echo $size;

    if ($size>300){
        echo '<div> la taille dépasse 300m² </div>';
        echo '<a href="reservation.php"> retour au formulaire</a>';
    }
   if (($size <60 && $mass < 500)|| ($size <= 60 && $size <100 && $mass <500 ) || ($size <60 && $mass<=500&& $mass <1000)){

       $category = 'cat2';
   }elseif (($size <60 && 1000<$mass ) || ($size >=60 && $size<100 && $mass>=500 &&$mass <1000)||($size >=60 && $size<100 && $mass>1000) ||($size>100 &&$mass <500)|| ($size>100 && $mass>=500 &&$mass <1000)){
       $category = 'cat3';
   }else{
       $category = 'cat1';
   }
   echo $category;

   switch ($category){
       case 'cat1' :
           $price = 150.00;
           break;
       case 'cat2' :
           $price = 116.67;
           break;
       case 'cat3':
           $price = 70.83;
    }

   $price = $price+($price*0.2);
   echo $price;




    $service = "parking";


    $timezone = date_default_timezone_set('Europe/Paris');

    $today = date('Y-m-d');


    if ($day > $today) {

        $resaTime = $day . ' ' . $hour;

        $quer = $db->prepare('SELECT horraire_debut, horraire_fin FROM service where nom_service = ?  and horraire_debut = ?');


        $quer->execute(array(
            $service, $resaTime
        ));
        $result = $quer->rowCount();


        if ($result === 0) {

            $quer = $db->prepare('SELECT etat, dimension FROM hangar where dimension >= ? AND etat <>0');

            $quer->execute(array(
               $size
            ));

            $result = $quer->rowCount();
            if ($result >=1){
                $quer = $db->prepare('SELECT id  FROM hangar where place_restante >= ?');
                $quer->execute(array(
                    $size
                ));
                $result = $quer->rowCount();
                if ($result >=1){
                    //header('Location: payment.php?name=' . $name . '&firstname=' . $firstName . '&price=' . $price);
                    echo 'ok';
                }else{
                    echo '<div> Il n\'y a pas de hangar disponible pour votre avion </div>';
                    echo '<a href="reservation.php"> retour au formulaire</a>';
                }

            }else{
                echo '<div> Il n\'y a pas de hangar disponible pour votre avion </div>';
                echo '<a href="reservation.php"> retour au formulaire</a>';
            }




        } else {
            echo '<div> Il y a déjà une réservation à cette heure là </div>';
            echo '<a href="reservation.php"> retour au formulaire</a>';
        }
    }else{
        echo '<div> vous devez rerserver au moins 24h avant </div>';
        echo '<a href="reservation.php"> retour au formulaire</a>';
    } }
