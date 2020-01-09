<?php
namespace Tests\DesignPatterns\Structural\Proxy;

class Record
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __set(string $name,string $value)
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        if(!isset($this->data[$name])){
            throw new \OutOfRangeException("name not set");
        }
        return $this->data[$name];
    }
}