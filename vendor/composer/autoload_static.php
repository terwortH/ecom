<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf0e19c0f8e3f0e1d10c446b5ed908de
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf0e19c0f8e3f0e1d10c446b5ed908de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf0e19c0f8e3f0e1d10c446b5ed908de::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
