<?php
    
    require '../config/config.php';
    require '../classes/DAO/ContactDAO.php';

        $contactDAO = new ContactDAO($pdo);
        $contact = $contactDAO->show($_GET['id']);
