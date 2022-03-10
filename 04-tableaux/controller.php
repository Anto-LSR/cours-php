<?php
session_start();

if ((isset($_POST["first"])) && (isset($_POST["last"])) && (isset($_POST["age"]))) {
    if (strlen(trim($_POST["first"])) != 0 && strlen(trim($_POST["last"])) != 0 && strlen(trim($_POST["age"])) != 0) {
        $new = ["first" => $_POST["first"],
            "last" => $_POST["last"],
            "age" => $_POST["age"]
        ];
        $_SESSION["personnes"][] = $new;
        //print_r(strlen(trim($_POST["first"])));
        header("Location: tableau-maquette.php");
    } else {
        $_SESSION["error"] = 'err';
        header("Location: tableau-maquette.php");
    }

} else {
}