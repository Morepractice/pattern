<?php
namespace Tests\DesignPatterns\Behavioral\Mediator\Subsystem;

class Database extends Colleague
{

    public function query():string
    {
        return "Hello World";
    }

}