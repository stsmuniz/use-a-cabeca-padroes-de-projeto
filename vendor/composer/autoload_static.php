<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa7ee3905259555e59f3b7a1ab89cd43
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa7ee3905259555e59f3b7a1ab89cd43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa7ee3905259555e59f3b7a1ab89cd43::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
