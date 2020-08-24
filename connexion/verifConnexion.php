<?php
session_start();
require_once './connect_db.php';
if(!empty($_POST)){
    $userinfo = [];

    if(!empty($_POST['mail'])&& !empty($_POST['mdp'])){
        $mailconnect = htmlspecialchars($_POST['mail']);

        $pswdconnect =  sha1($_POST['mdp']);
        $requser = $db->prepare("SELECT * FROM membre WHERE  mail = ? and mdp = ? ");
        $requser->execute(array($mailconnect,$pswdconnect));

        $userinfo = $requser->fetch();

    }
    else{
        $error = "Tous les champs doivent être complété";
        exit();
    }
    if(!empty($userinfo)){

        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['prenom'] = $userinfo['prenom'];
        $_SESSION['mail'] = $userinfo['mail'];
        header("Location: index.php?id=".$_SESSION['id']);


    }
    else{

        $error =  "Mauvais mail ou mot de passe";
    }

}
?>