


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



<?php

require __DIR__ . "/../vendor/autoload.php";
$client = new \GuzzleHttp\Client();
try {
    $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/forecast?q=Paris,fr&mode=json&appid=cf75fc0a5c64cdc036d02b971d4f9b69');
    $return = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
    dump($return);

    for ($i=0; $i< 15; $i++){
        $datas=[];
        foreach ($return['list'][$i] as $key=>$value){
            if ($key==="weather"){
                $datas["weather"] = $value[0]["main"];
            }
            if ($key==="wind"){
                $datas["wind"]=$value["speed"]*3.6;
            }
            if ($key ==="dt_txt")
            {
                $datas["date"]=$value;
            }
            if ($key==="main"){
                $datas["temp"]=$value["temp"]-273.15 ;
            }



            if(count($datas)===4)
            {
                break;
            }


        }
        $datas['date'] = new DateTime($datas['date']);
        ?>
        <div style="width: 30%; display : inline-block; height: 30%; padding-left: 25px;">
        <div class="list-group-item active" >
            Météo
        </div>
        <ul class="list-group" style="padding-top: 12px; list-style: none">

            <li class="list-group"> jour&heure: <?= $datas['date']->format("d.m.Y H:i:s") ?></li>
            <li class="list-group"> météo : <?= $datas["weather"] ?></li>
            <li class="list-group">vitesse vent : <?= $datas["wind"] ?></li>
            <li class="list-group"> température : <?=$datas["temp"]?></li>
        </ul>
        </div>
        <?php
    }

} catch (\GuzzleHttp\Exception\GuzzleException $e) {
}
