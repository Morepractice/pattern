<?php
namespace Tests\DesignPatterns\Structural\Registry;

class Registry
{
    /**
     * @var string
     */
    const LOGGER = 'logger';

    /**
     * @var array
     * 键值对
     */
    private static $staticValues = [];

    /**
     * 储存值
     */
    private static $staticKeys = [
        self::LOGGER
    ];

    public static function set(string $key, $value)
    {
        if(!in_array($key, self::$staticKeys))
        {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$staticValues[$key] = $value;
    }

    public static function get(string $key)
    {
        if(!isset(self::$staticValues[$key]) || !in_array($key, self::$staticKeys)){
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$staticValues[$key];
    }
}