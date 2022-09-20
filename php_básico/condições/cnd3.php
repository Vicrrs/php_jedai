<?php

/*
switch - instrução para selecionar um dos muitos blocos de código a serem executados 
*/
    $cor_favorita = "Azul";

    switch ($cor_favorita) {
        case "Verde":
            echo "Sua cor favorita é verde";
            break;
        case "Azul":
            echo "Sua cor favorita é azul";
            break;
        case "Vermelho":
            echo "Sua cor favorita é Vermelho";
            break;
        default:
            echo "Sua cor favorita não é vermelho, azul ou verde!";
    }

?>