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

// O "&" indica passagem por  referencia
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}