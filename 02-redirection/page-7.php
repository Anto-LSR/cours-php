<a href="page-8.php?prenom=jean&nom=dujardin">Page 8 </a>

<?php

if(isset($_GET["full"])){
    $fullName = $_GET["full"];
    echo '<br>';
    echo $fullName;
}