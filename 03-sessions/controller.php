<?php
session_start();
$log = 'antonin';
$pass = '123456';

if ((isset($_POST["login"])) && (isset($_POST["password"]))) {
    $login = strtolower($_POST["login"]);
    $password = strtolower($_POST["password"]);

    if ($login == $log && $password == $pass) {
        $_SESSION["log"] = $log;
        header("Location: home.php");
    } else {
        $_SESSION["loginError"] = 'error';
        header("Location: login.php");
    }
} else {
    header("Location: login.php");
}