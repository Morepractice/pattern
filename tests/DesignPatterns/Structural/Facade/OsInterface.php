<?php
namespace Tests\DesignPatterns\Structural\Facade;

/**
 * 系统接口类
 */
interface OsInterface
{
    /**
     * 声明关机方法
     */
    public function halt();

    public function getName(): string;
}