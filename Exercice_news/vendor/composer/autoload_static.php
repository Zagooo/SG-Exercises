<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92fda30b1b00486497b810ac545909d2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92fda30b1b00486497b810ac545909d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92fda30b1b00486497b810ac545909d2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit92fda30b1b00486497b810ac545909d2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}