<?php

namespace Acomics\Ssr;

/**
 * Этот файл сгенерирован автоматически. Не изменять вручную.
 */
class HashesGenerated
{
    public static function getHash(string $staticPath): string
    {
        return static::getList()[$staticPath] ?? '';
    }

    public static function getList(): array
    {
        return [
            'static/bundle/common.css' => 'e97ceeaa42d74ae599e8f84a42635aab',
            'static/bundle/common.js' => 'e39929eebee8ff44624824067e9b8773',
            'static/bundle/main.css' => 'fd93879ac5d3cf79ead3da94b45f8350',
            'static/bundle/serial.css' => '4572b58630b8c411ec51c94bf0b79d09',
            'static/bundle/serial.js' => '4d7fd8b2dd5d143acc4d7db99b8fd21d',
        ];
    }
}
