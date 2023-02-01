<?php

$valore1 = $_POST["Valore1"];
$valore2 = $_POST["Valore2"];

if (!is_numeric($valore1) && !is_numeric($valore2)) {
    echo " <h2> I valori devono essere numerici </h2>";
    exit;
};

echo "Valore 1: $valore1 <br>";
echo "Valore 2: $valore2 <br>";

$somma = $valore1 + $valore2;

echo "Somma: $somma";
