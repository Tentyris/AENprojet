<?php
require_once '../connexion/src/bootsrap.php';
require_once '../views/header.php';
require_once 'connect_db.php';
?>

<script src="createFileds.js">    </script>


    <div class="container">
        <h1>Faites vos réservations</h1>

        <form id = "formresa" class="formresa" action="" method="post">
            <div class="form-control">
                <select class=" js-service">
                    <option class="Service" name="" value="">Sélectionner </option>
                    <option class="Service" name="lecon" value="lecon"> Leçon </option>
                    <option class="Service"  name="landing" value="atterissage"> Atterissage</option>
                    <option class="Service" name="parking" value="parking"> Parking</option>
                    <option class="Service"  name ="filling" value="carburant"> Carburant</option>
                    <option class="Service"  name ="ulm" value="ulm"> Location ULM</option>
                    <option class="Service" name="cleaning" value="nettoyage"> Nettoyage</option>
                    <option class="Service" name="firsttime" value="bapteme"> Baptêmes de L'air </option>
                </select>

            </div>

        </form>

    </div>






















<?php require_once '../views/footer.php'; ?>
