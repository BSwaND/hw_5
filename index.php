<?php

require_once 'vendor/autoload.php';

$autoload = new Autoload;
$autoload->getPrefix(['app' => 'src']);
$autoload->register();

$myClass = new app\Myclass\Myclass();

echo 'Hello world!';