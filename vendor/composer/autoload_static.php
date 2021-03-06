<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef49ea8d40048f19a9b2801a2d02be05
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Instamojo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Instamojo\\' => 
        array (
            0 => __DIR__ . '/..' . '/instamojo/instamojo-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef49ea8d40048f19a9b2801a2d02be05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef49ea8d40048f19a9b2801a2d02be05::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
