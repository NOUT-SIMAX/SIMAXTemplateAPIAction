<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdca5f02584ec0c2879650c720b3686f5
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NOUT\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NOUT\\' => 
        array (
            0 => __DIR__ . '/../PHPTemplate' . '/NOUT',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/vendor' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdca5f02584ec0c2879650c720b3686f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdca5f02584ec0c2879650c720b3686f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdca5f02584ec0c2879650c720b3686f5::$classMap;

        }, null, ClassLoader::class);
    }
}
