<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

// substitui palavras 
echo str_replace(
    ['poxa', 'caramba'], // o que
    ['p', 'c'], // pelo o que
    $texto // onde
) . PHP_EOL;

// substitui caracteres (translate)
echo strtr(
    $texto, // onde
    'poxa', // o que
    '***@'  // pelo o que
) . PHP_EOL;

// variação usando um array para definir "o que" e "pelo o que"
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;

// o translate não desfaz alterações, no caso abaixo é trocado "hello" por "hi" no caso 1, 
// em seguida é trocado o "hi" por "hello" no caso 2, mas a substituição feita no primeiro caso
// não é sobrescrita, ficando último "hi" da frase presente no resultado
$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

// com o replace o caso acima não ocorre
echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hello all, I said hello") . PHP_EOL;
