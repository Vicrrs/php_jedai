<?php
// Loop através de uma matriz indexada

$carros = array("Gol", "Polo", "Mobi", "Strada");
$comp = count($carros);

for($x = 0; $x < $comp; $x++) {
    echo $carros[$x] . PHP_EOL;

}


?>