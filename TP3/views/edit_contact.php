<?php
    require '../controllers/ViewContactController.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Contact</title>
    <link rel="stylesheet" href="../css/edit_contact.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>✏️ Modifier le Contact</h1>
            <p>Mettez à jour les informations du contact</p>
        </div>

        <div class="form-container">
            
            <form method="POST" action="../controllers/EditContactController.php?id=<?= htmlspecialchars($_GET['id']); ?>">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom <span>*</span></label>
                        <input 
                            type="text" 
                            id="nom" name="nom" 
                            placeholder="Ex: Dubois"  
                            value="<?php echo htmlspecialchars(string: $contact->getNom()); ?>" 
                        />
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom <span>*</span></label>
                        <input 
                            type="text" 
                            id="prenom"
                            name="prenom" 
                            placeholder="Ex: Marie" 
                            value="<?php echo htmlspecialchars(string: $contact->getPrenom()); ?>" 
                        />
                    </div>

                </div>

                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="exemple@email.fr" 
                        value="<?php echo htmlspecialchars($contact->getEmail()); ?>" 
                    />
                </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone <span>*</span></label>
                        <input 
                            type="tel" 
                            id="telephone" 
                            name="telephone" 
                            placeholder="06 12 34 56 78" 
                            value="<?php echo htmlspecialchars($contact->getTelephone()); ?>" 
                        />
                    </div>

                <div class="form-actions">
                    <a href="/views/home.php" class="btn btn-cancel">Annuler</a>
                    <button type="submit" class="btn btn-submit"> Modifier </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>