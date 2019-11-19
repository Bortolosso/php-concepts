<?php

$weight = 60;
$height = 1.74;
$imc = $weight / $height ** 2;

echo " IMC is  $imc.";

if ($imc < 18.5) {
    echo "LOW";
} elseif ($imc < 25) {
    echo "OK";
} else {
    echo "HIGH";
}

echo "than recommended";