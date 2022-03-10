<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMC Calcul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
    <h1>Calcul IMC</h1>
    <div class="col-4">
        <form action="" method="POST">
            <label for="taille" class="form-label">Taille :</label>
            <input type="number" step="0.01" name="taille" id="taille" class="form-control">

            <label for="poids" class="form-label">Poids :</label>
            <input type="number" step="0.01" name="poids" class="form-control">
            <button type="submit" class="btn btn-primary mt-3 ">Afficher</button>
        </form>
    </div>


    <?php
    $test = false;
    if (isset($_POST["taille"]) && isset($_POST["poids"])) {

        $taille = $_POST["taille"];
        $poids = $_POST["poids"];
        $imc = $poids / ($taille * $taille);
        $imc = (round($imc, 2));
        $result = "";

        if ($imc < 18.5) {
            $result = "Maigreur";
            $class = "alert-primary ";
        }

        if ($imc > 18.5 && $imc <= 25) {
            $result = "Normal";
            $class = "alert-success";
        }

        if ($imc > 25 && $imc < 40) {
            $test = true;
            $result = "Surpoids";
            $objectif = (25 * ($taille * $taille));
            $aperdre = $poids - $objectif;
            $class = "alert-danger";
        }

        if ($imc >= 40) {
            $test = true;
            $result = "Obesité morbide";
            $objectif = (25 * ($taille * $taille));
            $aperdre = $poids - $objectif;
            $class = "alert-danger";
        }
    }
    ?>
    <div class="alert <?= $class ?> mt-4 col-12">
        <?php
        if (isset($imc)) {
            echo '<h3>Votre imc : ' . $imc . '</h3>';
            echo '<h3>Résultat : ' . $result . '</h3>';
        }
        if ($test == true) {
            echo '<h3 class="coucou">Objectif à atteindre :' . $objectif . ' kg</h3>';
            echo '<h3>Poids à perdre :' . $aperdre . ' kg</h3>';
        }

        ?>
    </div>
</div>
</body>
</html>








