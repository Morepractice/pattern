<?php
 
namespace App\DesignPatterns\Creational\AbstractFactory;

class DigitalProduct implements Product
{
    /**
     * var float
     */
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function caculatePrice(): int
    {
        return $this->price;
    }
}