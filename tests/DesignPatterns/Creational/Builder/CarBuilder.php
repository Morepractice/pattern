<?php 
    namespace Tests\DesignPatterns\Creational\Builder;

    use Tests\DesignPatterns\Creational\Builder\Parts\Vehicle;

    class CarBuilder implements BuilderInterface
    {
        /**
         * Parts\Car
         */
        private $car;

        public function createVehicle()
        {
            $this->car = new Parts\Car();
        }

        public function getVehicle():Vehicle
        {
            return $this->car;
        }

        public function addWheel()
        {
            $this->car->setParts('LFWheel',new Parts\Wheel());
            $this->car->setParts('RFWheel',new Parts\Wheel());
            $this->car->setParts('LRWheel',new Parts\Wheel());
            $this->car->setParts('RRWheel',new Parts\Wheel());
        }

        public function addDoors()
        {
            $this->car->setParts('LDoor',new Parts\Door());
            $this->car->setParts('RDoor',new Parts\Door());
        }

        public function addEngine()
        {
            $this->car->setParts('Engine',new Parts\Engine());
        }

    }