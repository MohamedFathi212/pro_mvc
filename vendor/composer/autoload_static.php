<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a6010c4915e9b060d8d2f9433e45de0
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'D' => 
        array (
            'Dev\\Mo\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Dev\\Mo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a6010c4915e9b060d8d2f9433e45de0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a6010c4915e9b060d8d2f9433e45de0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a6010c4915e9b060d8d2f9433e45de0::$classMap;

        }, null, ClassLoader::class);
    }
}
