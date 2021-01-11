<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite88cc7eb249a0b29c94f6c2292bb6b42
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite88cc7eb249a0b29c94f6c2292bb6b42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite88cc7eb249a0b29c94f6c2292bb6b42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite88cc7eb249a0b29c94f6c2292bb6b42::$classMap;

        }, null, ClassLoader::class);
    }
}