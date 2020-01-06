<?php
namespace Tests\DesignPatterns\Creational\Singleton;

final class Singleton
{
    /**
     * @var Singleton
     */
    private static $singleton;

    /**
     * 单例模式永远同一个对象
     */
    public static function getInstance()
    {
        if(null == static::$singleton){
            static::$singleton = new static();
        } 

        return static::$singleton;
    }

    /**
     * 防止被直接创建
     */
    private function __construct()
    {
        
    }
    /**
     * 单例模式防止被克隆
     */
    private function __clone()
    {

    }

    /**
     * 防止被序列化
     */
    private function __wakeup()
    {
        
    }
}