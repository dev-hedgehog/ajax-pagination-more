<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97eabd10eb6602f641d78ee464752c50
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Premmerce\\SDK\\' => 14,
        ),
        'A' => 
        array (
            'AjaxPagination\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Premmerce\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/premmerce/wordpress-sdk/src',
        ),
        'AjaxPagination\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97eabd10eb6602f641d78ee464752c50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97eabd10eb6602f641d78ee464752c50::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
