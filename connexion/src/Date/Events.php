<?php
session_start();

class Events
{

    public function getEventsBetween(DateTime $start, DateTime $end) :array {

    $pdo = new PDO('mysql:host=localhost;dbname=ane','root','',[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC]);
    $sql = "SELECT * FROM service WHERE horraire_debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";

    $statement = $pdo->query($sql);
    $results = $statement->fetchAll();


        return $results;
    }

    public function getEventsBetweenByDay(DateTime $start, DateTime $end) :array {
        $events  = $this->getEventsBetween($start,$end);
        $days = [];
        foreach ($events as $event) {
            $date = explode(' ',$event['horraire_debut'])[0];

            if (!isset($days[$date])){
                $days[$date] = [$event];
            }
            else{
                $days[$date][] = $event;
            }
        }
        return $days;
    }

    public function find(int $id){



        require_once './Event.php';
        $pdo = new PDO('mysql:host=localhost;dbname=ane','root','',[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC]);
       $statement =  $pdo->query("SELECT * FROM  service where id_service = '$id' LIMIT 1");
       $statement->setFetchMode(PDO::FETCH_CLASS,Event::class);
       $result = $statement->fetch();

        if($result=== false){
            throw new Exception("  Aucun résultat n\'a été trouvé");
        }
        return $result;


}

}