<?php
echo '<h1>Hello World !</h1>';
$test = "Coucou";
$test2 = "Coucou 2.0";
echo '<h1>' . $test . '</h1>';
echo '<p>' . $test2 . '</p>';

$x = 42;
$pi = 3.14;
$result = $x + $pi;
var_dump($result);

$tab = ["pomme", "fruit", "poire"];
var_dump($tab);
echo "<pre>";
print_r($tab);
echo '</pre>';

$tab[0] = "pomme";
$tab[1] = "poire";
$tab[2] = "michel";

$tab2[1] = "rouge";
$tab2["deux"] = "bleu";
$tab2[] = "rose";
$tab2[-1] = 'coucou';

var_dump($tab2);
echo $tab2[1];
?>