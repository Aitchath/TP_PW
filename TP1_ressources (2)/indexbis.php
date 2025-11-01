<?php
 require '/classes/Compte.php';

 if(isset($_GET['login']) && isset($_GET['password'])) {
    $login = $_GET['login'];
    $password = $_GET['password'];
    $compte = new Compte($login, $password);
    echo "Le login masqué est : " .$compte->masquerLogin($compte->getLogin());
 } else {
    echo "Veuillez fournir un login et un mot de passe.";
 }

?>
