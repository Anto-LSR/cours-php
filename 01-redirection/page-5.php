<form action="page-6.php" method="post">
    <input type="text" name="mot">
    <button type="submit">GO</button>
    <h1>coucoutestgit</h1>
</form>

<?php
if(isset($_GET["mot"])){
    $mot = $_GET["mot"];
    echo $mot;
}
?>
