<?php
require 'cnx.inc.php';

if ((isset($_POST["first"])) && (isset($_POST["last"])) && (isset($_POST["age"]))) {
    if (strlen(trim($_POST["first"])) != 0 && strlen(trim($_POST["last"])) != 0 && strlen(trim($_POST["age"])) != 0) {
        $first = $_POST["first"];
        $last = $_POST["last"];
        $age = $_POST["age"];

        $personne = Model::factory('personnes')->create();
        $personne->prenom = $first;
        $personne->nom = $last;
        $personne->age = $age;
        $personne->save();
        header("Location: tableau-maquette.php");
    } else {
        $_SESSION["error"] = 'err';
        header("Location: tableau-maquette.php");
    }

} else {
}