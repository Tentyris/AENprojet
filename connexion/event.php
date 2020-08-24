<?php

require '../connexion/src/bootsrap.php';

require '../connexion/src/Date/Events.php';
require '../connexion/src/Date/Event.php';
$events = new Events();

if (!isset($_GET['id'])){
    header('location: 404.php');
}
try{
    $event = $events->find($_GET['id']);
} catch ( Exception $e){
    header('location : 404.php');
}
require '../views/header.php';
?>

<h1> <?= $event->getNomService()?></h1>

<ul>
    <li>Date : <?= $event->getHorraireDebut()->format('d/m/y');?></li>
    <li>Heure de démarrage : <?= $event->getHorraireDebut()->format('H:i');?></li>
    <li>Heure de Fin : <?= $event->getHorraireFin()->format('H:i');?></li>
    <li>Demandeur: <?=  $event-> getPrenomDemandeur()?> <?=  $event->getNomDemandeur()?> </li>
    <li>Prix: <?= $event->getPrix();?></li>
</ul>

<?php

require '../views/footer.php'

?>




