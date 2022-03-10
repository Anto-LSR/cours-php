<?php
require_once 'cnx.php';

if ((isset($_POST["first"])) && (isset($_POST["last"])) && (isset($_POST["age"]))) {
    if (strlen(trim($_POST["first"])) != 0 && strlen(trim($_POST["last"])) != 0 && strlen(trim($_POST["age"])) != 0) {
        $first = $_POST["first"];
        $last = $_POST["last"];
        $age = $_POST["age"];

        $prepared_sql ="INSERT INTO personnes VALUES (NULL,:nom, :prenom, :age)";
        $prepared_query = $pdo->prepare($prepared_sql);
        $prepared_query->bindParam(":nom", $last, PDO::PARAM_STR);
        $prepared_query->bindParam(":prenom", $first, PDO::PARAM_STR);
        $prepared_query->bindParam(":age", $age, PDO::PARAM_INT);

        $prepared_query->execute();
        header("Location: tableau-maquette.php");
    } else {
        $_SESSION["error"] = 'err';
        header("Location: tableau-maquette.php");
    }

} else {
}