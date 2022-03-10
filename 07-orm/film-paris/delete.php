<?php
require 'cnx.inc.php';
$id = 14;
$film = Model::factory('Film')->findOne($id)->delete();