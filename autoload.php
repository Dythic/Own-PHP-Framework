<?php

/**
 * Autoload the require 
 * 
 * @return void 
 */

spl_autoload_register(function ($className): void 
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $file = __DIR__ . '/' . $class . '.php';

    if (file_exists($file)) {
        require_once $file;
        return;
    }
});
