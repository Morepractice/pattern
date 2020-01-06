<?php 
namespace Tests\DesignPatterns\Creational\Multiton;

final class Multiton
{
    const INSTANCE_1 = 1;
    const INSTANCE_2 = 2;

    /** @var 实例数组*/
    private static $instances = array();

    /** 
     * 阻止用户随意实例化
    */
    public function __construct()
    {

    }

    /**
     * 实例化
     */
    public function getInstance(string $instanceName):Multiton
    {
        if(!isset(self::$instances[$instanceName]))
        {
            self::$instances[$instanceName] = new self();
        }
        return self::$instances[$instanceName];
    }

    /**
     * 阻止对象被序列化
     */
    private function __wakeup()
    {

    }

    /**
     * 阻止对象被克隆
     */
    private function __clone()
    {

    }
}