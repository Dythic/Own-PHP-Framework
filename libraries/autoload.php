<?php

/**
 * Autoload the require 
 * 
 * @return void 
 */

spl_autoload_register(function ($className): void 
{
    $className = str_replace("\\", "/", $className);
    print($className);

    require_once("libraries/$className.php");
});
