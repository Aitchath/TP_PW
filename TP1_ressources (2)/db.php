<?php
    $username = "root";
    $password = '';
    $host = '127.0.0.1';
    $dbname = 'tp_pw';
    $dns = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8";

    try{
        $pdo=new PDO($dns,$username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        printf("Echec de la connexion : %s\n", $e->getMessage());
        exit();
    }

?>
