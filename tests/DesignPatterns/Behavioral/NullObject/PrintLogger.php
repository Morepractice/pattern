<?php
namespace Tests\DesignPatterns\Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    public function log(string $message)
    {
        echo $message;
    }
}