<?php

$contasCorrentes = [
  30090080066 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ], 
  30090080077 => [
    'titular' => 'Maria',
    'saldo' => 10000
  ], 
  30090080088 => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes[33290080045] = [
  'titular' => 'Jurema',
  'saldo' => 556
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . PHP_EOL;
}