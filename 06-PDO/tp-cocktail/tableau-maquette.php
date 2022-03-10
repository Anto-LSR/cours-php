<?php
session_start();
require_once 'cnx.php';
$sql = "SELECT * FROM personnes";

$results = $pdo->query($sql);

//je souhaite un tableau avec le nom de champs de la BDD SQL
$personnes = $results->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soirée Cocktail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">
            <i class="fa-solid fa-martini-glass-citrus"></i>
            Soirée Cocktail</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
            </ul> -->
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <h1>Liste des personnes</h1>
        <div class="col-6">
            <!-- table.table>thead>tr>th*3 -->
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Age</th>
                </tr>
                </thead>
                <!-- tbody>tr>td*3 -->
                <tbody>
                <?php
                if (count($personnes) != 0) {
                    foreach ($personnes as $key => $personne) { ?>
                        <tr>

                            <td><?= $personne["prenom"] ?></td>
                            <td><?= $personne["nom"] ?></td>
                            <td><?= $personne["age"] ?></td>
                            <td><a href="controller-delete.php?id=<?= $personne["id"] ?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a></td>
                        </tr>
                    <?php }
                } ?>


                </tbody>
            </table>
            <!-- table.table>thead>tr>th*3^^tbody>tr*3>td*3 -->
        </div>
        <div class="col-6">
            <form method="post" action="controller.php">
                <div class="mb-3">
                    <label for="first" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="first" name="first">
                </div>
                <div class="mb-3">
                    <label for="last" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="last" name="last">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Âge</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>
                <button type="Ajouter" class="btn btn-primary my-2">Submit</button>
            </form>
            <?php
            if (isset($_SESSION["error"])) { ?>
                <p class="error" style="color:red">Les champs ne peuvent pas être vides.</p>

            <?php }
            unset($_SESSION["error"]);
            ?>
        </div>
    </div>
</div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy;Soirée</p></div>
</footer>
</body>
</html>