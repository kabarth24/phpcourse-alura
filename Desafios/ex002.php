// This challenge consists of calculating the BMI

<?php

$altura = 1.70;
$peso = 64;

$imc = ($peso / ($altura ** 2));

$imc = number_format($imc, 2, '.', '');

echo "O seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18) {
  echo "abaixo do recomendado.";
} else if ($imc < 25) {
  echo "recomendado.";
} else {
  echo "acima do recomendado.";
}
