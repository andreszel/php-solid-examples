<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4d0cf5b7b2b5367b727c1457e4b175f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite4d0cf5b7b2b5367b727c1457e4b175f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4d0cf5b7b2b5367b727c1457e4b175f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4d0cf5b7b2b5367b727c1457e4b175f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}