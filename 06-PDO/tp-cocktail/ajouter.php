<?php
require_once 'cnx.php';

$film = "SAW";
$year = "2002";
$prepared_sql ="INSERT INTO personnes VALUES (NULL,:nom, :prenom, :age)";
$prepared_query = $pdo->prepare($prepared_sql);
$prepared_query->bindParam(":film", $film, PDO::PARAM_STR);
$prepared_query->bindParam(":year", $year, PDO::PARAM_INT);
$prepared_query->execute();