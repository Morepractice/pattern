<?php
namespace Tests\DesignPatterns\Behavioral\ChainOfResponsbilities;

class SlowDatabaseHandler extends Handler
{

    /**
     * @param Request
     * @return string null
     */
    protected function processing(RequestInterface $request)
    {
        return 'Hello World';
    }
    
}