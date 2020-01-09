<?php
namespace Tests\DesignPatterns\Structural\Flyweight;

class CharacterFlyweight implements Flyweight
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        return $this->name = $name;
    }

    public function render(string $font):string
    {
        return sprintf('Character %s with fonts %s', $this->name, $font);
    }
}