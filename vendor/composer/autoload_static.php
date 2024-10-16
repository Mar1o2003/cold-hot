<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit930646065cf372d265067d0f2522ce54
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '0e3a2ed81f73f13dfd4ca3858cc6a993' => __DIR__ . '/../..' . '/src/Controller.php',
        '39f71bbcf3beac8c271db20aa3f18dd6' => __DIR__ . '/../..' . '/src/View.php',
        '5ca4bd91fc6c05182c0d2bb1d720b7c5' => __DIR__ . '/../..' . '/src/Game.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mario2003\\Cold-hot\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mario2003\\Cold-hot\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit930646065cf372d265067d0f2522ce54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit930646065cf372d265067d0f2522ce54::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit930646065cf372d265067d0f2522ce54::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit930646065cf372d265067d0f2522ce54::$classMap;

        }, null, ClassLoader::class);
    }
}
