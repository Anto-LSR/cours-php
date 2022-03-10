<?php

define('HOST','localhost');//url ou se trouve le serveur mysql
define('LOGIN','root');
define('PSW','');
define('DATABASE','cocktail');

try {
    $db="mysql:host=".HOST.";dbname=".DATABASE.";charset=UTF8";
    //creation de l'objet PDO
    $pdo = new PDO($db,LOGIN,PSW);
    //afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Problème connexion : ".$e->getMessage();
}