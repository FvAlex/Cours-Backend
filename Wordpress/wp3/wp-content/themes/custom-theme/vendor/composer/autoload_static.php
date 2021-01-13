<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec06d33494b23af07a75e61362bb830a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec06d33494b23af07a75e61362bb830a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec06d33494b23af07a75e61362bb830a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec06d33494b23af07a75e61362bb830a::$classMap;

        }, null, ClassLoader::class);
    }
}
