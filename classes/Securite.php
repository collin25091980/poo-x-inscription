<?php
   class Securite {
      public static function chiffrer($password) {
         $password =  "aq1". sha1($password . "123"). "25";
         return $password;
      }
   }