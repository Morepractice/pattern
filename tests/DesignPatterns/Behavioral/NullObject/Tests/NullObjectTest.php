<?php
namespace Tests\DesignPatterns\Behavioral\NullObject\Tests;

use Tests\DesignPatterns\Behavioral\NullObject\PrintLogger;
use Tests\DesignPatterns\Behavioral\NullObject\NullLogger;
use Tests\DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());

        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());

        $this->expectOutputString("We are in Tests\DesignPatterns\Behavioral\NullObject\Service::doSomething");
        $service->doSomething();
    }
}