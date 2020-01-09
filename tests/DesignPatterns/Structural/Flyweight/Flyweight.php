<?php
namespace Tests\DesignPatterns\Structural\Flyweight;

interface Flyweight
{
    public function render(string $font):string;
}