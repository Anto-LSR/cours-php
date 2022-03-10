<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//$angers = new Ville();
//$angers ->setNom("Angers");
//$angers ->setDepartement("Maine-et-Loire");
//var_dump($angers);
//
//$nantes = new Ville2("Nantes", "Loire-Atlantique");
//var_dump($nantes);

$test = new villeAvecRegion("Angers", "Maine-et-Loire", "Pays de la Loire");
$test->afficher();