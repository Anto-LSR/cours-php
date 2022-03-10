<?php
require_once 'Personne.php';
$personne = new Personne('Johnny', 'Cash', 18);
var_dump($personne);

$personne = new stdClass;
$personne->name='michel';
var_dump($personne);

$tab["nom"] = "michel";
$tab["prenom"] = "doudou";

$personne3 = (Object) $tab;

var_dump($personne3);