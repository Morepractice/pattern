<?php
namespace Tests\DesignPatterns\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    public function __clone()
    {
        
    }
}