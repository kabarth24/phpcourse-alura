<?php

echo PHP_EOL . "Continue" . PHP_EOL;

for ($contador = 1; $contador <= 15; $contador++) {
  if ($contador == 13) {
    continue;
  }

  echo "#$contador" . PHP_EOL;
}

echo PHP_EOL . "Agora o break" . PHP_EOL;

for ($contador = 1; $contador <= 15; $contador++) {
  if ($contador == 13) {
    break;
  }

  echo "#$contador" . PHP_EOL;
}
