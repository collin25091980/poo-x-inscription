<?php

   class Verifier {
      public static function syntaxeEmail($email) {
         return filter_var($email, FILTER_VALIDATE_EMAIL);
      }

      public static function doublonEmail($email) {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT COUNT(*) AS emailNumber FROM utilisateurs WHERE email = ?');
         $req->execute([$email]);

         while($result = $req->fetch()) {
            if($result['emailNumber'] != 0) {
               return true;
            }
            else {
               return false;
            }
         }
      }

      public static function doublonPseudo($pseudo) {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT COUNT(*) AS pseudoNumber FROM utilisateurs WHERE pseudo = ?');
         $req->execute([$pseudo]);

         while($result = $req->fetch()) {
            if($result['pseudoNumber'] != 0) {
               return true;
            }
            else {
               return false;
            }
         }
      }
   }