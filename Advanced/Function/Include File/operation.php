<?php

//include "function.php"; //o "include" foi feito para nao gerar erro, ou seja, gerar arquivos
                        //nao relevantes diferente do "require"

require_once "function.php"; //o "require_once" verifica se algum arquivo ja foi incluido,
                             //sendo assim nao havendo conflito caso seja importado o mesmo arquivo duas vezes
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

//String para maiuscula
StringToUppercase($contNames["938.094.832-84"]);
StringToUppercase($contNames["402.937.233-29"]);
StringToUppercase($contNames["983.743.894-39"]);

//Remover variaveis/indice de um array da memoria
unset($contNames["938.094.832-84"]);
unset($contNames["402.937.233-29"]);
unset($contNames["983.743.894-39"]);

foreach ($contNames as $cpf => $cont) {

    //Interpolacao e Strings complexas FORMAS DE ESCREVER

    /*
    showMessage(
        $cpf . " " . $cont["name"] . " " . $cont["money"] . PHP_EOL
    );
    */

    // OU -> Formatacoes de strings, tipo de exibicao de dados complexos

    /*
    showMessage(
        "$cpf {$cont['name']} {$cont['money']}"
    );
    */

    // OU

    /*
    list("name" => $name, "money" => $money) = $cont;
    showMessage(
        "$cpf $name $money"
    );
    */

    // OU

    ["name" => $name, "money" => $money] = $cont;
    showMessage(
        "$cpf $name $money"
    );
}

