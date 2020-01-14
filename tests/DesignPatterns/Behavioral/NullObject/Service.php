<?php
namespace Tests\DesignPatterns\Behavioral\NullObject;

class Service
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log("We are in ".__METHOD__);
    }
}