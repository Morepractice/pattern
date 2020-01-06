<?php
namespace Tests\DesignPatterns\Creational\Prototype\Tests;

use Tests\DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooBookPrototype = new FooBookPrototype();

        for($i = 0; $i < 20; $i++) {
            $fooBook = clone $fooBookPrototype;
            $fooBook->setTitle("Foo Book {$i}");
            $this->assertInstanceOf(FooBookPrototype::class, $fooBook);
        }
    }
}