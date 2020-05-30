<?php

// // Media
//     require_once 'src/model/Calculadora.php';

//     $notas = [9, 3, 10, 5, 10, 8];


//     $calculadora = new Calculadora();
//     $media = $calculadora->calculaMedia($notas);

//     if ($media) {
//         echo "A média é {$media}";
//     } else {
//         "Não foi possível calcular a média";
//     }



// // Explode and Implode

//     $nomes = "Giovanni, João, Maria, Pedro";

//     $nomesArray = explode(", ", $nomes);

//     foreach ($nomesArray as $nome) {
//         echo "O nome é {$nome}" . PHP_EOL;
//     }

//     $nomesArrayString = implode(", ", $nomesArray);

//     echo $nomesArrayString;



// Remoção

require 'src\model\ArrayUtils.php';

$correntistas_e_compras = [ 
    "Giovanni",
    "Joao",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

var_dump($correntistas_e_compras) . PHP_EOL;

ArrayUtils::remover("12",$correntistas_e_compras);

var_dump($correntistas_e_compras);