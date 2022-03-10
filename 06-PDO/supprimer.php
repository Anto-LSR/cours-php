<?php
require_once 'cnx.php';


if(isset($_GET['id'])){

    $id = $_GET['id'];
    $prepared_sql = "DELETE FROM film WHERE film.id = 1";
    $prepared_query = $pdo->prepare($prepared_sql);
    $prepared_query->bindParam(":id", $id, PDO::PARAM_INT);
    $prepared_query->execute();
}

