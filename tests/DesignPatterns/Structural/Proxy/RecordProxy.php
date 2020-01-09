<?php
namespace Tests\DesignPatterns\Structural\Proxy;

class RecordProxy extends Record
{
    /**
     * @var bool
     */
    private $isDirty;

    /**
     * @var bool
     */
    private $initial;

    public function __construct($data = [])
    {
        parent::__construct($data);

        if(count($data) > 0) {
            $this->isDirty = true;
            $this->initial = true;
        }
    }

    public function __set(string $name,string $value)
    {
        parent::__set($name,$value);

        $this->isDirty = true;
    }

    public function __get(string $name)
    {
        parent::__get($name);
    }

    public function isDirty():bool
    {
        return $this->isDirty;
    }
}