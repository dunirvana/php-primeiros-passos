<?php

function exibeMensagem(string $mensagem) 
{
  echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorAScar): array 
{

  if ($valorAScar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar");
  }
  else {
    $conta['saldo'] -= $valorAScar;
  }

  return $conta;
}

function depositar(array $conta, float $valorADepositar): array 
{

  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  }
  else {
    exibeMensagem("Depositos precisam ser positivos");
  }

  return $conta;
}

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

$contasCorrentes[33290080045] = sacar($contasCorrentes[33290080045], 1000);
$contasCorrentes[30090080066] = depositar($contasCorrentes[30090080066], 1000);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
