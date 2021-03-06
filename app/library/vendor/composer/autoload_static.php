<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit198bcbdcb5ba68bab8a6586eb8cd2aec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit198bcbdcb5ba68bab8a6586eb8cd2aec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit198bcbdcb5ba68bab8a6586eb8cd2aec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
