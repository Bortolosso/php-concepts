<?php

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
    if ($valuesend > 0) {
        $cont["money"] += $valuesend;
    } else {
        echo "NEGATIVE SEND MONEY !" . PHP_EOL;
    }

    return $cont;
}

function showMessage(string $message) //Subrotina
{
    echo $message . PHP_EOL;
    echo "\n";
}

function StringToUppercase(array &$cont) //Passagem por referencia = o & passa exatamente esse "dado" pra logica da funcao
{
   $cont["name"] = mb_strtoupper($cont["name"]);
}
