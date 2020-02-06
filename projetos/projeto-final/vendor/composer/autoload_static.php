<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39d48747d11b6c2044bbc5a358db099b
{
    public static $files = array (
        'ab382a10c8511339af72dbf4f41802af' => __DIR__ . '/../..' . '/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PagSeguro\\' => 10,
        ),
        'C' => 
        array (
            'Code\\' => 5,
        ),
        'A' => 
        array (
            'Ausi\\SlugGenerator\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PagSeguro\\' => 
        array (
            0 => __DIR__ . '/..' . '/pagseguro/pagseguro-php-sdk/source',
        ),
        'Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Ausi\\SlugGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/ausi/slug-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39d48747d11b6c2044bbc5a358db099b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39d48747d11b6c2044bbc5a358db099b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
