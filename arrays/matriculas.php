<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

// merge com o operador de espalhamento "..." (une dois arrays com a possibilidade de incluir outros elementos)
//$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];

// merge com o operador de união "+" (une dois arrays mas mantem os elementos do primeiro array no caso de chaves semelhantes)
//$alunos2022 = $alunos2021 + $novosAlunos;

// função de merge, no caso de chaves numericas recria as mesmas no produto final, alterando as chaves do segundo array, no caso de chaves string, caso existam a mesma chave o seu valor é alterado com o último valor)
$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);
