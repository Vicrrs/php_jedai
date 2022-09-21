<?php

$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] =$GLOBALS['x'] +$GLOBALS['y'];
}

addition();
echo $z;
/*
como z é uma variável presente no array $GLOBALS, também é acessível 
de fora da função!
*/
?>