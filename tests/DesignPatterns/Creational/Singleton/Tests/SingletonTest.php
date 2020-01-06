<?php
namespace Tests\DesignPatterns\Creational\Singleton\Tests;

use Tests\DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testCanCreateSingleton()
    {
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $singleton1);
        $this->assertSame($singleton1, $singleton2);
    }
}