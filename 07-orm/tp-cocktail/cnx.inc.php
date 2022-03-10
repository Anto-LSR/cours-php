<?php
require_once 'idiorm.php';
require_once 'paris.php';

const DATABASE = "cocktail";
const HOST = "localhost";
const LOGIN = "root";
const PSW = "";


ORM::configure("mysql:host=".HOST.";dbname=".DATABASE.";charset=UTF8");
ORM::configure("username", LOGIN);
ORM::configure("password", PSW);

Class Personnes extends Model {
    //Je précise que la classe  Film = la table Sql Film
    public static $_table="personnes";
}

