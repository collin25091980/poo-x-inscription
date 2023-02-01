<?php
   class Securite {
      public static function chiffrer($password) {
         return "aq1". sha1($password . "123"). "25";
      }
   }