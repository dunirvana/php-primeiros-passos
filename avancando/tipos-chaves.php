<?php

// todos as chaves abaixo são convertidas para inteiro, sendo que apenas o valor 'd' serã mantido
$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd',
];

foreach ($array as $item) {
  echo $item . PHP_EOL;
}