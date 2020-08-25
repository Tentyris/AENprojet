<?php
require_once '../connexion/src/bootsrap.php';
require_once '../views/header.php';
require_once './connect_db.php';
session_start();




if(!empty($_POST['name'])&& !empty($_POST['firstname']) && !empty($_POST['day']) && !empty($_POST['hour'])&& !empty($_POST['ga']) && !empty($_POST['typePlane'])) {


    $name = htmlspecialchars($_POST['name']);
    $firstName =htmlspecialchars( $_POST['firstname']);
    $day =htmlspecialchars( $_POST['day']);
    $hour = htmlspecialchars( $_POST['hour'].':00');
    $ga = htmlspecialchars($_POST['ga']);
    $typePlane = htmlspecialchars($_POST['typePlane']);
    $coef_ga = 0;
    $service = "Atterissage";


    switch ($typePlane){
        case 'Mono-turbine' :
            $price = 34.50;

            break;
        case 'Bi-turbine' :
            $price = 34.50;
            break;
        case 'Mono-reacteur':
            $price = 41.17;
            break;
        case 'Multi-reacteur':
            $price = 41.17;
            break;

        default:
            echo '<div style="color: red">Veuillez rentrer un avion valide</div>';
            echo '<a href="reservation.php"> retour au formulaire</a>';
    }

    }
    $price =  $price+($price*0.2);
    var_dump($price);

    switch ($ga){

        case '1':
            if( $hour>='06:00:00' && $hour <= '22:00:00'){

            $coef_ga = 1.3;

        }else{
            $coef_ga = 4.0;

        }
            break;
        case '2' :
            if($hour>='06:00:00' && $hour <= '22:00:00'){
                $coef_ga = 1.2;

            } else{
                $coef_ga = 1.8;

            }
        break;

        case '3' :

            if( $hour>='06:00:00' && $hour <= '22:00:00'){
                $coef_ga = 1.15;

            } else{
                $coef_ga = 1.725;

            }
        break;

        case '4' :
            if($hour>='06:00:00' && $hour <= '22:00:00'){
                $coef_ga = 1;

            } else{
                $coef_ga = 1.5;

            }
         break;
        case '5a':
            if (  $hour>='06:00:00' && $hour <= '22:00:00' ){
                $coef_ga = 0.850;

            }else{
                $coef_ga = 1.275;


            }
        break;
        case '5b':
            if ($hour>='06:00:00' && $hour <= '22:00:00' ){
                $coef_ga = 0.700;

            }else{
                $coef_ga = 1.050;
            }
        break;

        default :
            echo '<div style="color: red">Veuillez rentrer un groupe accoustique valide</div>';
            echo '<a href="reservation.php"> retour au formulaire</a>';

     }

    $price = $price*$coef_ga;
    echo $price;



    $timezone = date_default_timezone_set('Europe/Paris');

    $today = date('Y-m-d');




    if ($day>$today){

        $resaTime = $day.' '.$hour;

        $quer= $db->prepare('SELECT horraire_debut, horraire_fin FROM service where nom_service = ?  and horraire_debut = ?');


        $quer->execute(array(
            $service,$resaTime
        ));
        $result = $quer->rowCount();
        var_dump($resaTime);

        if ($result ===0){
            echo $resaTime;
            header('Location: insertLanding.php?name='.$name.'&firstname='.$firstName.'&price='.$price.'&ga='.$ga.'&resaTime='.$resaTime.'&date='.$day.'&typePlane='.$typePlane.'&service='.$service);

        }else {
            echo ' <div>Il y a déjà un atterrissage prévu à cette heure là </div>';
            echo '<a href="reservation.php"> retour au formulaire</a>';

        }


    }
    else{

        echo '<div> vous devez rerserver au moins 24h avant </div>';
        echo '<a href="reservation.php"> retour au formulaire</a>';
    }




?>
