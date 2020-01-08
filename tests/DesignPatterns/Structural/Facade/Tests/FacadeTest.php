<?php
namespace Tests\DesignPatterns\Structural\Facade\Tests;

use Tests\DesignPatterns\Structural\Facade\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock('Tests\DesignPatterns\Structural\Facade\OsInterface');
        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('Tests\DesignPatterns\Structural\Facade\BiosInterface')
                ->setMethods(['launch','execute','waitForKeyPress'])
                ->disableAutoload()
                ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($os,$bios);
        $facade->turnOn();

        $this->assertEquals('Linux',$os->getName());
    }
}