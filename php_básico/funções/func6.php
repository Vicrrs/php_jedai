<?php declare(strict_types=1);

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . PHP_EOL;
echo "7 + 13 = " . sum(7, 13) . PHP_EOL;
echo "5 + 5 = " . sum(5, 5);

?>