<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit163767d715d89782f69cf55833ff7499
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Code\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit163767d715d89782f69cf55833ff7499::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit163767d715d89782f69cf55833ff7499::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}