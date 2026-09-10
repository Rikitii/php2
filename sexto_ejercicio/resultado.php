<?php

$number = $_POST["number"];

echo "Tabla del " . $number . " con FOR";

echo "<br>";

for ($i = 0; $i <= 10; $i += 2) {

    $result=($number * $i);
    echo   $number . " x " . $i . " = " . $result; echo "<br>"; 
}

echo "<br>";
echo "<br>"; 

echo "Tabla del " . $number . " con WHILE";

echo "<br>";

$i = 0;

while ($i <= 10) {

    $result=($number * $i);
    echo   $number . " x " . $i . " = " . $result; echo "<br>"; 

    $i += 1;
}