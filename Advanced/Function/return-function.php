<?php

//function add($x)
//{
//    return $x + 2;
//}

//$resut = add(5);

//echo $resut;

function pay(array $cont, float $valuepay): array //Funcao
{
    if ($valuepay > $cont["money"]) {
        showMessage("NOT AUTORIZE !");
    } else {
        $cont["money"] -= $valuepay;
    }
    return $cont;
}

function send(array $cont, float $valuesend): array //Funcao
{
    if($valuesend > 0)
    {
        $cont["money"] += $valuesend;
    }else{
        echo "NEGATIVE SEND MONEY !" . PHP_EOL;
    }

    return $cont;
}

function showMessage(string $message) //Subrotina
{
    echo $message . PHP_EOL;
    echo "\n";
}

$contNames = [
    "938.094.832-84" => [
        "name" => "Jhon",
        "money" => 10000
    ],
    "402.937.233-29" => [
        "name" => "Mike",
        "money" => 20500
    ],
    "983.743.894-39" => [
        "name" => "Jonny",
        "money" => 900
    ]
];

//Pagar
$contNames["938.094.832-84"] = pay($contNames["938.094.832-84"], 100);
$contNames["402.937.233-29"] = pay($contNames["402.937.233-29"], 100);
$contNames["983.743.894-39"] = pay($contNames["983.743.894-39"], 100);

//Mandar
$contNames["938.094.832-84"] = send($contNames["938.094.832-84"], 900);
$contNames["402.937.233-29"] = send($contNames["402.937.233-29"], 900);
$contNames["983.743.894-39"] = send($contNames["983.743.894-39"], 900);

foreach ($contNames as $cpf => $cont) {

    //Interpolacao e Strings complexas

    /*
    showMessage(
        $cpf . " " . $cont["name"] . " " . $cont["money"] . PHP_EOL
    );
    */

    // OU -> Formatacoes de strings, tipo de exibicao de dados complexos

    showMessage(
        "$cpf {$cont['name']} {$cont['money']}"
    );

}
