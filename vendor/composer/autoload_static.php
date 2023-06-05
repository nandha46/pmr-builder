<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad0ff97609c7916a09b4f034464c8fc2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad0ff97609c7916a09b4f034464c8fc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad0ff97609c7916a09b4f034464c8fc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad0ff97609c7916a09b4f034464c8fc2::$classMap;

        }, null, ClassLoader::class);
    }
}
