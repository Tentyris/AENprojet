<?php

require_once 'connect_db.php';
$id = $_GET['id'];


$q = 'DELETE FROM ulm where id = ?';
$req = $db->prepare($q);

$req->execute(array( $id));
