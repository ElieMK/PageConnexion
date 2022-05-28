<?php 

define("HOST", "localhost"); 
define("DB_NAME","connexion"); 
define("USER", "root");
define('PASS', '');

    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS); 

   
?>