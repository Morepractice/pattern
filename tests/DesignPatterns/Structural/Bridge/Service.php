<?php
namespace Tests\DesignPatterns\Structural\Bridge;

abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * @param FormatterInterface $implementation
     */
    public function __construct(FormatterInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @param FormatterInterface $implementation
     */
    public function setImplementation(FormatterInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    abstract function get();
}