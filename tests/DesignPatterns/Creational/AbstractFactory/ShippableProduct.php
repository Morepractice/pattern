<?php
     
    namespace Tests\DesignPatterns\Creational\AbstractFactory;

    class ShippableProduct implements Product
    {
        /**
         * var float
         */
        private $shippingCosts;

        /**
         * var float
         */
        private $productPrice;
        
        public function __construct(int $shippingCosts, int $productPrice)
        {
            $this->shippingCosts = $shippingCosts;
            $this->productPrice = $productPrice;
        }

        public function caculatePrice(): int
        {
            return $this->shippingCosts + $this->productPrice;
        }
    }