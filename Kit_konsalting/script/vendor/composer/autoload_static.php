<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06ab293c324446f3faee154e716cf472
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'RetailCrm\\' => 
            array (
                0 => __DIR__ . '/..' . '/retailcrm/api-client-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit06ab293c324446f3faee154e716cf472::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
