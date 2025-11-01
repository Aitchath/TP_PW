<?php
  class Compte {
    private $login;
    private $password;
    private static int $count = 0;


   public function __construct(string $login, string $password) {
     $this->login = $login;
     $this->password = $password;

     self::$count++;
   }

   public function getLogin() {
      return $this->login;
   }

  public function setLogin(string $login) {
    $this->login = $login;
  }
    
    public function getPassword() {
      return $this->password;
    }

    public function setPassword(string $password) {
      $this->password = $password;
    }

    public function masquerLogin(string $login) {
        $valeurMasquee = substr($login, 2, strlen($login) - 3);
        return str_replace($valeurMasquee, str_repeat('*', strlen($valeurMasquee)), $login);
    }

    public function toArray() : array {
      return [
        'login' => $this->login,
        'password' => $this->password
      ];
    }
    
    public function checkPassword($plain) {
      if ($this->password === $plain) {
        return true;
      } else {
        return false;
      }
    }


    public function __toString() {
      return "Le login est : " . $this->masquerLogin("Aitchath") . " et le password est: " . $this->password;     
    }

    public static function isValideLogin(string $login) {
      return preg_match('/^[a-zA-Z0-9.+_-]{3,20}$/', $login);
    }

    public function changePassword($new) {
      if(self::isStrongPassword($new)) {
        $this->password = $new;
        return $this->password;
      } else {
        echo "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre\n";
      }
    }

    public static function isStrongPassword(string $pwd){
      return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $pwd);
    }

    public static function fromArray(array $row) {
      return new Compte($row['login'], $row['password']);
    }

    public static function count() {
      return self::$count;
    }

    public static function resetCount() {
      self::$count = 0;
    }

    public static function cmpByLoginLen(Compte $a, Compte $b) {
      if (strlen($a->getLogin()) > strlen($b->getLogin())) {
          return 1;
      } else if (strlen($a->getLogin()) < strlen($b->getLogin())) {
        return -1;
      } else {
        return 0;
      }
    }
    
  }

  function main() {

    echo "=== Debut du programme === \n";

      $compte1 = new Compte("Aitchath+", "Password");
      $compte2 = new Compte("Bob", "Password123");

      echo "Login masquer du compte1 : " . $compte1->masquerLogin($compte1->getLogin()) . "\n";
      echo "Login masquer du compte2 " .$compte2->masquerLogin($compte2->getLogin()) . "\n";
      echo "toArray du compte1 " .$compte1->toArray() . "\n";
      echo "toArray du compte2 " .$compte2->toArray() . "\n";

      $tab = [$compte1, $compte2];

      foreach($tab as $compte) {
        echo $compte->getLogin() . "\n";

        echo $compte->isValideLogin($compte->getLogin()) ? "Login valide" . "\n" : "Login invalide" . "\n";
        echo $compte->isStrongPassword($compte->getPassword()) ? "Password fort" . "\n" : "Password faible" . "\n";
      }

      usort ($tab, ['Compte', 'cmpByLoginLen']) . "\n";

    echo "=== Fin du programme === \n";
  }

  // main();


