<?php

    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbuser = 'contacts';


    try {
        $dns = "mysql:host=".$host.";dbname=".$dbuser;
        $pdo = new PDO($dns, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        printf("Echec de la connexion : %s\n", $e->getMessage());
        exit();
    }
  