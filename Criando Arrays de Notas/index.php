<?php declare(strict_types=1);

namespace Alura;

require "autoloader.php";

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados = array_combine($correntistas, $saldos);

$correntistasMaior = ArrayUtils::encontrarSaldoMaior(3000,$relacionados);

echo "<pre>";

var_dump($relacionados);

var_dump($correntistasMaior);

echo "</pre>";

echo "<p>";
echo "O saldo de Giovanni é {$relacionados["Giovanni"]}";
echo "</p>";

