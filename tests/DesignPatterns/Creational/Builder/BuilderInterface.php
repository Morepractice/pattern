<?php

namespace Tests\DesignPatterns\creational\Builder;

use Tests\DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addDoors();

    public function addEngine();

    public function addWheel();

    public function getVehicle():Vehicle;
}
