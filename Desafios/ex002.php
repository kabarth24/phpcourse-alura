<?php

$altura = 1.70;
$peso = 64;

$imc = ($peso / ($altura ** 2));

$imc = number_format($imc, 2, '.', '');

echo "O seu IMC é de $imc.";
