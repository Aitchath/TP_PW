<?php

require '../config/config.php';
require '../classes/DAO/ContactDAO.php';

            if (!isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'])) {
                throw new Exception('Données du formulaire manquantes.');
            } else {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $contactDAO = new ContactDAO($pdo);
                $contactDAO->create($nom, $prenom, $email, $telephone);

                if ($contactDAO) {
                    header('Location: /views/home.php');
                    exit();
                } else {
                    throw new Exception('Erreur lors de la création du contact.');
                }
            }
