<?php

$ageList = [10, 12, 14, 16, 18, 20, 22, 24];


for($i = 0; $i <  count($ageList); $i++)
{
    echo $ageList[$i] . PHP_EOL;
}

echo PHP_EOL . count($ageList); // count() -> funcao do PHP que retorna quantos itens tem dentro do array
