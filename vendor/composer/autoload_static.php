<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbafd897f76e6de7a45afd8f6e92911ad
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbafd897f76e6de7a45afd8f6e92911ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbafd897f76e6de7a45afd8f6e92911ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbafd897f76e6de7a45afd8f6e92911ad::$classMap;

        }, null, ClassLoader::class);
    }
}
