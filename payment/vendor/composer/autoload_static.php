<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a590b79dc27723bcfd1870043b5581f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Paywall\\Payment\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Paywall\\Payment\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a590b79dc27723bcfd1870043b5581f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a590b79dc27723bcfd1870043b5581f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a590b79dc27723bcfd1870043b5581f::$classMap;

        }, null, ClassLoader::class);
    }
}
