<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc521ac9b2dce70942353720c8a151232
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc521ac9b2dce70942353720c8a151232::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc521ac9b2dce70942353720c8a151232::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc521ac9b2dce70942353720c8a151232::$classMap;

        }, null, ClassLoader::class);
    }
}