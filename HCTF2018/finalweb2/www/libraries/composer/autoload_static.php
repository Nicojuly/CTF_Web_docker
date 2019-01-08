<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ab6a437073504fd06d12729b991f74b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ab6a437073504fd06d12729b991f74b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ab6a437073504fd06d12729b991f74b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
