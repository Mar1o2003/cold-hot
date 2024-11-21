<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit399765254a7f4d34b499edff6827d236
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '0e3a2ed81f73f13dfd4ca3858cc6a993' => __DIR__ . '/../..' . '/src/Controller.php',
        '39f71bbcf3beac8c271db20aa3f18dd6' => __DIR__ . '/../..' . '/src/View.php',
        '5ca4bd91fc6c05182c0d2bb1d720b7c5' => __DIR__ . '/../..' . '/src/Game.php',
        '59b9d7c5ceba503df3fe38ea1e218efa' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'M' => 
        array (
            'Mario2003\\ColdHot\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Mario2003\\ColdHot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit399765254a7f4d34b499edff6827d236::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit399765254a7f4d34b499edff6827d236::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit399765254a7f4d34b499edff6827d236::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit399765254a7f4d34b499edff6827d236::$classMap;

        }, null, ClassLoader::class);
    }
}
