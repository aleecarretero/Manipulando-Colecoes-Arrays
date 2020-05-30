<?php

class Calculadora {

    public function calculaMedia(array $notas): float {
        $tamanhoArray = sizeof($notas);

        if ($tamanhoArray > 0) {
            $soma = 0;
            for ($i = 0; $i < $tamanhoArray; $i++) {
                $soma += $notas[$i];
            }
            $media = $soma / $tamanhoArray;
        
            return $media;
        } else {
            return null;
        }
    }

}