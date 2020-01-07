<?php
namespace Tests\DesignPatterns\Structural\Bridge;

class HelloService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello');
    }

}