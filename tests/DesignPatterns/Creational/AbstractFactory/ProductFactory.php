<?php
    namespace Tests\DesignPatterns\Creational\AbstractFactory;

    class ProductFactory
    {
        const SHIPPING_CONSTS = 50;

        public function createShippableProduct(int $price):Product
        {
            return new ShippableProduct(self::SHIPPING_CONSTS, $price);
        }

        public function createDigitalProduct(int $price):Product
        {
            return new DigitalProduct($price);
        }
    }