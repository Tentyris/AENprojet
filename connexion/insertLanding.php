<?php

session_start();
require_once ('connect_db.php');
$name = htmlspecialchars( $_GET['name']);
$firstname = htmlspecialchars($_GET['firstname']);
$price =htmlspecialchars( $_GET['price']);
$ga = htmlspecialchars($_GET['ga']);
$resaTime = htmlspecialchars( $_GET['resaTime']);
$resaend = Explode($resaTime," ");
$resaend[1]+30  ;
$resaend =Implode($resaTime,":");
$date = htmlspecialchars( $_GET['date']);
$typePlane = htmlspecialchars( $_GET['typePlane']);
$service = htmlspecialchars($_GET['service']);

$q = 'INSERT INTO service (nom_demandeur,prenom_demandeur,nom_service,prix,horraire_debut,horraire_fin,type,date,accompagnant) VALUES (?,?,?,?,?,?,?)';

$req = $db->prepare($q);
$req->execute(array(
$name, $firstname,$service,$price,$resaTime
));