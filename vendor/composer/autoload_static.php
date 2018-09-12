<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd2c53b692bc47f56228daf3f60f9fde
{
    public static $files = array (
        '4bbef8c365970ac1980bb53ed27fb456' => __DIR__ . '/..' . '/qous/sort/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qous\\Captcha\\' => 13,
            'Qous\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'D' => 
        array (
            'Dj\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qous\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/qous/captcha/src',
        ),
        'Qous\\' => 
        array (
            0 => __DIR__ . '/..' . '/qous/curl/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'Dj\\' => 
        array (
            0 => __DIR__ . '/..' . '/aileshe/upload/src/Upload',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static $classMap = array (
        'upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd2c53b692bc47f56228daf3f60f9fde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd2c53b692bc47f56228daf3f60f9fde::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfd2c53b692bc47f56228daf3f60f9fde::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfd2c53b692bc47f56228daf3f60f9fde::$classMap;

        }, null, ClassLoader::class);
    }
}
