<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

// cria variaveis a partir de elementos de um array
extract($dados);
var_dump($nome, $nota, $idade);

// cria um array apartir de variaveis (os parametros são os nomes da variaveis que se tornarão os nomes do elementos do novo array)
var_dump(compact('nome', 'nota', 'idade'));