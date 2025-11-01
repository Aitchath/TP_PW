<?php

    require '../config/config.php';
    require '../classes/DAO/ContactDAO.php';

    $contactDAO = new ContactDAO($pdo);
    $search = isset($_GET['search']) ? trim($_GET['search']) : '';

    if (!empty($search)) {
        $contacts = $contactDAO->search($search);
    } else {
        // récupère tous les contacts
        $contacts = $contactDAO->index(); 
    }
