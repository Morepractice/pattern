<?php
namespace Tests\DesignPatterns\Structural\Flyweight;

class CharacterFactory implements \Countable
{
    /**
     * @var Flyweight[]
     */
    private $characters;

    public function get(string $name):Flyweight
    {
        if(!isset($this->characters[$name]))
        {
            $this->characters[$name] = new CharacterFlyweight($name);
        }

        return $this->characters[$name];
    } 

    public function count():int
    {
        return count($this->characters);
    }
}