<?php
        require '../config/config.php';
        require '../classes/DAO/ContactDAO.php';

            $id = $_GET['id'];
            echo $id;
            $contactDAO = new ContactDAO($pdo);
            $contactDAO->delete($id);
            if ($contactDAO) {
                    header('Location: /views/home.php');
                    exit();
            } else {
                throw new Exception('Erreur lors de la suppression du contact.');
            }
