<?php
namespace Tests\DesignPatterns\Structural\Flyweight;

use Tests\DesignPatterns\Structural\Flyweight\CharacterFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $flyweightFactory = new CharacterFactory();
        foreach ($this->characters as $character) {
            foreach ($this->fonts as $font) {
                $characterFlyweight = $flyweightFactory->get($character);

                $this->assertEquals("Character {$character} with fonts {$font}",$characterFlyweight->render($font));
            }
        }

        return $flyweightFactory;
    }
    
    /**
     * @depends testFlyweight
     */
    public function testCountCharacterNum(CharacterFactory $flyweightFactory)
    {
        $this->assertCount(26,$flyweightFactory);
    }
}