<?php

$altura = 1.82;
$peso = 70;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";
 
if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro.";
} elseif ($imc < 30) {
    echo "acima";
}

echo " do recomendado.";