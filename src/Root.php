<?php

namespace Acomics\Ssr;

/**
 * Project root dir container. For files work
 */
class Root
{
    private static ?string $dir = null;

    public static function dir(): string
    {
        return self::$dir ?? (self::$dir = \realpath(\dirname(__DIR__)));
    }
}
