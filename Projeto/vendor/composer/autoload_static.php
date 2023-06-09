<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd66183f89d0fb753fc0e4cbc28e61132
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHP\\DesignPattern\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHP\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd66183f89d0fb753fc0e4cbc28e61132::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd66183f89d0fb753fc0e4cbc28e61132::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd66183f89d0fb753fc0e4cbc28e61132::$classMap;

        }, null, ClassLoader::class);
    }
}
