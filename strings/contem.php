<?php

$nome = 'Eduardo Teixeira';
$famnilia = 'Teixeira';

$ehDaMinhaFamilia = str_contains($nome, $famnilia);

if ($ehDaMinhaFamilia) {
    echo "$nome é da familia $famnilia" . PHP_EOL;
} else {
    echo "$nome não é da familia $famnilia" . PHP_EOL;
}
