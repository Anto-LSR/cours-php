<?php
require 'cnx.inc.php';

$film = Model::factory('Film')->create();
$film->name="SAW 6";
$film->year="2008";
$film->save();
//id attribué ....
echo $film->id;