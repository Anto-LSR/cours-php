<?php
//var_dump($_POST);
//Si formulaire envoyé
if (isset($_POST["mot"])) {
    $mot = $_POST["mot"];
    $mot = strtoupper($mot);

}
header("Location:page-5.php?mot=" . $mot);
//revenir sur page 5
//utiliser la méthode get
