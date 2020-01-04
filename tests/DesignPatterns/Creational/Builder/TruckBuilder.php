<?php
    namespace Tests\DesignPatterns\Creational\Builder;

    use Tests\DesignPatterns\Creational\Builder\Parts\Vehicle;

    class TruckBuilder implements BuilderInterface
    {
        /**
         * Parts\Truck
         */
        private $truck;

        public function createVehicle()
        {
            $this->truck = new Parts\Truck();
        }

        public function getVehicle():Vehicle
        {
            return $this->truck;
        }

        public function addDoors()
        {
            $this->truck->setParts('LDoor',new Parts\Door());
            $this->truck->setParts('RDoor',new Parts\Door());
            $this->truck->setParts('LTruckId',new Parts\Door());
        }

        public function addWheel()
        {
            $this->truck->setParts('Wheel1',new Parts\Wheel());
            $this->truck->setParts('Wheel2',new Parts\Wheel());
            $this->truck->setParts('Wheel3',new Parts\Wheel());
            $this->truck->setParts('Wheel4',new Parts\Wheel());
            $this->truck->setParts('Wheel5',new Parts\Wheel());
            $this->truck->setParts('Wheel6',new Parts\Wheel());
        }

        public function addEngine()
        {
            $this->truck->setParts('Engine',new Parts\Engine());
        }

    }