<?php

if (isset($_GET["prenom"])) {
    $prenom = $_GET["prenom"];
    $prenom =  ucfirst($prenom);
    if(isset($_GET["nom"])){
        $nom = $_GET["nom"];
        $nom =  ucfirst($nom);
        $full = $prenom . ' '.$nom;
    }
}





header("Location: page-7.php?full=" .$full);
