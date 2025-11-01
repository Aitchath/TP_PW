 <?php

 require '../classes/Models/ContactModel.php';
 
class ContactDAO {
        
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nom, $prenom, $email, $telephone) {
        $pdo = $this->pdo;
        $sql = "INSERT INTO contact (nom, prenom, email, telephone) VALUES (:nom, :prenom, :email, :telephone)";
        $stml = $pdo->prepare($sql);
        $stml->bindParam(':nom', $nom);
        $stml->bindParam(':prenom', $prenom);
        $stml->bindValue(':email', $email);
        $stml->bindValue(':telephone', $telephone);
        $stml->execute();
    }
    



    public function index() {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM contact";
        $stml = $pdo->prepare($sql);
        $stml->execute();

        // Récupère toutes les lignes de la table contact
        $results = $stml->fetchAll(PDO::FETCH_ASSOC);

        $contacts = [];
        foreach ($results as $row) {
            $contact = new ContactModel(
                $row['id'],
                $row['nom'],
                $row['prenom'],
                $row['email'],
                $row['telephone']
            );
            $contacts[] = $contact;
        }

        return $contacts;
    }

    public function show($id) {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM contact WHERE id = $id";
        $stml = $pdo->prepare($sql);
        // $stml->bindValue(':id', $id);
        $stml->execute();
        $row = $stml->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new ContactModel(
                $row['id'],
                $row['nom'],
                $row['prenom'],
                $row['email'],
                $row['telephone']
            );
        } else {
            return null;
        }
    }


    public function edit($id, $nom, $prenom, $email, $telephone)  {
        $pdo = $this->pdo;
        $sql = "UPDATE contact SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id";
        $stml = $pdo->prepare($sql);
        $stml->bindParam(':nom', $nom);
        $stml->bindParam(':prenom', $prenom);
        $stml->bindValue(':email', $email);
        $stml->bindValue(':telephone', $telephone);
        $stml->bindValue(':id', $id);
        $stml->execute();
    }

    public function delete($id) {
        $pdo = $this->pdo;
        $sql = "DELETE FROM contact WHERE id = $id";
        $stml = $pdo->prepare($sql);
        $stml->execute();
       
    }

    public function search($keyword) {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM contact WHERE nom LIKE :keyword OR prenom LIKE :keyword OR email LIKE :keyword OR telephone LIKE :keyword";
        $stml = $pdo->prepare($sql);
        $likeKeyword = '%' . $keyword . '%';
        $stml->bindParam(':keyword', $likeKeyword);
        $stml->execute();

        $results = $stml->fetchAll(PDO::FETCH_ASSOC);

        $contacts = [];
        foreach ($results as $row) {
            $contact = new ContactModel(
                $row['id'],
                $row['nom'],
                $row['prenom'],
                $row['email'],
                $row['telephone']
            );
            $contacts[] = $contact;
        }

        return $contacts;
    }

}