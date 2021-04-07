<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit539cc8e6cfae666c6ef6fb836cfb20e4
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '44f761fde233c98b53686bd6223104dd' => __DIR__ . '/..' . '/pocketmine/pocketmine-mp/src/pocketmine/CoreConstants.php',
        '9c3c6f7f4a17396c3ff535f7d7c38ad4' => __DIR__ . '/..' . '/pocketmine/pocketmine-mp/src/pocketmine/GlobalConstants.php',
        '89d5de50ff2daa656af29fba38fbd9af' => __DIR__ . '/..' . '/pocketmine/pocketmine-mp/src/pocketmine/VersionInfo.php',
    );

    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'raklib\\' => 7,
        ),
        'p' => 
        array (
            'pocketmine\\utils\\' => 17,
            'pocketmine\\snooze\\' => 18,
            'pocketmine\\nbt\\' => 15,
            'pocketmine\\math\\' => 16,
            'phpseclib\\' => 10,
        ),
        'D' => 
        array (
            'DaveRandom\\CallbackValidator\\' => 29,
        ),
        'A' => 
        array (
            'Ahc\\Json\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'raklib\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/raklib/src',
        ),
        'pocketmine\\utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/binaryutils/src',
        ),
        'pocketmine\\snooze\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/snooze/src',
        ),
        'pocketmine\\nbt\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/nbt/src',
        ),
        'pocketmine\\math\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/math/src',
        ),
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'DaveRandom\\CallbackValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/callback-validator/src',
        ),
        'Ahc\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/adhocore/json-comment/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/pocketmine/pocketmine-mp/src',
    );

    public static $classMap = array (
        'ArrayOutOfBoundsException' => __DIR__ . '/..' . '/pocketmine/spl/src/ArrayOutOfBoundsException.php',
        'AttachableLogger' => __DIR__ . '/..' . '/pocketmine/log/src/AttachableLogger.php',
        'AttachableThreadedLogger' => __DIR__ . '/..' . '/pocketmine/log-pthreads/src/AttachableThreadedLogger.php',
        'BaseClassLoader' => __DIR__ . '/..' . '/pocketmine/classloader/src/BaseClassLoader.php',
        'ClassCastException' => __DIR__ . '/..' . '/pocketmine/spl/src/ClassCastException.php',
        'ClassLoader' => __DIR__ . '/..' . '/pocketmine/classloader/src/ClassLoader.php',
        'ClassNotFoundException' => __DIR__ . '/..' . '/pocketmine/spl/src/ClassNotFoundException.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'InvalidArgumentCountException' => __DIR__ . '/..' . '/pocketmine/spl/src/InvalidArgumentCountException.php',
        'InvalidKeyException' => __DIR__ . '/..' . '/pocketmine/spl/src/InvalidKeyException.php',
        'InvalidStateException' => __DIR__ . '/..' . '/pocketmine/spl/src/InvalidStateException.php',
        'LogLevel' => __DIR__ . '/..' . '/pocketmine/log/src/LogLevel.php',
        'Logger' => __DIR__ . '/..' . '/pocketmine/log/src/Logger.php',
        'LoggerAttachment' => __DIR__ . '/..' . '/pocketmine/log/src/LoggerAttachment.php',
        'SplFixedByteArray' => __DIR__ . '/..' . '/pocketmine/spl/src/SplFixedByteArray.php',
        'StringOutOfBoundsException' => __DIR__ . '/..' . '/pocketmine/spl/src/StringOutOfBoundsException.php',
        'ThreadException' => __DIR__ . '/..' . '/pocketmine/spl/src/ThreadException.php',
        'ThreadedLogger' => __DIR__ . '/..' . '/pocketmine/log-pthreads/src/ThreadedLogger.php',
        'ThreadedLoggerAttachment' => __DIR__ . '/..' . '/pocketmine/log-pthreads/src/ThreadedLoggerAttachment.php',
        'UndefinedConstantException' => __DIR__ . '/..' . '/pocketmine/spl/src/UndefinedConstantException.php',
        'UndefinedPropertyException' => __DIR__ . '/..' . '/pocketmine/spl/src/UndefinedPropertyException.php',
        'UndefinedVariableException' => __DIR__ . '/..' . '/pocketmine/spl/src/UndefinedVariableException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit539cc8e6cfae666c6ef6fb836cfb20e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit539cc8e6cfae666c6ef6fb836cfb20e4::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit539cc8e6cfae666c6ef6fb836cfb20e4::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit539cc8e6cfae666c6ef6fb836cfb20e4::$classMap;

        }, null, ClassLoader::class);
    }
}
