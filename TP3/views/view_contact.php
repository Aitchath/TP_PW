<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations du contact</title>
    <link rel="stylesheet" href="../css/view_contact.css">

</head>
<body>

            <?php 
                require '../controllers/ViewContactController.php';
            ?>

    <div class="container">
        <div class="header">
            <div class="avatar">
                <?php 
                    echo strtoupper(substr($contact->getNom(), 0, 1)) . strtoupper(substr($contact->getPrenom(), 0, 1));                       
                ?>
            </div>
            <h1 class="contact-name">
                <?php echo htmlspecialchars(string: $contact->getNom()); ?> <?php echo htmlspecialchars(string: $contact->getPrenom()); ?>
            </h1>
        </div>

        <div class="content">
            <div class="section">
                <h2 class="section-title">Coordonnées</h2>
                
                <div class="info-item">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Email</div>
                        <div class="info-value">
                            <a href="mailto:sophie.martin@email.com">
                                <?php echo htmlspecialchars(string: $contact->getEmail()); ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Téléphone</div>
                        <div class="info-value">
                            <a href="tel:+33612345678">
                                <?php echo htmlspecialchars(string: $contact->getTelephone()); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="actions">
            <a href="/views/edit_contact.php?id=<?= $_GET['id']?>" class="btn btn-primary">
                <svg viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
                Modifier
            </a>

            <a href="/views/home.php" class="btn btn-secondary">
                ← Retour
            </a>

            <a href="/views/delete_contact.php?id=<?= $_GET['id']?>" class="btn btn-danger">
                <svg viewBox="0 0 24 24" stroke="currentColor">
                    <polyline points="3 6 5 6 21 6"/>
                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                </svg>
                Supprimer
            </a>
        </div>
    </div>

</body>
</html>