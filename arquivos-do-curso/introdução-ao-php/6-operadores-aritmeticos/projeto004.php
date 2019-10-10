<?php

$a = 2;
$b = 4;
$c = 7;

$result = $a + $b;
echo "Soma: " . $result . "<br>";

$result = $b - $a;
echo "Subtracao: " . $result . "<br>";

$result = $b * $a;
echo "Multiplicacao: " . $result . "<br>";

$result = $b / $a;
echo "Divisao: " . $result . "<br>";

$result = $c % $a;
echo "Resto da divisao: ". $result . "<br>";

$result = $c / $a;
echo "Valor: R$ " . number_format($result, 2,",",".");
