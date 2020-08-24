<?php

require_once './connect_db.php';

if (isset($_POST['forminsciption'])) {
    $fn = htmlspecialchars($_POST['fn']);
    $ln = htmlspecialchars($_POST['ln']);
    $age = htmlspecialchars($_POST['age']);
    $mail = htmlspecialchars($_POST['email']);
    $mailconfirm = htmlspecialchars($_POST['emailconfirm']);
    $add = htmlspecialchars($_POST['add']);
    $city = htmlspecialchars($_POST['ville']);
    $zip = htmlspecialchars($_POST['zip']);
    $phone = htmlspecialchars($_POST['phone']);
    $pswd = sha1($_POST['mdp']);
    $pswdconfirm = sha1($_POST['mdpconfirm']);
    $pswdlength = strlen($pswd);
    if (!empty($_POST['fn']) AND !empty($_POST['ln']) AND !empty($_POST['age']) AND !empty($_POST['email']) AND !empty($_POST['emailconfirm']) AND !empty($_POST['add']) AND !empty($_POST['ville'])
        AND !empty($_POST['zip']) AND !empty($_POST['phone']) AND !empty($_POST['mdp']) AND !empty($_POST['mdpconfirm'])) {
        echo "ok";
        if ($pswd < 8) {
            if ($mail === $mailconfirm) {
                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $db->prepare("SELECT * FROM membre where mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if ($mailexist == 0) {
                        if ($pswd === $pswdconfirm) {
                            $q = 'INSERT INTO membre (mail,mdp,prenom,nom,age,adresse,Ville,code_postal,telephone)VALUES (?,?,?,?,?,?,?,?,?)';
                            $req = $db->prepare($q);
                            $req->execute(array(
                                $mail, $pswd, $fn, $ln, $age, $add, $city, $zip, $phone
                            ));
                            $_SESSION['account_created'] = "Votre compte a bien été créé";
                            header('location:index.php');
                        } else {
                            $error = "Les deux adresses deux ne correspondent pas";
                        }
                    } else {
                        echo "votre email n'est pas valide";
                    }
                } else {
                    $error = "Les deux adresses mail ne correspondent pas";
                }
            }else {
                    $error = "votre mot de passe est trop court veuillez mettre au moins 8 catactère";
                }
            }


    } else {

        echo '<div color=red>' . $error = "Veuillez remplir tous les champs  " . '</div>';
    }
}
