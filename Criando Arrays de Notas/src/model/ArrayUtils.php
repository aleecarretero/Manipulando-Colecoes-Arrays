<?php declare(strict_types = 1);

class ArrayUtils {
    
    public static function remover(string $elemento, array &$array){
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
            echo "{$elemento} removido com sucesso" . PHP_EOL;
        } else {
            echo "{$elemento} não foi encontrado" . PHP_EOL;
        }
    }
}