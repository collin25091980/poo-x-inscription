<?php 

   session_start();

   // Inclure les classes
      require_once('classes/Verifier.php');
      require_once('classes/Securite.php');
      require_once('classes/Utilisateur.php');

   if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {
      // Variables
      $pseudo     = htmlspecialchars($_POST['pseudo']);
      $email      = htmlspecialchars($_POST['email']);
      $password   = htmlspecialchars($_POST['password']);

      // Verifier la syntaxe de l'email
      if(!Verifier::syntaxeEmail($email)) {
         header('location: index.php?error=true&message=Veuillez vérifier le format de votre adresse email.');
         exit();
      }

      // Vérifier doublon de l'email
      if(Verifier::doublonEmail($email)) {
         header('location: index.php?error=true&message=Cette adresse email est déjà utilisée.');
         exit();
      }

      // Verifier doublon du pseudo 
      if(Verifier::doublonPseudo($pseudo)) {
         header('location: index.php?error=true&message=Ce pseudo est déjà utilisé.');
         exit();
      }

      // Chiffrage du mot de passe
      $password = Securite::chiffrer($password);

      // Ajout un utilisateur
      $utilisateur = new Utilisateur($pseudo, $email, $password);
      $utilisateur->enregistrer();
      $utilisateur->creerLesSession();

      // Redirigerbb
      header('location: index.php?success=true');
      exit();
   }

?>
<!DOCTYPE html>
<html>
<head>
   <meta chaset="utf-8">
   <link rel="stylesheet" href="css/default.css">
   <title>Mon Site PHP</title>
</head>
<body>
   
   <section class="container">

      <form method="post" action="index.php">

         <p>Inscription</p>

         <?php if(isset($_GET['success'])) {
            echo '<p class="alert success">Inscription réalisée avec succès.</p>';
         }
         else if(isset($_GET['error']) && !empty($_GET['message'])) {
            echo '<p class="alert error">'.htmlspecialchars($_GET['message']).'</p>';
         } ?>

         <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"><br>
         <input type="email" name="email" id="email" placeholder="Email"><br>
         <input type="password" name="password" id="password" placeholder="Mot de passe"><br>
         <input type="submit" value="Inscription">

      </form>

      <div class="drop drop-1"></div>
      <div class="drop drop-2"></div>
      <div class="drop drop-3"></div>
      <div class="drop drop-4"></div>
      <div class="drop drop-5"></div>

   </section>
   
</body>
</html>