<form action="page-6.php" method="post">
    <input type="text" name="mot">
    <button type="submit">GO</button>
</form>

<?php
if(isset($_GET["mot"])){
    $mot = $_GET["mot"];
    echo $mot;
}
?>
