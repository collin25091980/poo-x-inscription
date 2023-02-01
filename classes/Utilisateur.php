<?php 

   class Utilisateur {
      // Attributes 
      private $_pseudo;
      private $_email;
      private $_password;

      // Constructor
      public function __construct($pseudo, $email, $password) {
         $this->setPseudo($pseudo);
         $this->setEmail($email);
         $this->setPassword($password);
      }

      // Getters
      public function getPseudo() {
         return $this->_pseudo;
      }
      public function getEmail() {
         return $this->_email;
      }
      public function getPassword() {
         return $this->_password;
      }

      // Setters
      public function setPseudo($pseudo) {
         return $this->_pseudo = $pseudo;
      }
      public function setEmail($email) {
         return $this->_email = $email;
      }
      public function setPassword($password) {
         return $this->_password = $password;
      }

      // Methods
      public function enregistrer() {
         require('src/connection.php');
         $req = $bdd->prepare('INSERT INTO utilisateurs (pseudo, email, password) VALUES (?, ?, ?)');
         $req->execute([$this->getPseudo(), $this->getEmail(), $this->getPassword()]);
      }

      public function creerLesSession() {
         $_SESSION['connect'] = 1;
         $_SESSION['pseudo']  = $this->getPseudo();
         $_SESSION['email']   = $this->getEmail();
      }
   }