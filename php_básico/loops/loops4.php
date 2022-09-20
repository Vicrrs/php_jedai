<?php

/*

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

- init counter : Inicializa o valor do contador de loop

- contador de teste : Avaliado para cada iteração de loop. Se for avaliado como TRUE, 
o loop continua. Se for avaliado como FALSE, o loop termina.

- contador de incrementos : Aumenta o valor do contador de loops

*/
for ($x = 0; $x<= 10; $x++) {
    echo "O número é: $x" .PHP_EOL;
}

?>