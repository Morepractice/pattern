<?php
namespace Tests\DesignPatterns\Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    public function log(string $message)
    {
        
    }
}