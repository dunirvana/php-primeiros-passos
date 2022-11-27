<?php

$idade = 16;
$numeroPessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;
echo "Você tem $idade anos. Pessoas $numeroPessoas." . PHP_EOL;

if ($idade >= 18 || ($idade >= 16 && $numeroPessoas > 1)) {  
  echo 'Pode entrar!';
}
else {
  echo 'Não pode entrar!';
}

echo PHP_EOL . 'Adeus!';