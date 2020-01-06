<?php
namespace Tests\DesignPatterns\Creational\SimpleFactory;

use Tests\DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use Tests\DesignPatterns\Creational\SimpleFactory\Bicycle;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycles()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}