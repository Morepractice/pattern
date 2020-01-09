<?php
namespace Tests\DesignPatterns\Structural\Registry\Tests;

use Tests\DesignPatterns\Structural\Registry\Registry;
use stdClass;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    public function testRegistry()
    {
        $std = new stdClass();
        Registry::set(Registry::LOGGER,$std);
        $stdRegistry = Registry::get(Registry::LOGGER);
        
        $this->assertInstanceOf(stdClass::class,$stdRegistry);
        $this->assertSame($std,$stdRegistry);
    }
}