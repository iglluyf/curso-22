<?php

$resto = 0;
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];

$contPares = 6;
$i = 0;
// 0 , 1, 2, 3, 4
while ($contPares < 5) {

    echo "estou dentro do WHILE e o contPares (6) é: {$contPares} <br>";
    $resto = $numero[$i] % 2;

    if ($resto == 0) {
        // $contPares += 1;
        $contPares++; // 5
    }

    $i++; // 7
}

echo "i: {$i} <br> contPares: {$contPares}";

echo "<br><br><br><br>";

do {
    echo "estou dentro do DO WHILE e o contPares é: {$contPares} <br>";
    $resto = $numero[$i] % 2;

    if ($resto == 0) {
        // $contPares += 1;
        $contPares++; // 5
    }

    $i++; // 7
} while ($contPares < 5);

echo "i: {$i} <br> contPares: {$contPares}";

// if ($resto == 0 && $numero == 2) {
//     echo "O numero é par e é um {$numero} <br>"; //O numero é par e é um 2
// } else if ($resto == 0) {
//     echo "O numero " . $numero . " é impar. <br>"; 
// }
//  else {
//     echo "O numero " . $numero . " é impar. <br>";
// }






// $soma = 0;
// $valor1 = 10;
// $valor2 = 20;

// $soma = $valor1 + $valor2;

// $soma1 = $soma + 29;
// -
// // $soma = $soma + 29;
// $soma += 29;

// echo "<br><br> A soma  dos numeros {$valor1} + {$valor2} é: soma:{$soma} soma1: {$soma1}.";
