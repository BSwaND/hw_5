<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit038373f52e6e139835811856a926027b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit038373f52e6e139835811856a926027b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit038373f52e6e139835811856a926027b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
