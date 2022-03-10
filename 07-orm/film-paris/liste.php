<?php
require 'cnx.inc.php';
$films = Model::factory('Film')->findMany();

foreach($films as $film){
    echo $film->name." ". $film->year;
}