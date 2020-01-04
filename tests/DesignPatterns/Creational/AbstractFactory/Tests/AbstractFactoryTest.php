<?php
    namespace Tests\DesignPatterns\Creational\AbstractFactory\Tests;

    use Tests\DesignPatterns\Creational\AbstractFactory\DigitalProduct;
    use Tests\DesignPatterns\Creational\AbstractFactory\ProductFactory;
    use Tests\DesignPatterns\Creational\AbstractFactory\ShippableProduct;
    use PHPUnit\Framework\TestCase;

    class AbstractFactoryTest extends TestCase
    {
        public function testCanCreateDigitalProduct():DigitalProduct
        {
            $factory = new ProductFactory();
            $product = $factory->createDigitalProduct(150);
            $this->assertInstanceOf(DigitalProduct::class, $product);
            return $product;
        }

        public function testCanCreateShippableProduct():ShippableProduct
        {
            $factory = new ProductFactory();
            $product = $factory->createShippableProduct(150);
            $this->assertInstanceOf(ShippableProduct::class, $product);
            return $product;
        }
        /**
         * @depends testCanCreateDigitalProduct
         */
        public function testCanCaculatePriceForDigitalProduct(DigitalProduct $product)
        {
            $this->assertEquals(150,$product->caculatePrice());
        }
        /**
         * @depends testCanCreateShippableProduct
         */
        public function testCanCaculatePriceForShippableProduct(ShippableProduct $product)
        {
            $this->assertEquals(200,$product->caculatePrice());
        }
    }