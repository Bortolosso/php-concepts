<?php

function showMessage($message)
{
    echo $message . PHP_EOL;
    echo "\n";
}

$contNames = [
    938094832984 => [
        "name" => "Jhon",
        "money" => 10000
    ],
    402937233829 => [
        "name" => "Mike",
        "money" => 20500
    ],
    983743894739 => [
        "name" => "Jonny",
        "money" => 900
    ]
];

if (4000 > $contNames["983743894739"]["money"]) {
    showMessage("NOT AUTORIZE !");
} else {
    $contNames["983743894739"]["money"] -= 400;
}

foreach ($contNames as $cpf => $cont) {
    showMessage($cpf . " " . $cont["name"] . " " . $cont["money"] . PHP_EOL);
}
