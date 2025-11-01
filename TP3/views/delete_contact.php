<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de suppression</title>
    <link rel="stylesheet" href="../css/delete_contact.css">
   
</head>
<body>

    
        <?php 
            require '../controllers/ViewContactController.php';
            require '../config/config.php' 
        ?>

    <div class="container">
        <div class="icon-container">
            <svg viewBox="0 0 24 24">
                <path d="M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m3 0v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6h14z"/>
                <line x1="10" y1="11" x2="10" y2="17"/>
                <line x1="14" y1="11" x2="14" y2="17"/>
            </svg>
        </div>

        <h1>Confirmer la suppression</h1>
        <p>Êtes-vous sûr de vouloir supprimer ce contact ? Cette action est irréversible et toutes les données associées seront définitivement perdues.</p>

        <div class="item-info">
            <strong>Contact à supprimer :</strong>
            <div class="item-name">
                <?php echo htmlspecialchars(string: $contact->getNom()); ?> <?php echo htmlspecialchars(string: $contact->getPrenom()); ?>
            </div>
        </div>

        <form method="POST" action="../controllers/DeleteContactController.php?id=<?= htmlspecialchars($_GET['id']); ?>">
            <div class="button-group">
                <a href="/views/home.php" class="btn btn-cancel">Annuler</a>
                <button class="btn btn-delete">Supprimer</button>
            </div>
        </form>
    </div>

</body>
</html>