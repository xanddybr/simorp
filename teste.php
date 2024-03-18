<?php



function somar(int $num1, int $num2): int
{
    return $num1 + $num2 . "Essa é quantidade chanses que eu queria";
}

try {
    echo somar(1000, 1);
} catch(\TypeError $e) {
    //tratamento necessário

    echo "Tivemos uma exceção de tipos";
}





?>