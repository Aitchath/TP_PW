<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Contact</title>
    <link rel="stylesheet" href="../css/add_contact.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>➕ Ajouter un Contact</h1>
            <p>Remplissez le formulaire ci-dessous pour créer un nouveau contact</p>
        </div>

        <div class="form-container">
            <div id="successMessage" class="success-message">
                ✓ Contact ajouté avec succès !
            </div>

            <p class="required-note"><span style="color: #ef4444;">*</span> Champs obligatoires</p>

            <form id="contactForm" method="POST" action="/controllers/AddContactController.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom <span>*</span></label>
                        <input type="text" id="nom" name="nom" placeholder="Ex: Dubois" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom <span>*</span></label>
                        <input type="text" id="prenom" name="prenom" placeholder="Ex: Marie" required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="exemple@email.fr" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone <span>*</span></label>
                    <input type="tel" id="telephone" name="telephone" placeholder="06 12 34 56 78" required>
                </div>


                <div class="form-actions">
                    <a href="/views/home.php" class="btn btn-cancel">← Retour</a>
                    <button type="submit" class="btn btn-submit">Enregistrer le contact</button>
                </div>
            </form>
        </div>
    </div>

    <!-- <script>
        // Fonction pour retourner à la page précédente
        function goBack() {
            if (confirm('Voulez-vous vraiment annuler ? Les données saisies seront perdues.')) {
                window.history.back();
            }
        }

        // Gestion de la soumission du formulaire
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Récupération des données du formulaire
            const formData = {
                prenom: document.getElementById('prenom').value,
                nom: document.getElementById('nom').value,
                email: document.getElementById('email').value,
                telephone: document.getElementById('telephone').value,
                entreprise: document.getElementById('entreprise').value,
                poste: document.getElementById('poste').value,
                adresse: document.getElementById('adresse').value,
                notes: document.getElementById('notes').value
            };

            // Ici vous pouvez envoyer les données à un serveur
            console.log('Données du contact:', formData);

            // Ou les stocker dans le localStorage
            let contacts = JSON.parse(localStorage.getItem('contacts') || '[]');
            formData.id = Date.now();
            contacts.push(formData);
            localStorage.setItem('contacts', JSON.stringify(contacts));

            // Afficher le message de succès
            const successMsg = document.getElementById('successMessage');
            successMsg.classList.add('show');

            // Réinitialiser le formulaire
            this.reset();

            // Masquer le message après 3 secondes
            setTimeout(() => {
                successMsg.classList.remove('show');
            }, 3000);

            // Optionnel: rediriger vers la page de liste après 2 secondes
            // setTimeout(() => {
            //     window.location.href = 'liste-contacts.html';
            // }, 2000);
        });

        // Validation en temps réel du téléphone
        document.getElementById('telephone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s/g, '');
            if (value.length > 0) {
                value = value.match(/.{1,2}/g).join(' ');
                e.target.value = value;
            }
        });
    </script> -->
</body>
</html>