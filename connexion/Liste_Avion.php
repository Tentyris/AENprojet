<?php
require_once __DIR__ . '/connect_db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AEN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 20%;
            padding-top:10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="connexionform.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">

        </div>

        <div class="col-sm-8 text-left">
            <h1>Nos Avions</h1>
            <?php
            $quer= $db->prepare("SELECT  id,model,type,image FROM  avion");
            $quer->execute();
            $result = $quer->fetchAll();

            foreach ($result as $plane) {
                echo "<div class='card'>" .
                    "<a href='avion_form.php?id=$plane[0]'>"."<img src=" . $plane[3] . " alt='Plane' style='width:100%'></a>" .
                    "<div class='container'>" .
                    "<h4><b>" . $plane[1] . "</b></h4>" .
                    "<p>" . $plane[2] . "</p>" .
                    "</div>" .
                    "</div>";


            }

    ?>
        </div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
