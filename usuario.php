<?php

$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];

function lacoWhile($numero) {
    $i = 0;
    $contPares = 0;

    while ($contPares < 5) {
        $resto = $numero[$i] % 2;
    
        if ($resto == 0) {
            $contPares++; // $contPares += 1;
        }
    
        $i++;
    }
    
    echo "<b>Funcao While</b>: i: {$i} contPares: {$contPares} <br><br>";
}

function lacoDoWhile($numero) {
    $i = 0;
    $contPares = 0;
    do {
        $resto = $numero[$i] % 2;
    
        if ($resto == 0) {
            $contPares++; // $contPares += 1;
        }
    
        $i++;
    } while ($contPares < 5);
    
    echo "<b>Funcao Do While</b>: i: {$i} contPares: {$contPares} <br><br>";
}

function lacoFOR($numero) {
    $contPares = 0;
    for ($i = 0; $contPares < 5; $i++) {

        $resto = $numero[$i] % 2;

        if ($resto == 0) {
            $contPares++; // $contPares += 1;
        }
    }

    echo "<b>Funcao FOR</b>: i: {$i} contPares: {$contPares} <br><br>";
}


echo "Data hora inicio: " . date("d/m/Y H:i:s") . "<br><br>";

lacoWhile($numero);
lacoDoWhile($numero);
lacoFOR($numero);

sleep(2);

echo "Data hora fim: " . date("d/m/Y H:i:s");





// $soma = 0;
// $valor1 = 10;
// $valor2 = 20;

// $soma = $valor1 + $valor2;

// $soma1 = $soma + 29;
// -
// // $soma = $soma + 29;
// $soma += 29;

// echo "<br><br> A soma  dos numeros {$valor1} + {$valor2} é: soma:{$soma} soma1: {$soma1}.";
