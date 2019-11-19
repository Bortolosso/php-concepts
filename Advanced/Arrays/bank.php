<?php


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

$contNames["402937233829"]["money"] -= 1000;
if(1000 > $cont["983743894739"]["money"])
{
    echo "NOT AUTORIZE !" . PHP_EOL;
}else{
    $contNames["983743894739"]["money"] -= 1000;
}

foreach ($contNames as $cpf => $cont)
{
//    echo $cont["name"] . PHP_EOL; //Pegar nomes
    echo $cpf . "" . $cont["name"] . "" . $cont["money"] . PHP_EOL; //Pegar CPF
}
