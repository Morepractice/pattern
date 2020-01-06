<?php
namespace Tests\DesignPatterns\Creational\StaticFactory;

final class StaticFactory
{
    /**
     * @param string $type
     * 
     * @return FormatterInterface
     */
    public static function factory(string $type): FormatterInterface
    {
        if('number' == $type) {
            return new NumberFormat();
        }

        if('string' == $type) {
            return new StringFormat();
        }
        
        throw new \InvalidArgumentException('Unknown type');
    }
}