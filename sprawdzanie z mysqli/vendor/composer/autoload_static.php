<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb64db41853e55431aeab1ea80bf0c543
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Ordermaker\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ordermaker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb64db41853e55431aeab1ea80bf0c543::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb64db41853e55431aeab1ea80bf0c543::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb64db41853e55431aeab1ea80bf0c543::$classMap;

        }, null, ClassLoader::class);
    }
}
