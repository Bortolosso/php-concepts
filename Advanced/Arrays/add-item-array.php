<?php

$breakLine = '-------------------////-------------------';

//Array numericos

$ageList = [10, 12, 14, 16, 18, 20, 22, 24];

$ageList[8] = 20; //Inserir dados no array

foreach ($ageList as $age)
{
    echo $age . PHP_EOL;
}

echo "\n";
echo $breakLine, "\n";
echo "\n";

//Inserir o dado na ultima posicao

$ageList = [10, 12, 14, 16, 18, 20, 22, 24];

$ageList[count($ageList)] = 20; //Inserir dados no array //count() = tras o numero de chave dos arrays

foreach ($ageList as $age)
{
    echo $age . PHP_EOL;
}
