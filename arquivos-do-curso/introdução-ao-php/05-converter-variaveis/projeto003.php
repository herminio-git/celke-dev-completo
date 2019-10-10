<?php

$result = "2"; //$result é a string "2"
echo "Resultado exemplo um: " . $result . "<br>";
var_dump($result);

$result = $result + 1; //$result é o integer 2
echo "Resultado exemplo dois: " . $result. "<br>";
var_dump($result);

$result = $result + 3.5; //$result tem o valor 3
echo "Resultado exemplo tres: " . $result. "<br>";
var_dump($result);

$result = 11; //$result tem o valor int 11
var_dump($result);
$result = (double) $result; //Depois da conversão o $result será double 11.0
echo "Resultado exemplo quatro: " . $result. "<br>";
var_dump($result);

$result = 7.9; //$result tem o valor 7.9
$result = (int) $result;
echo "Resultado exemplo cinco: " . $result. "<br>";
var_dump($result);




