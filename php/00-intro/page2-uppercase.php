<?php
//Récupérer la valeur de l'input $mot
//var_dump($_POST);
//Si le formulaire est envoyé : isset()

if (isset($_POST["mot"])) {
    $mot = $_POST["mot"];
    $mot = strtoupper($mot);
}
?>
<form method="post">
    <label for="mot">Mot :</label>
    <input name="mot" id="mot">
    <button type="submit">Afficher</button>
</form>

<h1><?= $mot ?></h1>