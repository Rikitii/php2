<?php

$nombre = $_POST["nombre"];

$suma = 0;

for ($i = 1; $i <= 10; $i++) {

    $suma += $_POST["p".$i];

}

$promedio = $suma / 10;

echo "Resultado de la encuesta" . "<br><br>";

echo "Encuestado: " . $nombre . "<br><br>";

echo "Promedio obtenido: " . $promedio;