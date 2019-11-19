<?php

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

$contNames = [$cont1, $cont2, $cont3];

echo $contNames[0]["name"] . PHP_EOL; //passar parametros

for ($i = 0;  $i < count($contNames); $i++)
{
    echo $contNames[$i]["name"] . PHP_EOL;
}

