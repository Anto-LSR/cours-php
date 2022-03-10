<?php
require_once 'cnx.php';
if(isset($_GET["id"])){
    $id = $_GET['id'];
    $personne = Model::factory('personnes')->findOne($id)->delete();


    header("Location: tableau-maquette.php");

} else {
    header("Location: tableau-maquette.php");
}

