<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de Contacts</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

    <?php include '../controllers/HomeController.php'; ?>

    <div class="container">
        <div class="header">
            <h1>📋 Mes Contacts</h1>
            <div class="header-actions">
                <form method="GET" action="home.php" class="search-box">
                    <input 
                        name="search" 
                        type="text" 
                        id="searchInput" 
                        placeholder="🔍 Rechercher un contact..."
                        value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
                    >
                </form>

                <a href="/views/add_contact.php" class="btn btn-primary">➕ Ajouter un contact</a>
            </div>        
        </div>

        <div class="table-container">
            <table id="contactTable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Entreprise</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts  as $contact) : ?>
                        <tr>
                            <td> <?= htmlspecialchars($contact->getNom()) ?></td>
                            <td> <?= htmlspecialchars($contact->getPrenom()) ?></td>
                            <td> <?= htmlspecialchars($contact->getEmail()) ?></td>
                            <td> <?= htmlspecialchars($contact->getTelephone()) ?></td>
                            <td class="actions">
                                <a href="/views/view_contact.php?id=<?= $contact->getId()?>" class="btn btn-action btn-view">👁️ Voir</a>
                                <a href='/views/edit_contact.php?id=<?= $contact->getId()?>' class="btn btn-action btn-edit">✏️ Modifier</a>
                                <a href="/views/delete_contact.php?id=<?= $contact->getId()?>" class="btn btn-action btn-delete">🗑️ Supprimer</a>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="viewModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal('viewModal')">&times;</span>
                <h2>Détails du contact</h2>
            </div>
            <div class="modal-body" id="viewModalBody">
            </div>
        </div>
    </div>

</body>
</html>