


<?php

session_start();
require '../connexion/src/bootsrap.php';
require_once '../connexion/src/Date/Month.php';
require_once '../connexion/src/Date/Events.php';
try {
    $pdo = get_pdo();
    $events = new Events();
    $month = new Month($_GET['month'] ?? null, $_GET['year']??null);
    $start= $month->getFirstDay();
    $start = $start->format('N')==='1' ?$start :  $month->getFirstDay()->modify('last monday');
    $weeks =$month->getWeeks();
    $end = (clone $start)->modify('+'.(6+ 7*($weeks -1)).'days');
    $events = $events->getEventsBetweenByDay($start,$end);
    require '../views/header.php';

} catch (Exception $e) {

   $month = new Month();
} ?>
<div class="calendar">
    <div class="d-flex flex-row align-items-center justify-content-between mx-sm-3">
        <h1> <?= $month->toString()?> </h1>
        <div>
            <a href="CalandrierLecçon.php?month=<?=$month->previousMonth()->month;?>&year=<?= $month->previousMonth()->year?>" class = "btn btn-primary">&lt;</a>
            <a href="CalandrierLecçon.php?month=<?=$month->nextMonth()->month;?>&year=<?= $month->nextMonth()->year?>"  class = "btn btn-primary">&gt;</a>
        </div>
    </div>

    <table class="calendar__table calendar__table--<?= $weeks;?>weeks">
        <?php for ($i = 0; $i<$weeks; $i++):
            ?>
            <tr>
                <?php
                foreach ($month->days as $key => $day):
                    $date = (clone $start)->modify("+".($key+$i*7). "days");
                    $eventsForDay = $events[$date->format('Y-m-d')]?? [];
                    ?>

                    <td class=" <?= $month->inMonth($date) ? '':  'canlendar_othermonth';?>">
                        <?php if ($i === 0):?>
                            <div class="calendar__weekday"><?= $day?> </div>
                        <?php endif;?>
                        <div class="calendar__day"><?= $date->format('d'); ?></div>
                        <?php foreach ($eventsForDay as $event): ?>
                            <div class="calendar__event">

                                <?= (new DateTime($event['horraire_debut']))->format('H:i')?> - <a href="event.php?id=<?= $event['id_service']?>"><?= $event['nom_service']?></a>
                            </div>
                        <?php endforeach;?>
                    </td>
                <?php endforeach;?>
            </tr>
        <?php endfor;?>

    </table>

    <a href="reservation.php" class="calendar__button">+</a>

</div>
<?php
require '../views/footer.php'

?>