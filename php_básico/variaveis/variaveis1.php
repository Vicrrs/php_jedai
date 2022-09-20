<?php
// atribuindo por referencias
$var = 'Bob';
$bar = &$var;

$bar = "Meu nome é $var\n";

echo $bar;
echo $var;

?>