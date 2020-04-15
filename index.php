<?php

/* saves this lessons

    // example PSR-4
        https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md

    // hand example
    spl_autoload_register(function ($class){
        $path = 'src/'. str_replace('\\', '/', $class). '.php';
        require_once ($path);
    });

*/


require_once 'vendor/autoload.php';

$autoload = new Autoload;
$autoload->getPrefix(['app' => 'src']);
$autoload->register();

$myClass = new app\Myclass\Myclass();

echo 'Hello world!';