<?php
namespace Tests\DesignPatterns\Structural\DataMapper;

class StorageAdapter
{
    /**
     * @var array
     */
    private $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if(isset($this->data[$id])){
            return $this->data[$id];
        }

        return null;
    }
}