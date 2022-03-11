<?php
require 'cnx.inc.php';
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];
if ($method == "POST") {
    $body = json_decode(file_get_contents('php://input'));


    $personne = Model::factory('Personnes')->create();
    $personne->prenom = $body->first;
    $personne->nom = $body->last;
    $personne->age = $body->age;
    $personne->save();
    $tab['id'] = $personne->id;
} else if ($method == "GET") {
    $personnes = Model::factory('personnes')->findMany();

    foreach($personnes as $personne){
//        echo $personne->prenom . ' ' . $personne->nom . ' ' . $personne->age;
//        echo ' ||| ';

        $p["prenom"] = $personne->prenom;
        $p["nom"] = $personne->nom;
        $p["age"] = $personne->age;
        $p["id"] = $personne->id;
        $tab[] = $p;
    }
} else if ($method == "DELETE"){
   $id = $_GET['id'];
    $personne = Model::factory('personnes')->findOne($id)->delete();


} else if ($method == "PUT"){
    $tab["message"] = "Modifier une personne";
}



echo json_encode($tab);