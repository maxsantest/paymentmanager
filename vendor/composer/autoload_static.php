<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f9429a49ddd2d59c28dc2cbde010331
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Testpackage\\PaymentManager\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Testpackage\\PaymentManager\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f9429a49ddd2d59c28dc2cbde010331::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f9429a49ddd2d59c28dc2cbde010331::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f9429a49ddd2d59c28dc2cbde010331::$classMap;

        }, null, ClassLoader::class);
    }
}
