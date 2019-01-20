<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e31402292a7d7dd14592bd58c3d13b8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e31402292a7d7dd14592bd58c3d13b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e31402292a7d7dd14592bd58c3d13b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
