<?php declare(strict_types=1);

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, 8);

// A strict declaração força as coisas a serem usadas da maneira pretendida.
// como strict está habilitado e "5 dias" não é um número inteiro, um erro será gerado
?>