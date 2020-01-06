<?php
namespace Tests\DesignPatterns\Creational\Pool;

class StringReverseWorker
{
    /**
     * @var DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $str)
    {
        return strrev($str);
    }
}