<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ef94c4bd8595736b10478521ee5e830
{
    public static $files = array (
        '43b019eb911cbc75fcb192db00a89259' => __DIR__ . '/../..' . '/config/global.functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpfox\\View\\' => 12,
            'Phpfox\\ViewWidget\\' => 18,
            'Phpfox\\ViewAsset\\' => 17,
            'Phpfox\\Validator\\' => 17,
            'Phpfox\\Session\\' => 15,
            'Phpfox\\Service\\' => 15,
            'Phpfox\\Router\\' => 14,
            'Phpfox\\RequireJs\\' => 17,
            'Phpfox\\Mysqli\\' => 14,
            'Phpfox\\Mvc\\' => 11,
            'Phpfox\\Mail\\' => 12,
            'Phpfox\\Log\\' => 11,
            'Phpfox\\I18n\\' => 12,
            'Phpfox\\Form\\' => 12,
            'Phpfox\\FileStorage\\' => 19,
            'Phpfox\\EventManager\\' => 20,
            'Phpfox\\Db\\' => 10,
            'Phpfox\\Cache\\' => 13,
            'Phpfox\\Auth\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpfox\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-view/src',
        ),
        'Phpfox\\ViewWidget\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-view-widget/src',
        ),
        'Phpfox\\ViewAsset\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-view-asset/src',
        ),
        'Phpfox\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-validator/src',
        ),
        'Phpfox\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-session/src',
        ),
        'Phpfox\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-service/src',
        ),
        'Phpfox\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-router/src',
        ),
        'Phpfox\\RequireJs\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-requirejs/src',
        ),
        'Phpfox\\Mysqli\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-mysqli/src',
        ),
        'Phpfox\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-mvc/src',
        ),
        'Phpfox\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-mail/src',
        ),
        'Phpfox\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-log/src',
        ),
        'Phpfox\\I18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-i18n/src',
        ),
        'Phpfox\\Form\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-form/src',
        ),
        'Phpfox\\FileStorage\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-file-storage/src',
        ),
        'Phpfox\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-event-manager/src',
        ),
        'Phpfox\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-db/src',
        ),
        'Phpfox\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-cache/src',
        ),
        'Phpfox\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/codelego/phpfox-auth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ef94c4bd8595736b10478521ee5e830::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ef94c4bd8595736b10478521ee5e830::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}