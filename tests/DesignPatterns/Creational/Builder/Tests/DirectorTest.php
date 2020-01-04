<?php
    namespace Tests\DesignPatterns\Creational\Tests;

    use Tests\DesignPatterns\Creational\Builder\CarBuilder;
    use Tests\DesignPatterns\Creational\Builder\TruckBuilder;
    use Tests\DesignPatterns\Creational\Builder\Parts\Car;
    use Tests\DesignPatterns\Creational\Builder\Parts\Truck;
    use Tests\DesignPatterns\Creational\Builder\Director;
    use PHPUnit\Framework\TestCase;

    class DirectionTest extends TestCase
    {
        public function testCanBuildCar()
        {
            $carBuilder = new CarBuilder();
            $car = (new Director())->build($carBuilder);
            $this->assertInstanceOf(Car::class, $car);
        }

        public function testCanBuildTruck()
        {
            $truckBuilder = new TruckBuilder();
            $truck = (new Director())->build($truckBuilder);
            $this->assertInstanceOf(Truck::class, $truck);
        }
    }