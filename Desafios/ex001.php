// This challenge consists of storing a number in a variable and multiplying it from 1 to 10

<?php

$numeroMultiplicador = 10;

for ($i = 0; $i <= 10; $i++) {
  $resultadoMultiplicacao = $i * $numeroMultiplicador;
  echo "$i X $numeroMultiplicador = $resultadoMultiplicacao" . PHP_EOL;
}
