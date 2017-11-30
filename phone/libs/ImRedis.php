<?php
/**
 * @description Redis初始化类
 *
 */

namespace libs;


class ImRedis {

    private static $redis;

    public static function getRedis()
    {
        if (!self::$redis instanceof \Redis) {
            self::$redis = new \Redis();
            self::$redis->connect('192.168.1.234', 30363);
            self::$redis->auth('1f2185f71d0d4');
        }
        return self::$redis;
    }

}
