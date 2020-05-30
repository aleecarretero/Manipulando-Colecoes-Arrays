<?php

class ArrayUtils {
    
    public static function remover(string $elemento, array &$array){
        $posicao = array_search($elemento, $array);
        if (is_int($posicao)) {
            unset($array[$posicao]);
            echo "{$elemento} removido com sucesso";
        } else {
            echo "{$elemento} não foi encontrado";
        }
    }
}