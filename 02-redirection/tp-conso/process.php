<?php

if ((isset($_GET["km"])) && isset($_GET["litres"])) {
    $km = $_GET["km"];
    $litres = $_GET["litres"];
    $conso = ($litres *100) / $km;
    $conso = round($conso, 2);
    header("Location:index.php?conso=". $conso);
    echo $conso;
}