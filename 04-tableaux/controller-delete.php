<?php
session_start();
$personnes = $_SESSION["personnes"];
var_dump($personnes);
if(isset($_GET["indice"])){
    $index = $_GET["indice"];
    unset($personnes[$index]);

    $_SESSION["personnes"] = $personnes;
    header("Location: tableau-maquette.php");

} else {
    var_dump($personnes);
    var_dump($_GET);
}

