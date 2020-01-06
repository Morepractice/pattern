<?php
namespace Tests\DesignPatterns\Creational\StaticFactory\Tests;

use Tests\DesignPatterns\Creational\StaticFactory\StringFormat;
use Tests\DesignPatterns\Creational\StaticFactory\NumberFormat;
use Tests\DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateStringFormat()
    {
        $stringFormat = StaticFactory::factory('string');

        $this->assertInstanceOf(StringFormat::class, $stringFormat);
    }

    public function testCanCreateNumberFormat()
    {
        $numberFormat = StaticFactory::factory('number');

        $this->assertInstanceOf(NumberFormat::class, $numberFormat);
    }
}