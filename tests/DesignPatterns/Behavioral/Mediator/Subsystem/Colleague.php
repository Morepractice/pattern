<?php 
namespace Tests\DesignPatterns\Behavioral\Mediator\Subsystem;

use Tests\DesignPatterns\Behavioral\Mediator\Mediator;

class Colleague
{
    /**
     * Mediator
     */
    protected $mediator;

    /**
     * @var Mediator
     */
    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

}