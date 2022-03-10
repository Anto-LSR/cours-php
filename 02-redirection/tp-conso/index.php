<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="col-6">
        <form action="process.php">
            <label for="km" class="form-label">Kilometres :</label>
            <input type="text" id="km" name="km" class="form-control">
            <label for="litres" class="form-label">Litres : </label>
            <input type="text" id="litres" name="litres" class="form-control">
            <button type="submit" class="btn btn-primary mt-2">Calculer</button>
        </form>

        <div class="result mt-2 alert alert-primary">
            <?php
            if (isset($_GET["conso"])) {
                $conso = $_GET["conso"];
                // echo '<h3>Consommation : ' . $conso . ' /km 100 </h3>';
                ?>
                <h3><?= "Consommation : " . $conso . "L/100" ?></h3>
            <?php } ?>
        </div>
    </div>
</div>


</body>
</html>