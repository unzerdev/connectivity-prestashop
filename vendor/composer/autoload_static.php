<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb55ead4221a71a14f31bef9f15fd918d
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UnzerSDK\\examples\\' => 18,
            'UnzerSDK\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UnzerSDK\\examples\\' => 
        array (
            0 => __DIR__ . '/..' . '/unzerdev/php-sdk/examples',
        ),
        'UnzerSDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/unzerdev/php-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb55ead4221a71a14f31bef9f15fd918d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb55ead4221a71a14f31bef9f15fd918d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb55ead4221a71a14f31bef9f15fd918d::$classMap;

        }, null, ClassLoader::class);
    }
}
