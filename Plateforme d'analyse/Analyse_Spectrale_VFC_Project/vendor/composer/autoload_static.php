<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b333c8b7c5667bc44a4901a0c77e580
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webit\\Math\\Fft\\' => 15,
            'Webit\\Math\\ComplexNumber\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webit\\Math\\Fft\\' => 
        array (
            0 => __DIR__ . '/..' . '/webit/fft/src',
        ),
        'Webit\\Math\\ComplexNumber\\' => 
        array (
            0 => __DIR__ . '/..' . '/webit/complex-number/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b333c8b7c5667bc44a4901a0c77e580::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b333c8b7c5667bc44a4901a0c77e580::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}