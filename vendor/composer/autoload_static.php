<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit916a6bc4992e6dbb0f994986774eb05d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abrahamlundy\\Laracalc\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abrahamlundy\\Laracalc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit916a6bc4992e6dbb0f994986774eb05d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit916a6bc4992e6dbb0f994986774eb05d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit916a6bc4992e6dbb0f994986774eb05d::$classMap;

        }, null, ClassLoader::class);
    }
}
