<?php

$nome = 'Eduardo Teixeira';
list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Eduardo Teixeira,40,eduardo@email.com.br';
var_dump(explode(',', $csv));