<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9ae9e0b535522a8ec3f75c03723ce2c
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9ae9e0b535522a8ec3f75c03723ce2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9ae9e0b535522a8ec3f75c03723ce2c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
