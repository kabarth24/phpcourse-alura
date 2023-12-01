/* This challenge consists of showing ODD numbers from 0 to 100 on the screen. */

<?php

$contador = 2;

for ($i = 1; $i <= 100; $i++) {
  if ($i % $contador != 0) {
    echo "#$i" . PHP_EOL;
  }
}
