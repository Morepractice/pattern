<?php
namespace Tests\DesignPatterns\Behavioral\Mediator\Subsystem;

class Client extends Colleague
{
    /**
     * 做出请求，发出响应
     */

     public function request()
     {
        $this->mediator->makeRequest();
     }

    public function output(string $content)
    {
        echo $content;
    }
}

