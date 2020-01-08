<?php
namespace Tests\DesignPatterns\Structural\Facade;

class Facade
{
    /**
     * @var OsInterface
     */
    private $os;

    /**
     * @var BiosInterface
     */
    private $bios;

    public function __construct(OsInterface $os, BiosInterface $bios)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function trueOff()
    {
        $this->os->halt();
        $this->ios->powerOff();
    }
}