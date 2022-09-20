<?php

$x = 0;

while ($x < 10) {
    if ($x == 4) {
        $x++;
        continue;
    }
    echo "O número é: $x" .PHP_EOL;
    $x++;
}

?>