<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48b6c6ed107b5f4a9ca8e18e35f29dfc
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ihsan\\Promotion\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ihsan\\Promotion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48b6c6ed107b5f4a9ca8e18e35f29dfc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48b6c6ed107b5f4a9ca8e18e35f29dfc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
