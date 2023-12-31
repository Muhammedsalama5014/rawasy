<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit176d961b41ab9976918d41d24a6a563d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clinic_two\\Classes\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clinic_two\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit176d961b41ab9976918d41d24a6a563d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit176d961b41ab9976918d41d24a6a563d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit176d961b41ab9976918d41d24a6a563d::$classMap;

        }, null, ClassLoader::class);
    }
}
