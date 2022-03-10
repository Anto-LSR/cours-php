<?php

require_once 'cnx.php';
$sql = "SELECT * FROM film";

$results = $pdo->query($sql);

//je souhaite un tableau avec le nom de champs de la BDD SQL
$tab_films = $results->fetchAll(PDO::FETCH_ASSOC);
foreach ($tab_films as $film) {
    echo $film["id"] . " ";
    echo $film["name"] . " ";
    echo $film["year"] . "<br>";
}