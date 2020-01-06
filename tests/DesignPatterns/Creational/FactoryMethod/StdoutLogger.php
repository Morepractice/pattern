<?php 
    namespace Tests\DesignPatterns\Creational\FactoryMethod;

    class StdoutLogger implements Logger
    {
        public function log($message)
        {
            echo $message;
        }
    }