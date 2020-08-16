<?php

spl_autoload_register(
    function (string $namespaceClass): void {
        $sourcePath = DIRECTORY_SEPARATOR . "src";
        $classPath = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClass);

        $finalPath = getcwd() . $sourcePath . DIRECTORY_SEPARATOR . "{$classPath}.php";
        
        @include_once $finalPath;
    }
);