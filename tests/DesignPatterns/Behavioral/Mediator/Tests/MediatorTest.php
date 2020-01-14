<?php
namespace Tests\DesignPatterns\Behavioral\Mediator\Tests;

use Tests\DesignPatterns\Behavioral\Mediator\Mediator;
use Tests\DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use Tests\DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use Tests\DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator($client,new Server(),new Database());
        
        $this->expectOutputString('Hello World');
        $client->request();
    }
}