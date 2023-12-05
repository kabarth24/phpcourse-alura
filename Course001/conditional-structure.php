<?php

$idade = 23;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos, ou a partir de 16 anos acompanhado por um responsável." . PHP_EOL;
echo "Verificando..." . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos. Pode entrar sozinho!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
  echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
  echo "Você só tem $idade anos, não pode entrar.";
}
