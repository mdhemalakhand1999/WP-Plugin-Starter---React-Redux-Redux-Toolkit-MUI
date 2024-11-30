<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit682ba4e774db2f50993f413fed232cfe
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HSOFT\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HSOFT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit682ba4e774db2f50993f413fed232cfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit682ba4e774db2f50993f413fed232cfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit682ba4e774db2f50993f413fed232cfe::$classMap;

        }, null, ClassLoader::class);
    }
}