<?php
    require_once('../db.php');

    function existe(PDO $pdo, $login, $password): bool {

        $requete = "SELECT * FROM users WHERE login= :login";
        $pdostat = $pdo->prepare( $requete);
        $pdostat->bindValue(':login', $login);
        $pdostat->execute();
        $user = $pdostat->fetch(PDO::FETCH_ASSOC);

        if($user) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $verify = password_verify($user['password'], $hash);
            if($verify) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        
    }
?>
