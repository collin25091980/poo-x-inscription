<?php
   class Securite {
      public static function chiffrer($password) {
         return "aq1". sha($password . "123"). "25";
      }
   }