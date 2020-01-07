<?php 
namespace Tests\DesignPatterns\Structural\Adapter;

class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $totalPage = 200;

    public function unlock()
    {
        $this->page = 1;
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage():array
    {
        return [$this->page,$this->totalPage];
    }


}