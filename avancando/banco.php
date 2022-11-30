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

/*
foreach ($contasCorrentes as $cpf => $conta) {
  //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
  list('titular' => $titular, 'saldo' => $saldo) = $conta;
  exibeMensagem("$cpf $titular $saldo");
}
*/
/*
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>