<?php

$num = $_POST["num"];

$invertido = strrev($num);

echo "El numero invertido es: $invertido" . "<br>" . "<br>";

$contador = 0;

for ($i = 2; $i <= $invertido; $i++) {

    $Primo = true;

    for ($j = 2; $j < $i; $j++) {

        if ($i % $j == 0) {
            $Primo = false;
            break;
        }

    }

    if ($Primo) {
        echo "Numero primo: " . $i . "<br><br>";
        $contador++;
    }
}

echo "Total de numeros primos: " . $contador  . "<br>";