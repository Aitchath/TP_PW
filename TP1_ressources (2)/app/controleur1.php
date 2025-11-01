<?php
    require_once "../classes/Compte.php";
    require_once "model.php" ;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $compte = new Compte($login, $password);
        
        if(existe($pdo, $login, $password)) {
            return header('Location: /app/home.php');
        } else {
            return header('Location: /app/login.php?err=Indentifiants invalides');
        }
    } 



?>
