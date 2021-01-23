<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa6904f041da18551192ec2257780e0e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa6904f041da18551192ec2257780e0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa6904f041da18551192ec2257780e0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa6904f041da18551192ec2257780e0e::$classMap;

        }, null, ClassLoader::class);
    }
}
