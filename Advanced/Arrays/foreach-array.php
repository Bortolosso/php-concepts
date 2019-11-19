<?php

$breakLine = '-------------------////-------------------';

//Arrays associativos

$cont1 = [
    "name" => "Jhon",
    "money" => 10000
];

$cont2 = [
    "name" => "Mike",
    "money" => 20509
];

$cont3 = [
    "name" => "Jonny",
    "money" => 900
];

$contNames = [
    $cont1,
    $cont2,
    $cont3
];

foreach ($contNames as $cont)
{
    echo $cont["name"] . PHP_EOL;
}

echo $breakLine, "\n";
//Outros modos de usar
echo $breakLine, "\n";

$contNames = [
    938094832984 => $cont1,
    402937233829 => $cont2,
    983743894739 => $cont3
];

foreach ($contNames as $cpf => $cont)
{
    echo $cont["name"] . PHP_EOL; //Pegar nomes
    echo $cpf . PHP_EOL; //Pegar CPF
}

echo $breakLine, "\n";

echo $breakLine, "\n";

$contNames = [
    938094832984 => [
        "name" => "Jhon",
        "money" => 10000
    ],
    402937233829 => [
        "name" => "Mike",
        "money" => 20509
    ],
    983743894739 => [
        "name" => "Jonny",
        "money" => 900
    ]
];

$contNames[983743894729] = [ //inserir dados
    "name" => "Angel",
    "money" => 155000
];

foreach ($contNames as $cpf => $cont)
{
    echo $cont["name"] . PHP_EOL; //Pegar nomes
    echo $cpf . PHP_EOL; //Pegar CPF
}


