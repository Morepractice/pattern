<?php
namespace Tests\DesignPatterns\Behavioral\Mediator\Subsystem;

class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDB();
        $this->mediator->sendResponse(sprintf('%s',$data));
    }
}