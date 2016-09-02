<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eb1f78b276f6263aa8fbb46b1b769dc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AdamGuan\\composerTest\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AdamGuan\\composerTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eb1f78b276f6263aa8fbb46b1b769dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eb1f78b276f6263aa8fbb46b1b769dc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
