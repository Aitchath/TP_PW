<?php
    require '../config/config.php';
    require '../classes/DAO/ContactDAO.php';

        $id = $_GET['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $contactDAO = new ContactDAO($pdo);
        $contact = $contactDAO->edit($id, $nom, $prenom, $email, $telephone);
        if ($contactDAO) {
            header('Location: /views/home.php');
            exit();
        } else {
            throw new Exception('Erreur lors de la mise à jour du contact.');
        }
