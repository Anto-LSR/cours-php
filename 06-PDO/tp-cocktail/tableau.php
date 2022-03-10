<?php
//1ere façon
$tableau = [];
$tab2["name"] = "The Matrix";
$tab2["year"] = "1999";

$tableau[] = $tab2;

echo '<pre>';
echo '1ere façon';
print_r($tableau);


//2eme façon
$films[0]["name"] = 'The Matrix';
$films[0]["year"] = '1999';

$films[1]["name"] = 'Star Wars';
$films[1]["year"] = '1977';

echo '2eme façon';
print_r($films);


//3eme façon

$films = [
    0 => ["name" => "The Matrix",
        "year" => "1999"],
    1 => ["name" => "Star Wars",
        "year" => "1977"]];

echo '3eme façon';
print_r($films);
?>


//Afficher un tableau 2D
<ul>
    <?php foreach ($films as $key => $film) {
        ?>
        <li> <?= $key ?> - <?= $film["year"] ?> - <?= $film["name"] ?> </li>
    <?php } ?>
</ul>


