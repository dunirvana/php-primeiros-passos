<?php

require_once 'funcoes.php';

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

titularComLetrasMaiusculas($contasCorrentes['30090080088']);

// remover da coleção
unset($contasCorrentes['30090080077']);

foreach ($contasCorrentes as $cpf => $conta) {
  //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
  list('titular' => $titular, 'saldo' => $saldo) = $conta;
  exibeMensagem("$cpf $titular $saldo");
}
