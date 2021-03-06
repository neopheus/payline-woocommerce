<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89e7d985dd998990b521c4b61d9167fe
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Payline\\' => 8,
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
        'Payline\\' => 
        array (
            0 => __DIR__ . '/..' . '/monext/payline-sdk/src/Payline',
            1 => __DIR__ . '/..' . '/monext/payline-tools-sdk/src/PaylineTools',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Payline\\' => 
            array (
                0 => __DIR__ . '/..' . '/monext/payline-sdk/src/Payline',
                1 => __DIR__ . '/..' . '/monext/payline-tools-sdk/src/PaylineTools',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89e7d985dd998990b521c4b61d9167fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89e7d985dd998990b521c4b61d9167fe::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit89e7d985dd998990b521c4b61d9167fe::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
