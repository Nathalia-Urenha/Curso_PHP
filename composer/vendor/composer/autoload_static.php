<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf18bc394875b617d8e0d43d1f486ceb3
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf18bc394875b617d8e0d43d1f486ceb3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf18bc394875b617d8e0d43d1f486ceb3::$classMap;

        }, null, ClassLoader::class);
    }
}
