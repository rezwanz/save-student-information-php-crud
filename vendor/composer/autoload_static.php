<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit883342f2dfd228af34c39785f64109b9
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit883342f2dfd228af34c39785f64109b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit883342f2dfd228af34c39785f64109b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit883342f2dfd228af34c39785f64109b9::$classMap;

        }, null, ClassLoader::class);
    }
}