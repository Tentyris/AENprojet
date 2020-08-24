<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=ane;port=3306', 'root', '');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage();

}